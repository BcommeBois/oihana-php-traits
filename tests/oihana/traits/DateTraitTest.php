<?php

namespace tests\oihana\traits ;

use oihana\traits\DateTrait;
use PHPUnit\Framework\TestCase;

class MockDate
{
    use DateTrait;
}

class DateTraitTest extends TestCase
{
    private function createTraitInstance() : MockDate
    {
        return new MockDate() ;
    }

    public function testConstantValues()
    {
        $this->assertSame('Y-m-d\TH:i:s', MockDate::DEFAULT_DATE_FORMAT, 'DEFAULT_DATE_FORMAT should be ISO-8601 without offset');
        $this->assertSame('Europe/Paris', MockDate::DEFAULT_TIMEZONE, 'DEFAULT_TIMEZONE should be Europe/Paris');
        $this->assertSame('now', MockDate::NOW, 'NOW should be the "now" sentinel');
    }

    public function testDefaultPropertyValues()
    {
        $obj = $this->createTraitInstance();
        $this->assertSame(MockDate::DEFAULT_DATE_FORMAT, $obj->dateFormat, 'dateFormat should default to DEFAULT_DATE_FORMAT');
        $this->assertSame(MockDate::DEFAULT_TIMEZONE, $obj->timezone, 'timezone should default to DEFAULT_TIMEZONE');
    }

    public function testPropertiesAreMutable()
    {
        $obj = $this->createTraitInstance();

        $obj->dateFormat = 'd/m/Y';
        $obj->timezone   = 'UTC';

        $this->assertSame('d/m/Y', $obj->dateFormat, 'dateFormat should be writable');
        $this->assertSame('UTC', $obj->timezone, 'timezone should be writable');
    }

    public function testTimezoneCanBeNull()
    {
        $obj = $this->createTraitInstance();
        $obj->timezone = null;
        $this->assertNull($obj->timezone, 'timezone should accept null to fall back to PHP default');
    }
}
