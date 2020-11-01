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

// 
$moduleDirName      = \basename(__DIR__);
$moduleDirNameUpper = \mb_strtoupper($moduleDirName);
// ------------------- Informations ------------------- //
$modversion = [
	'name'                => _MI_WGPHPOFFICE_NAME,
	'version'             => 1.0,
	'description'         => _MI_WGPHPOFFICE_DESC,
	'author'              => 'XOOPS Development Team',
	'author_mail'         => 'webmaster@wedega.com',
	'author_website_url'  => 'https://xoops.wedega.com',
	'author_website_name' => 'XOOPS on Wedega',
	'credits'             => 'XOOPS Development Team',
	'license'             => 'GPL 2.0 or later',
	'license_url'         => 'http://www.gnu.org/licenses/gpl-3.0.en.html',
	'help'                => 'page=help',
	'release_info'        => 'release_info',
	'release_file'        => XOOPS_URL . '/modules/wgphpoffice/docs/release_info file',
	'release_date'        => '2020/10/27',
	'manual'              => 'link to manual file',
	'manual_file'         => XOOPS_URL . '/modules/wgphpoffice/docs/install.txt',
	'min_php'             => '7.3',
	'min_xoops'           => '2.5.10',
	'min_admin'           => '1.2',
	'min_db'              => ['mysql' => '5.5', 'mysqli' => '5.5'],
	'image'               => 'assets/images/logoModule.png',
	'dirname'             => \basename(__DIR__),
	'dirmoduleadmin'      => 'Frameworks/moduleclasses/moduleadmin',
	'sysicons16'          => '../../Frameworks/moduleclasses/icons/16',
	'sysicons32'          => '../../Frameworks/moduleclasses/icons/32',
	'modicons16'          => 'assets/icons/16',
	'modicons32'          => 'assets/icons/32',
	'demo_site_url'       => 'https://xoops.org',
	'demo_site_name'      => 'XOOPS Demo Site',
	'support_url'         => 'https://xoops.org/modules/newbb',
	'support_name'        => 'Support Forum',
	'module_website_url'  => 'www.xoops.org',
	'module_website_name' => 'XOOPS Project',
	'release'             => '09/01/2020',
	'module_status'       => 'Beta 1',
	'system_menu'         => 1,
	'hasAdmin'            => 1,
	'hasMain'             => 0,
	'adminindex'          => 'admin/index.php',
	'adminmenu'           => 'admin/menu.php',
	'onInstall'           => 'include/install.php',
	'onUninstall'         => 'include/uninstall.php',
	'onUpdate'            => 'include/update.php',
];
// ------------------- Templates ------------------- //
$modversion['templates'] = [
	// Admin templates
	['file' => 'wgphpoffice_admin_about.tpl', 'description' => '', 'type' => 'admin'],
	['file' => 'wgphpoffice_admin_header.tpl', 'description' => '', 'type' => 'admin'],
	['file' => 'wgphpoffice_admin_index.tpl', 'description' => '', 'type' => 'admin'],
	['file' => 'wgphpoffice_admin_spreadsheet.tpl', 'description' => '', 'type' => 'admin'],
	['file' => 'wgphpoffice_admin_word.tpl', 'description' => '', 'type' => 'admin'],
	['file' => 'wgphpoffice_admin_presentation.tpl', 'description' => '', 'type' => 'admin'],
	['file' => 'wgphpoffice_admin_footer.tpl', 'description' => '', 'type' => 'admin'],
];
// ------------------- Mysql ------------------- //
$modversion['sqlfile']['mysql'] = 'sql/mysql.sql';
// Tables
$modversion['tables'] = [
];
// ------------------- Config ------------------- //
// Maintained by
$modversion['config'][] = [
	'name'        => 'maintainedby',
	'title'       => '_MI_WGPHPOFFICE_MAINTAINEDBY',
	'description' => '_MI_WGPHPOFFICE_MAINTAINEDBY_DESC',
	'formtype'    => 'textbox',
	'valuetype'   => 'text',
	'default'     => 'https://xoops.org/modules/newbb',
];
