<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

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

/**
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_theme']['palettes']['default'] = str_replace('screenshot', 'screenshot;{tc_legend},tc_header,tc_footer;', $GLOBALS['TL_DCA']['tl_theme']['palettes']['default']);

/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_theme']['fields']['tc_header'] = array
(
	'label'         => &$GLOBALS['TL_LANG']['tl_theme']['tc_header'],
	'exclude'		=> true,
	'inputType'     => 'textarea',
	'eval'			=> array('tl_class'=>'long clr', 'preserveTags'=>true, 'decodeEntities'=>false, 'allowHtml'=>true, 'style'=>'height:200px')
);

$GLOBALS['TL_DCA']['tl_theme']['fields']['tc_footer'] = array
(
	'label'         => &$GLOBALS['TL_LANG']['tl_theme']['tc_footer'],
	'exclude'		=> true,
	'inputType'     => 'textarea',
	'eval'			=> array('tl_class'=>'long clr', 'preserveTags'=>true, 'decodeEntities'=>false, 'allowHtml'=>true, 'style'=>'height:200px')
);
?>