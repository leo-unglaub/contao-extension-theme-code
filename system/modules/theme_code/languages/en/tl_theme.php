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
 * Legend
 */
$GLOBALS['TL_LANG']['tl_theme']['tc_legend'] = 'custom theme code';

/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_theme']['tc_header']	= array('custom header code', 'Here you can add some header code like .css includes, .js files, ... . Your code will addet to every page with this theme assigned');
$GLOBALS['TL_LANG']['tl_theme']['tc_footer']	= array('custom footer code', 'Here you can add some footer code. The code will addet over the Google Analyitcs tracker code in the end of the page. Your code will addet to every page with this theme assigned.');
?>