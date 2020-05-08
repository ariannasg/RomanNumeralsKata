<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class RomanConverterTest extends TestCase
{
    public function provideBaseNumbersToRoman(): array
    {
        return [
            [1, "I"],
            [5, "V"],
            [10, "X"],
            [50, "L"],
            [100, "C"],
            [500, "D"],
            [1000, "M"]
        ];
    }

    /**
     * @dataProvider provideBaseNumbersToRoman
     * @param int $inputNumber
     * @param string $expectedRomanNumber
     */
    public function testCanConvertBaseNumbersToRoman(int $inputNumber, string $expectedRomanNumber): void
    {
        $romanNumber = $this->convertNumber($inputNumber);

        self::assertEquals(
            $expectedRomanNumber,
            $romanNumber,
            "When taking {$inputNumber} we should return {$expectedRomanNumber}"
        );
    }

    private function convertNumber(int $number): string
    {
        $numberToRomanMapping = [
            1 => 'I',
            5 => 'V',
            10 => 'X',
            50 => 'L',
            100 => 'C',
            500 => 'D',
            1000 => 'M'
        ];

        if (array_key_exists($number, $numberToRomanMapping)) {
            return $numberToRomanMapping[$number];
        }

        return '';
    }
}
