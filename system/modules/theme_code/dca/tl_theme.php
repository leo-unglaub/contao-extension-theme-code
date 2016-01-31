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
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_theme']['palettes']['default'] = str_replace
(
	'screenshot',
	'screenshot;{tc_legend},tc_header,tc_footer;',
	$GLOBALS['TL_DCA']['tl_theme']['palettes']['default']
);


/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_theme']['fields']['tc_header'] = array
(
	'label'         => &$GLOBALS['TL_LANG']['tl_theme']['tc_header'],
	'exclude'		=> true,
	'inputType'     => 'textarea',
	'eval'			=> array
	(
		'tl_class'			=> 'long clr',
		'preserveTags'		=> true,
		'decodeEntities'	=> false,
		'allowHtml'			=> true,
		'style'				=> 'height:200px'
	)
);

$GLOBALS['TL_DCA']['tl_theme']['fields']['tc_footer'] = array
(
	'label'         => &$GLOBALS['TL_LANG']['tl_theme']['tc_footer'],
	'exclude'		=> true,
	'inputType'     => 'textarea',
	'eval'			=> array
	(
		'tl_class'			=> 'long clr',
		'preserveTags'		=> true,
		'decodeEntities'	=> false,
		'allowHtml'			=> true,
		'style'				=> 'height:200px'
	)
);
