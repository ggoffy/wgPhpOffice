<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

/**
 * wgPhpOffice module for xoops
 *
 * @copyright      2020 XOOPS Project (https://xooops.org)
 * @license        GPL 2.0 or later
 * @package        wgphpoffice
 * @since          1.0
 * @min_xoops      2.5.11
 * @author         XOOPS Development Team - Email:<webmaster@wedega.com> - Website:<https://xoops.wedega.com>
 */

$dirname       = \basename(\dirname(__DIR__));
$moduleHandler = \xoops_getHandler('module');
$xoopsModule   = XoopsModule::getByDirname($dirname);
$moduleInfo    = $moduleHandler->get($xoopsModule->getVar('mid'));
$sysPathIcon32 = $moduleInfo->getInfo('sysicons32');

$adminmenu[] = [
	'title' => _MI_WGPHPOFFICE_ADMENU1,
	'link' => 'admin/index.php',
	'icon' => $sysPathIcon32.'/dashboard.png',
];
$adminmenu[] = [
	'title' => _MI_WGPHPOFFICE_ADMENU2,
	'link' => 'admin/spreadsheet.php',
	'icon' => 'assets/icons/32/spreadsheet.png',
];
$adminmenu[] = [
	'title' => _MI_WGPHPOFFICE_ADMENU3,
	'link' => 'admin/word.php',
	'icon' => 'assets/icons/32/word.png',
];
$adminmenu[] = [
	'title' => _MI_WGPHPOFFICE_ADMENU4,
	'link' => 'admin/presentation.php',
	'icon' => 'assets/icons/32/presentation.png',
];
$adminmenu[] = [
	'title' => _MI_WGPHPOFFICE_ADMENU5,
	'link' => 'admin/feedback.php',
	'icon' => 'assets/icons/32/feedback.png',
];
$adminmenu[] = [
	'title' => _MI_WGPHPOFFICE_ABOUT,
	'link' => 'admin/about.php',
	'icon' => $sysPathIcon32.'/about.png',
];
