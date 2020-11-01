<?php

namespace XoopsModules\Wgphpoffice\PhpSpreadsheet\Writer\Xls;

use XoopsModules\Wgphpoffice\PhpSpreadsheet\Shared\StringHelper;

class Font
{
    /**
     * Color index.
     *
     * @var int
     */
    private $colorIndex;

    /**
     * Font.
     *
     * @var \XoopsModules\Wgphpoffice\PhpSpreadsheet\Style\Font
     */
    private $font;

    /**
     * Constructor.
     */
    public function __construct(\XoopsModules\Wgphpoffice\PhpSpreadsheet\Style\Font $font)
    {
        $this->colorIndex = 0x7FFF;
        $this->font = $font;
    }

    /**
     * Set the color index.
     *
     * @param int $colorIndex
     */
    public function setColorIndex($colorIndex): void
    {
        $this->colorIndex = $colorIndex;
    }

    /**
     * Get font record data.
     *
     * @return string
     */
    public function writeFont()
    {
        $font_outline = 0;
        $font_shadow = 0;

        $icv = $this->colorIndex; // Index to color palette
        if ($this->font->getSuperscript()) {
            $sss = 1;
        } elseif ($this->font->getSubscript()) {
            $sss = 2;
        } else {
            $sss = 0;
        }
        $bFamily = 0; // Font family
        $bCharSet = \XoopsModules\Wgphpoffice\PhpSpreadsheet\Shared\Font::getCharsetFromFontName($this->font->getName()); // Character set

        $record = 0x31; // Record identifier
        $reserved = 0x00; // Reserved
        $grbit = 0x00; // Font attributes
        if ($this->font->getItalic()) {
            $grbit |= 0x02;
        }
        if ($this->font->getStrikethrough()) {
            $grbit |= 0x08;
        }
        if ($font_outline) {
            $grbit |= 0x10;
        }
        if ($font_shadow) {
            $grbit |= 0x20;
        }

        $data = pack(
            'vvvvvCCCC',
            // Fontsize (in twips)
            $this->font->getSize() * 20,
            $grbit,
            // Colour
            $icv,
            // Font weight
            self::mapBold($this->font->getBold()),
            // Superscript/Subscript
            $sss,
            self::mapUnderline($this->font->getUnderline()),
            $bFamily,
            $bCharSet,
            $reserved
        );
        $data .= StringHelper::UTF8toBIFF8UnicodeShort($this->font->getName());

        $length = strlen($data);
        $header = pack('vv', $record, $length);

        return $header . $data;
    }

    /**
     * Map to BIFF5-BIFF8 codes for bold.
     *
     * @param bool $bold
     *
     * @return int
     */
    private static function mapBold($bold)
    {
        if ($bold) {
            return 0x2BC; //  700 = Bold font weight
        }

        return 0x190; //  400 = Normal font weight
    }

    /**
     * Map of BIFF2-BIFF8 codes for underline styles.
     *
     * @var array of int
     */
    private static $mapUnderline = [
        \XoopsModules\Wgphpoffice\PhpSpreadsheet\Style\Font::UNDERLINE_NONE => 0x00,
        \XoopsModules\Wgphpoffice\PhpSpreadsheet\Style\Font::UNDERLINE_SINGLE => 0x01,
        \XoopsModules\Wgphpoffice\PhpSpreadsheet\Style\Font::UNDERLINE_DOUBLE => 0x02,
        \XoopsModules\Wgphpoffice\PhpSpreadsheet\Style\Font::UNDERLINE_SINGLEACCOUNTING => 0x21,
        \XoopsModules\Wgphpoffice\PhpSpreadsheet\Style\Font::UNDERLINE_DOUBLEACCOUNTING => 0x22,
    ];

    /**
     * Map underline.
     *
     * @param string $underline
     *
     * @return int
     */
    private static function mapUnderline($underline)
    {
        if (isset(self::$mapUnderline[$underline])) {
            return self::$mapUnderline[$underline];
        }

        return 0x00;
    }
}
