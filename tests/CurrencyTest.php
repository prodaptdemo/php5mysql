<?php
class CurrencyTest extends PHPUnit_Framework_TestCase
{
    protected $currency;
    
    public function setUp()
    {
        $this->currency = new Currency();
    }
    public function testInitialValues()
    {
        $this->assertEquals($this->currency->getAmount(), 0);
        $this->assertEquals($this->currency->getCurrency(), "");
    }
}
?>
