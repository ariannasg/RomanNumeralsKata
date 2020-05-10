<?php declare(strict_types=1);

namespace RomanNumerals;

class RomanConverter
{
    private const BASE_NUMBERS_MAPPING = [
        1 => RomanNumber::I,
        4 => RomanNumber::IV,
        5 => RomanNumber::V,
        9 => RomanNumber::IX,
        10 => RomanNumber::X,
        50 => RomanNumber::L,
        100 => RomanNumber::C,
        400 => RomanNumber::CD,
        500 => RomanNumber::D,
        900 => RomanNumber::CM,
        1000 => RomanNumber::M,
    ];

    public function execute(int $number): string
    {
        if (array_key_exists($number, self::BASE_NUMBERS_MAPPING)) {
            return self::BASE_NUMBERS_MAPPING[$number];
        }

        return $this->convert($number);
    }

    private function convert(int $number): string
    {
        $resultRoman = '';

        $rSortedBasedNumbers = array_keys(self::BASE_NUMBERS_MAPPING);
        // sort my array in reverse order: 1000, 900, 500, 400, 100, 50, 10, 9, 5, 4, 1
        rsort($rSortedBasedNumbers);

        foreach ($rSortedBasedNumbers as $baseNumber) {
            if ($number - $baseNumber >= 0) {
                $newNumberToCompare = $number - $baseNumber;
                return self::BASE_NUMBERS_MAPPING[$baseNumber] . $this->convert($newNumberToCompare);
            }
        }

        return $resultRoman;
    }
}