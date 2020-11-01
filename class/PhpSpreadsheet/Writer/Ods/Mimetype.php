<?php

namespace XoopsModules\Wgphpoffice\PhpSpreadsheet\Writer\Ods;

use XoopsModules\Wgphpoffice\PhpSpreadsheet\Spreadsheet;

class Mimetype extends WriterPart
{
    /**
     * Write mimetype to plain text format.
     *
     * @param Spreadsheet $spreadsheet
     *
     * @return string XML Output
     */
    public function write(?Spreadsheet $spreadsheet = null)
    {
        return 'application/vnd.oasis.opendocument.spreadsheet';
    }
}
