<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use function Converters\everaldoReisConverter;

final class NameizeTest extends TestCase
{
    /**
     * @dataProvider inputsProvider
     */
    public function testShouldConverNameWithNameize($name, $expected)
    {
        $this->assertEquals(
            $expected,
            \enricodias\Nameize::create()->name($name)
        );
    }

    /**
     * @dataProvider inputsProvider
     */
    public function testShouldConverNameWithEveraldoReisImplementation($name, $expected)
    {
        $this->assertEquals(
            $expected,
            everaldoReisConverter($name)
        );
    }

    public function inputsProvider()
    {
        return [
            ['john doe', 'John Doe'],
            ['MARY DOE', 'Mary Doe'],
            ['ann ake', 'Ann Ake'], // https://www.familyeducation.com/baby-names/browse-origin/surname/english
            ['joão ninguém', 'João Ninguém'],
            ['luciano dos santos', 'Luciano dos Santos'],
            ['MARIA JOSÉ DOS SANTOS E SILVA', 'Maria José dos Santos e Silva'],
            ['óscar énio', 'Óscar Énio'],
            ['jackson o\'brien', 'Jackson O\'Brien'],
            ['óscar énio', 'Óscar Énio'],
            ['ludwig von mises', 'Ludwig von Mises'],
            ['ludwig van beethoven', 'Ludwig van Beethoven'],
        ];
    }
}
