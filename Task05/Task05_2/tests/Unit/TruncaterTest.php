<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Truncater;

class TruncaterTest extends TestCase
{
    public function testTruncate(): void
    {
        $title = 'Слушкин Данила Васильевич';

        $truncater1 = new Truncater();

        $this->assertSame($title, $truncater1->truncate($title));

        $expected = "Слушкин Данила...";
        $this->assertSame($expected, $truncater1->truncate($title, ['length' => 14]));

        $this->assertSame($title, $truncater1->truncate($title));

        $expected = "Слушкин Данила***";
        $this->assertSame($expected, $truncater1->truncate($title, ['length' => 14, 'separator' => '***']));

        $expected = "Слушкин Данила...";
        $this->assertSame($expected, $truncater1->truncate($title, ['length' => -11]));

        $truncater2 = new Truncater(['length' => 14, 'separator' => '!!!']);

        $expected = "Слушкин Данила!!!";
        $this->assertSame($expected, $truncater2->truncate($title));
    }
}
