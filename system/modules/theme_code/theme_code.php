<?php

/**
 * contao-theme-code
 *
 * @copyright	Leo Unglaub 2016
 * @author		Leo Unglaub <leo@leo-unglaub.net>
 * @package		contao-theme-code
 * @license		GPL
 */


/**
 * Class theme_code
 */
class theme_code extends Frontend
{
	/**
	 * Add the theme code to the Site (Hook landing)
	 *
	 * @param	string	$strContent
	 * @param	string	$strTemplate
	 * @return	void
	 */
	public function addThemeCode ($strContent, $strTemplate)
	{
		// make TC running only one time
		if ($GLOBALS['theme_code_stop'])
		{
			return $strContent;
		}

		$this->import ('Database');
		global $objPage;

		// detect the layout ID
		if ($objPage->layout != '')
		{
			$intLayoutId = $objPage->layout;
		}
		else
		{
			$objLayoutFallback = $this->Database->prepare ('SELECT id FROM tl_layout WHERE fallback=1')
												->limit (1)
												->execute ();

			$intLayoutId = $objLayoutFallback->id;
		}

		// get the tc_values
		$objTheme = $this->Database->prepare ('SELECT tc_header,tc_footer FROM tl_theme WHERE id=(SELECT pid FROM tl_layout WHERE id=?)')
								   ->limit (1)
								   ->execute ($intLayoutId);


		// add the code to the right channel
		$GLOBALS['TL_HEAD'][] = $objTheme->tc_header;
		$GLOBALS['TL_MOOTOOLS'][] = $objTheme->tc_footer;

		// after the first run the code is in the page so we can skip parsing all other templates
		$GLOBALS['theme_code_stop'] = true;

		return $strContent;
	}
}
