<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;

final class EnumTest extends TestCase
{
    public function testInvalidEnum()
    {
        $this->expectException(\RuntimeException::class);
        new MockEnumClass('test');
    }

    public function testValidEnum()
    {
        $mock = new MockEnumClass('TEST1');

        self::assertInstanceOf(MockEnumClass::class, new MockEnumClass('TEST1'));
        self::assertEquals('TEST1', $mock->getValue());
    }
}
