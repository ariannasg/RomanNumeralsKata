<?php declare(strict_types=1);

namespace RomanNumerals;

class RomanNumber
{
    public const I = 'I';
    public const V = 'V';
    public const X = 'X';
    public const L = 'L';
    public const C = 'C';
    public const D = 'D';
    public const M = 'M';

    private $romanNumber;

    public function __construct(string $romanNumber)
    {
        $this->romanNumber = $romanNumber;
    }

    public function isValid(): bool
    {
        return !(
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
        return substr_count($this->romanNumber, $symbol) > $times;
    }
}