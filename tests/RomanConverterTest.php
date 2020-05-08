<?php declare(strict_types=1);

namespace RomanNumerals\Test;

use PHPUnit\Framework\TestCase;
use RomanNumerals\RomanConverter;

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
     * @param int $arabicNumber
     * @param string $expectedRomanNumber
     */
    public function testCanConvertOurBaseNumbers(int $arabicNumber, string $expectedRomanNumber): void
    {
        $converter = new RomanConverter();
        $resultNumber = $converter->execute($arabicNumber);

        self::assertEquals(
            $expectedRomanNumber,
            $resultNumber,
            "When taking {$arabicNumber} we should return {$expectedRomanNumber}"
        );
    }

    public function testCanCovertAnyNumberThatIsNotInOurBaseMapping(): void
    {
        $converter = new RomanConverter();
        $resultNumber = $converter->execute(3);
        self::assertEquals("III", $resultNumber, "When taking 3 we should return III");
    }

    public function testRomanNumberCantContainMoreThanThreeIs(): void {
        $converter = new RomanConverter();
        $isValid = $converter->isRomanNumberValid('IIII');

        self::assertFalse($isValid, "The symbol 'I' can not be repeated more than 3 times in a row");
    }

    public function testRomanNumberCantContainMoreThanThreeXs(): void {
        $converter = new RomanConverter();
        $isValid = $converter->isRomanNumberValid('XXXXXX');

        self::assertFalse($isValid, "The symbol 'X' can not be repeated more than 3 times in a row");
    }
}
