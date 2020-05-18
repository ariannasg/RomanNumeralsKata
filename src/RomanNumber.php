<?php declare(strict_types=1);

namespace RomanNumerals;

class RomanNumber
{
    public const I = 'I';
    public const IV = 'IV';
    public const V = 'V';
    public const X = 'X';
    public const IX = 'IX';
    public const XL = 'XL';
    public const L = 'L';
    public const XC = 'XC';
    public const C = 'C';
    public const CD = 'CD';
    public const D = 'D';
    public const CM = 'CM';
    public const M = 'M';

    /**
     * @var string
     */
    private $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function isValid(): bool
    {
        return $this->isEachSymbolFromTheBaseAlphabet() &&
            !(
                $this->isSymbolRepeated(self::I, 3) ||
                $this->isSymbolRepeated(self::X, 3) ||
                $this->isSymbolRepeated(self::C, 3) ||
                $this->isSymbolRepeated(self::M, 3) ||
                $this->isSymbolRepeated(self::V, 1) ||
                $this->isSymbolRepeated(self::L, 1) ||
                $this->isSymbolRepeated(self::D, 1)
            );
    }

    /**
     * @param string $symbol
     * @param int $times
     * @return bool
     */
    private function isSymbolRepeated(string $symbol, int $times): bool
    {
        return substr_count($this->value, $symbol) > $times;
    }

    /**
     * @return bool
     */
    private function isEachSymbolFromTheBaseAlphabet(): bool
    {
        // ^ Start of string, or start of line in multi-line pattern
        // + One or more
        // $ End of string, or end of line in multi-line pattern
        if (preg_match('/^[IVXLCDM]+$/', $this->value)) {
            return true;
        }

        return false;
    }
}