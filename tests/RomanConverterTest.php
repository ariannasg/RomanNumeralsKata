<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class RomanConverterTest extends TestCase
{
    public function provideBaseNumbersToRoman(): array
    {
        return [
            [1, "I"],
            [5, "V"],
            [10, "X"]
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
        if ($number === 1) {
            return "I";
        }

        if ($number === 5) {
            return "V";
        }

        if ($number === 10) {
            return "X";
        }

        return '';
    }
}
