<?php declare(strict_types=1);

namespace RomanNumerals\Test;

use PHPUnit\Framework\TestCase;
use RomanNumerals\RomanNumber;

class RomanNumberTest extends TestCase
{
    public function testRomanNumberCantContainMoreThanThreeIs(): void
    {
        $romanNumber = new RomanNumber('IIII');
        $isValid = $romanNumber->isValid();

        self::assertFalse($isValid, "The symbol 'I' can not be repeated more than 3 times in a row");
    }

    public function testRomanNumberCantContainMoreThanThreeXs(): void
    {
        $romanNumber = new RomanNumber('XXXXXX');
        $isValid = $romanNumber->isValid();

        self::assertFalse($isValid, "The symbol 'X' can not be repeated more than 3 times in a row");
    }

    public function testRomanNumberCantContainMoreThanThreeCs(): void
    {
        $romanNumber = new RomanNumber('CCCC');
        $isValid = $romanNumber->isValid();

        self::assertFalse($isValid, "The symbol 'C' can not be repeated more than 3 times in a row");
    }

    public function testRomanNumberCantContainMoreThanThreeMs(): void
    {
        $romanNumber = new RomanNumber('MMMMMM');
        $isValid = $romanNumber->isValid();

        self::assertFalse($isValid, "The symbol 'M' can not be repeated more than 3 times in a row");
    }

    public function testRomanNumberCantContainMoreThanOneV(): void
    {
        $romanNumber = new RomanNumber('VV');
        $isValid = $romanNumber->isValid();

        self::assertFalse($isValid, "The symbol 'V' can never be repeated");
    }

    public function testRomanNumberCantContainMoreThanOneL(): void
    {
        $romanNumber = new RomanNumber('LLL');
        $isValid = $romanNumber->isValid();

        self::assertFalse($isValid, "The symbol 'L' can never be repeated");
    }

    public function testRomanNumberCantContainMoreThanOneD(): void
    {
        $romanNumber = new RomanNumber('DD');
        $isValid = $romanNumber->isValid();

        self::assertFalse($isValid, "The symbol 'D' can never be repeated");
    }
}
