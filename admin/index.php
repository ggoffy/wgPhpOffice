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
 * @author         Goffy - XOOPS Development Team - Email:<webmaster@wedega.com> - Website:<https://xoops.wedega.com>
 */


use XoopsModules\Wgphpoffice\Common;

require __DIR__ . '/header.php';

// Template Index
$templateMain = 'wgphpoffice_admin_index.tpl';

// InfoBox Statistics
$adminObject->addInfoBox(_AM_WGPHPOFFICE_STATISTICS);
// Info elements
$adminObject->addInfoBoxLine('<label>' . _AM_WGPHPOFFICE_SPREADSHEET . '</label>');
$adminObject->addInfoBoxLine('<label>' . _AM_WGPHPOFFICE_WORD . '</label>');
$adminObject->addInfoBoxLine('<label>' . _AM_WGPHPOFFICE_PRESENTATION . '</label>');

// Render Index
$GLOBALS['xoopsTpl']->assign('navigation', $adminObject->displayNavigation('index.php'));
$GLOBALS['xoopsTpl']->assign('index', $adminObject->displayIndex());
// End Test Data
require __DIR__ . '/footer.php';
