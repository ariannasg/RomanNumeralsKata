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

        return $this->recursiveConversion($number);
    }

    private function recursiveConversion(int $number): string
    {
        $baseNumbers = array_keys(self::BASE_NUMBERS_MAPPING);
        rsort($baseNumbers); // sort my array in reverse order: 1000, 500, 100, 50, 10, 5, 1

        $resultRoman = '';
        foreach ($baseNumbers as $baseNumber) {
            if ($number - $baseNumber >= 0) {
                $newNumberToCompare = $number - $baseNumber;
                return self::BASE_NUMBERS_MAPPING[$baseNumber] . $this->recursiveConversion($newNumberToCompare);
            }
        }
        return $resultRoman;
    }
}