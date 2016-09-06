<?php
class Currency
{
    private $amount;
    private $currency;
    public function Currency()
    {
        $this->amount = 0;
        $this->currency = "";
    }
    public function getAmount()
    {
        return $this->amount;
    }
    
    public function getCurrency()
    {
        return $this->currency;
    }
    
}
?>
