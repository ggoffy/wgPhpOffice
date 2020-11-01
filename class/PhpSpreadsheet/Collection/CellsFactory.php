<?php

namespace XoopsModules\Wgphpoffice\PhpSpreadsheet\Collection;

use XoopsModules\Wgphpoffice\PhpSpreadsheet\Settings;
use XoopsModules\Wgphpoffice\PhpSpreadsheet\Worksheet\Worksheet;

abstract class CellsFactory
{
    /**
     * Initialise the cache storage.
     *
     * @param Worksheet $parent Enable cell caching for this worksheet
     *
     * @return Cells
     * */
    public static function getInstance(Worksheet $parent)
    {
        return new Cells($parent, Settings::getCache());
    }
}
