<?php declare(strict_types=1);

namespace RomanNumerals\Test;

use PHPUnit\Framework\TestCase;
use RomanNumerals\RomanNumber;

class RomanNumberTest extends TestCase
{
    public function provideRomanNumbersWithMoreThanThreeIs(): array
    {
        return [
            ['I', true],
            ['II', true],
            ['III', true],
            ['IIII', false],
            ['IIIII', false],
            ['IIIIIII', false]
        ];
    }

    public function provideRomanNumbersWithMoreThanThreeXs(): array
    {
        return [
            ['X', true],
            ['XX', true],
            ['XXX', true],
            ['XXXX', false],
            ['XXXXX', false],
            ['XXXXXXX', false]
        ];
    }

    public function provideRomanNumbersWithMoreThanThreeCs(): array
    {
        return [
            ['C', true],
            ['CC', true],
            ['CCC', true],
            ['CCCC', false],
            ['CCCCC', false],
            ['CCCCCCC', false]
        ];
    }

    public function provideRomanNumbersWithMoreThanThreeMs(): array
    {
        return [
            ['M', true],
            ['MM', true],
            ['MMM', true],
            ['MMMM', false],
            ['MMMMM', false],
            ['MMMMMMM', false]
        ];
    }

    public function provideRomanNumbersWithMoreThanOneV(): array
    {
        return [
            ['V', true],
            ['VV', false],
            ['VVV', false],
            ['VVVV', false],
        ];
    }

    public function provideRomanNumbersWithMoreThanOneL(): array
    {
        return [
            ['L', true],
            ['LL', false],
            ['LLL', false],
            ['LLLL', false],
        ];
    }

    public function provideRomanNumbersWithMoreThanOneD(): array
    {
        return [
            ['D', true],
            ['DD', false],
            ['DDD', false],
            ['DDDD', false],
        ];
    }

    public function testCanOnlyContainSymbolsFromTheBaseAlphabet(): void
    {
        $romanNumber = new RomanNumber('AXIB');

        self::assertEquals(
            false,
            $romanNumber->isValid(),
            "Roman numbers can only contain these symbols: I, V, X, L, C, D, M"
        );
    }

    /**
     * @dataProvider provideRomanNumbersWithMoreThanThreeIs
     * @param string $value
     * @param bool $expectedIsValid
     */
    public function testRomanNumberCantContainMoreThanThreeIs(string $value, bool $expectedIsValid): void
    {
        $romanNumber = new RomanNumber($value);

        self::assertEquals(
            $expectedIsValid,
            $romanNumber->isValid(),
            "The symbol 'I' can not be repeated more than 3 times in a row"
        );
    }

    /**
     * @dataProvider provideRomanNumbersWithMoreThanThreeXs
     * @param string $value
     * @param bool $expectedIsValid
     */
    public function testRomanNumberCantContainMoreThanThreeXs(string $value, bool $expectedIsValid): void
    {
        $romanNumber = new RomanNumber($value);

        self::assertEquals(
            $expectedIsValid,
            $romanNumber->isValid(),
            "The symbol 'X' can not be repeated more than 3 times in a row"
        );
    }

    /**
     * @dataProvider provideRomanNumbersWithMoreThanThreeCs
     * @param string $value
     * @param bool $expectedIsValid
     */
    public function testRomanNumberCantContainMoreThanThreeCs(string $value, bool $expectedIsValid): void
    {
        $romanNumber = new RomanNumber($value);

        self::assertEquals(
            $expectedIsValid,
            $romanNumber->isValid(),
            "The symbol 'C' can not be repeated more than 3 times in a row"
        );
    }

    /**
     * @dataProvider provideRomanNumbersWithMoreThanThreeMs
     * @param string $value
     * @param bool $expectedIsValid
     */
    public function testRomanNumberCantContainMoreThanThreeMs(string $value, bool $expectedIsValid): void
    {
        $romanNumber = new RomanNumber($value);

        self::assertEquals(
            $expectedIsValid,
            $romanNumber->isValid(),
            "The symbol 'M' can not be repeated more than 3 times in a row"
        );
    }

    /**
     * @dataProvider provideRomanNumbersWithMoreThanOneV
     * @param string $value
     * @param bool $expectedIsValid
     */
    public function testRomanNumberCantContainMoreThanOneV(string $value, bool $expectedIsValid): void
    {
        $romanNumber = new RomanNumber($value);

        self::assertEquals(
            $expectedIsValid,
            $romanNumber->isValid(),
            "The symbol 'V' can never be repeated"
        );
    }

    /**
     * @dataProvider provideRomanNumbersWithMoreThanOneL
     * @param string $value
     * @param bool $expectedIsValid
     */
    public function testRomanNumberCantContainMoreThanOneL(string $value, bool $expectedIsValid): void
    {
        $romanNumber = new RomanNumber($value);

        self::assertEquals(
            $expectedIsValid,
            $romanNumber->isValid(),
            "The symbol 'L' can never be repeated"
        );
    }

    /**
     * @dataProvider provideRomanNumbersWithMoreThanOneD
     * @param string $value
     * @param bool $expectedIsValid
     */
    public function testRomanNumberCantContainMoreThanOneD(string $value, bool $expectedIsValid): void
    {
        $romanNumber = new RomanNumber($value);

        self::assertEquals(
            $expectedIsValid,
            $romanNumber->isValid(),
            "The symbol 'D' can never be repeated"
        );
    }
}
