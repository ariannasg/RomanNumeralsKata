<?php declare(strict_types=1);

namespace RomanNumerals;

class RomanConverter
{
    private const BASE_NUMBERS_MAPPING = [
        1 => 'I',
        5 => 'V',
        10 => 'X',
        50 => 'L',
        100 => 'C',
        500 => 'D',
        1000 => 'M',
    ];

    public function execute(int $number): string
    {
        if (array_key_exists($number, self::BASE_NUMBERS_MAPPING)) {
            return self::BASE_NUMBERS_MAPPING[$number];
        }

        return $this->convertByAddingSmallerBases($number);
    }

    private function convertByAddingSmallerBases(int $number): string
    {
        $rSortedBasedNumbers = array_keys(self::BASE_NUMBERS_MAPPING);
        rsort($rSortedBasedNumbers); // sort my array in reverse order: 1000, 500, 100, 50, 10, 5, 1

        $resultRoman = '';
        foreach ($rSortedBasedNumbers as $baseNumber) {
            if ($number - $baseNumber >= 0) {
                $newNumberToCompare = $number - $baseNumber;
                return self::BASE_NUMBERS_MAPPING[$baseNumber] . $this->convertByAddingSmallerBases($newNumberToCompare);
            }
        }
        return $resultRoman;
    }

    public function isRomanNumberValid(string $romanNumber): bool
    {
        if (substr_count($romanNumber, 'I') > 3) {
            return false;
        }

        if (substr_count($romanNumber, 'X') > 3) {
            return false;
        }

        return true;
    }
}