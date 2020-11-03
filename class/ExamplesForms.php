<?php

namespace XoopsModules\Wgphpoffice;

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

use XoopsModules\Wgphpoffice;
use PhpOffice;

\defined('XOOPS_ROOT_PATH') || die('Restricted access');

/**
 * Class Object Spreadsheets
 */
class ExamplesForms
{
	/**
	 * Constructor
	 *
	 * @param null
	 */
	public function __construct()
	{
	}

	/**
	 * @static function &getInstance
	 *
	 * @param null
	 */
	public static function getInstance()
	{
		static $instance = false;
		if (!$instance) {
			$instance = new self();
		}
	}

	/**
	 * @public function getForm
	 * @param bool $action
	 * @return \XoopsThemeForm
	 */
	public function getForm($type = 'none')
	{
	    $action = $_SERVER['REQUEST_URI'];

		// Get Theme Form
		\xoops_load('XoopsFormLoader');
		$form = new \XoopsThemeForm(\_AM_WGPHPOFFICE_SAMPLE, 'form', $action, 'post', true);
		$form->setExtra('enctype="multipart/form-data"');
        // Form Select Status traStatus
        $typeSelect = new \XoopsFormSelect(\_AM_WGPHPOFFICE_SAMPLE_TYPE, 'type', 'xlsx');
        switch ($type) {
            case 'none':
            default:
                break;
            case 'spreadsheet':
                $typeSelect->addOption('xls', 'xls');
                $typeSelect->addOption('xlsx', 'xlsx');
                $typeSelect->addOption('ods', 'ods');
                $typeSelect->addOption('pdf', 'pdf');
                $github = "<a href='https://github.com/PHPOffice/PhpSpreadsheet'>https://github.com/PHPOffice/PhpSpreadsheet</a>";
                $docu = "<a href='https://phpspreadsheet.readthedocs.io/en/latest/'>https://phpspreadsheet.readthedocs.io/en/latest/</a>";
                $img ="<img src='" . WGPHPOFFICE_IMAGE_URL . "/phpspreadsheet.png'>";
                break;
            case 'word':
                $typeSelect->addOption('rtf', 'rtf');
                $typeSelect->addOption('html', 'html');
                $typeSelect->addOption('pdf', 'pdf');
                $github = "<a href='https://github.com/PHPOffice/PhpWord'>https://github.com/PHPOffice/PhpWord</a>";
                $docu = "<a href='https://phpword.readthedocs.io/en/latest/'>https://phpword.readthedocs.io/en/latest/</a>";
                $img ="<img src='" . WGPHPOFFICE_IMAGE_URL . "/phpword.png'>";
                break;
            case 'presentation':
                $typeSelect->addOption('ppt', 'ppt');
                $github = "<a href='https://github.com/PHPOffice/PhpPresentation'>https://github.com/PHPOffice/PhpPresentation</a>";
                $docu = "<a href='https://phppresentation.readthedocs.io/en/latest/'>https://phppresentation.readthedocs.io/en/latest/</a>";
                $img ="<img src='" . WGPHPOFFICE_IMAGE_URL . "/phppowerpoint.png'>";
                break;
        }
        $form->addElement(new \XoopsFormLabel('', $img));
        $form->addElement(new \XoopsFormLabel(_AM_WGPHPOFFICE_SAMPLE_GITHUB, $github));
        $form->addElement(new \XoopsFormLabel(_AM_WGPHPOFFICE_SAMPLE_DOCU, $docu));
        $form->addElement($typeSelect);
		// To Save
		$form->addElement(new \XoopsFormHidden('op', 'output'));
        $form->addElement(new \XoopsFormButton('', 'output', \_AM_WGPHPOFFICE_OUTPUT, 'submit'));
		return $form;
	}



}
