<?php //if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  LU-Hosting 2010
 * @author     Leo Unglaub <leo@leo-unglaub.net>
 * @package    theme_code
 * @license    LGPL
 * @filesource
 */

class theme_code extends Frontend {
		
	/**
	 * Add the theme Code to the Site (Hook landing)
	 */
	public function addThemeCode($strContent, $strTemplate)
	{	
		// make HC running only one time
		if ($GLOBALS['theme_code_stop'])
		{
			return $strContent;
		}

		$this->import('Database');
		global $objPage;

		// detect the layout ID
		if ($objPage->layout != '')
			$intLayoutId = $objPage->layout;
		else
		{
			$objLayoutFallback = $this->Database->prepare('SELECT id FROM tl_layout WHERE fallback=1')
												->limit(1)
												->execute();

			$intLayoutId = $objLayoutFallback->id;
		}

		// get the tc_values
		$objTheme = $this->Database->prepare('SELECT tc_header,tc_footer FROM tl_theme WHERE id=(SELECT pid FROM tl_layout WHERE id=?)')
								   ->limit(1)
								   ->execute($intLayoutId);

		// add the code to the right channel
		$GLOBALS['TL_HEAD'][] = $objTheme->tc_header;
		$GLOBALS['TL_MOOTOOLS'][] = $objTheme->tc_footer;

		// after the first run the code is in the page so we can skip parsing all other templates
		$GLOBALS['theme_code_stop'] = 'true';

		return $strContent;
	}
}
 
?>