<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class RomanConverterTest extends TestCase
{
    public function testCanConvert1(): void {
        $romanNumber = $this->convertNumber(1);

        self::assertEquals("I", $romanNumber, "When taking 1 we should return 'I'");
    }

    public function testCanConvert5(): void {
        $romanNumber = $this->convertNumber(5);

        self::assertEquals("V", $romanNumber, "When taking 5 we should return 'V'");
    }

    public function testCanConvert10(): void {
        $romaNumber = $this->convertNumber(10);

        self::assertEquals("X", $romaNumber, "When taking 10 we should return 'X");
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
