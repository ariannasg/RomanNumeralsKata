<?php declare(strict_types=1);

namespace RomanNumerals\Test;

use PHPUnit\Framework\TestCase;
use RomanNumerals\RomanConverter;

class RomanConverterTest extends TestCase
{
    public function provideBaseNumbersToRoman(): array
    {
        return [
            [1, 'I'],
            [2, 'II'],
            [3, 'III'],
            [4, 'IV'],
            [5, 'V'],
            [6, 'VI'],
            [7, 'VII'],
            [8, 'VIII'],
            [9, 'IX'],
            [10, 'X'],
            [13, 'XIII'],
            [14, 'XIV'],
            [15, 'XV'],
            [18, 'XVIII'],
            [19, 'XIX'],
            [50, 'L'],
            [100, 'C'],
            [500, 'D'],
            [1000, 'M'],
            [1066, 'MLXVI'],
            [1435, 'MCDXXXV'],
            [1989, 'MCMLXXXIX']
        ];
    }

    /**
     * @dataProvider provideBaseNumbersToRoman
     * @param int $arabicNumber
     * @param string $expectedRomanNumber
     */
    public function testCanConvertNumbers(int $arabicNumber, string $expectedRomanNumber): void
    {
        $converter = new RomanConverter();
        $resultNumber = $converter->execute($arabicNumber);

        self::assertEquals(
            $expectedRomanNumber,
            $resultNumber,
            "When taking {$arabicNumber} we should return {$expectedRomanNumber}"
        );
    }
}
