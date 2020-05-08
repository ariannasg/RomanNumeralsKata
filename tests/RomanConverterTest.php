<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class RomanConverterTest extends TestCase
{
    public function testCanConvert1ToRomanNumber(): void {
        $romanNumber = $this->convertNumber(1);

        self::assertEquals("I", $romanNumber, "When taking 1 we should return 'I'");
    }

    private function convertNumber(int $int): string
    {
        return "I";
    }
}
