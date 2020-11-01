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
if (!\defined('XOOPS_ICONS32_PATH')) {
	\define('XOOPS_ICONS32_PATH', XOOPS_ROOT_PATH . '/Frameworks/moduleclasses/icons/32');
}
if (!\defined('XOOPS_ICONS32_URL')) {
	\define('XOOPS_ICONS32_URL', XOOPS_URL . '/Frameworks/moduleclasses/icons/32');
}
\define('WGPHPOFFICE_DIRNAME', 'wgphpoffice');
\define('WGPHPOFFICE_PATH', XOOPS_ROOT_PATH . '/modules/' . WGPHPOFFICE_DIRNAME);
\define('WGPHPOFFICE_URL', XOOPS_URL . '/modules/' . WGPHPOFFICE_DIRNAME);
\define('WGPHPOFFICE_ICONS_PATH', WGPHPOFFICE_PATH . '/assets/icons');
\define('WGPHPOFFICE_ICONS_URL', WGPHPOFFICE_URL . '/assets/icons');
//\define('WGPHPOFFICE_IMAGE_PATH', WGPHPOFFICE_PATH . '/assets/images');
\define('WGPHPOFFICE_IMAGE_URL', WGPHPOFFICE_URL . '/assets/images');
\define('WGPHPOFFICE_ADMIN', WGPHPOFFICE_URL . '/admin/index.php');
$localLogo = WGPHPOFFICE_IMAGE_URL . '/xoopsdevelopmentteam_logo.png';
// Module Information
$copyright = "<a href='https://xoops.wedega.com' title='XOOPS on Wedega' target='_blank'><img src='" . $localLogo . "' alt='XOOPS on Wedega' /></a>";
include_once XOOPS_ROOT_PATH . '/class/xoopsrequest.php';
include_once WGPHPOFFICE_PATH . '/include/functions.php';
