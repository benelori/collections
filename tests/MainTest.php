<?php

namespace App\Tests;

use App\Main;
use PHPUnit\Framework\TestCase;

class MainTest extends TestCase
{
    public function testCollections()
    {
        $main = new Main();

        $expected = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H'];

        $actual = $main->getCollection();

        self::assertEquals($expected, $actual->normalize()->all());
    }
}
