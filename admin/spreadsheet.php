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

use Xmf\Request;
use XoopsModules\Wgphpoffice;
use XoopsModules\Wgphpoffice\ExamplesForms;

require __DIR__ . '/header.php';

// It recovered the value of argument op in URL$
$op   = Request::getCmd('op', 'list');
$type = Request::getCmd('type', 'none');

switch ($op) {
	case 'list':
	default:
		// Define Stylesheet
		$GLOBALS['xoTheme']->addStylesheet($style, null);
		$templateMain = 'wgphpoffice_admin_spreadsheet.tpl';

        $phpofficeForm = new ExamplesForms();
        $form = $phpofficeForm->getForm('spreadsheet');
        $GLOBALS['xoopsTpl']->assign('form', $form->render());

		break;
	case 'output':
        switch ($type) {
            case 'none';
            default:
                break;
            case 'xlsx';
                require_once WGPHPOFFICE_PATH . '/samples/PhpSpreadsheet/sample_xlsx.php';
                break;
            case 'xls':
                require_once WGPHPOFFICE_PATH . '/samples/PhpSpreadsheet/sample_xls.php';
                break;
            case 'ods':
                require_once WGPHPOFFICE_PATH . '/samples/PhpSpreadsheet/sample_ods.php';
                break;
        }
		break;
}
require __DIR__ . '/footer.php';
