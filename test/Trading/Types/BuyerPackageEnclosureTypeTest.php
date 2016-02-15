<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Test\Trading\Types;

use DTS\eBaySDK\Trading\Types\BuyerPackageEnclosureType;

class BuyerPackageEnclosureTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new BuyerPackageEnclosureType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\BuyerPackageEnclosureType', $this->obj);
    }

    public function testExtendsStringType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\StringType', $this->obj);
    }
}