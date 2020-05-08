<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class RomanConverterTest extends TestCase
{
    private const ARABIC_TO_ROMAN_MAPPING = [
        1 => 'I',
        5 => 'V',
        10 => 'X',
        50 => 'L',
        100 => 'C',
        500 => 'D',
        1000 => 'M',
    ];

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

        if (array_key_exists($arabicNumber, self::ARABIC_TO_ROMAN_MAPPING)) {
            return self::ARABIC_TO_ROMAN_MAPPING[$arabicNumber];
        }

        return $this->recursiveConversion($arabicNumber);
    }

    private function recursiveConversion(int $arabicNumber): string
    {
        $baseArabicNumbers = array_keys(self::ARABIC_TO_ROMAN_MAPPING);
        rsort($baseArabicNumbers); // sort my array in reverse order: 1000, 500, 100, 50, 10, 5, 1

        $resultRoman = '';
        foreach ($baseArabicNumbers as $baseNumber) {
            if ($arabicNumber - $baseNumber >= 0) {
                $newNumberToCompare = $arabicNumber - $baseNumber;
                return self::ARABIC_TO_ROMAN_MAPPING[$baseNumber] . $this->recursiveConversion($newNumberToCompare);
            }
        }
        return $resultRoman;
    }
}
