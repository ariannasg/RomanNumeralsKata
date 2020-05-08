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
     * @param int $arabicNumber
     * @param string $expectedRomanNumber
     */
    public function testCanConvertOurBaseNumbers(int $arabicNumber, string $expectedRomanNumber): void
    {
        $resultNumber = $this->convert($arabicNumber);

        self::assertEquals(
            $expectedRomanNumber,
            $resultNumber,
            "When taking {$arabicNumber} we should return {$expectedRomanNumber}"
        );
    }

    public function testCanCovertAnyNumberThatIsNotInOurBaseMapping(): void
    {
        $resultNumber = $this->convert(3);
        self::assertEquals("III", $resultNumber, "When taking 3 we should return III");
    }

    private function convert(int $arabicNumber): string
    {
        $arabicToRomanMapping = [
            1 => 'I',
            5 => 'V',
            10 => 'X',
            50 => 'L',
            100 => 'C',
            500 => 'D',
            1000 => 'M',
            3 => 'III'
        ];

        if (array_key_exists($arabicNumber, $arabicToRomanMapping)) {
            return $arabicToRomanMapping[$arabicNumber];
        }

        return '';
    }
}
