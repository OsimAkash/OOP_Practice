<?php

class  Discount {
    private string $type;

    private float $amount;

    public function __construct(string $type , float $amount)
    {
        $this->type;
        $this->amount;
    }

    public function getDiscountAmount($price): float 
    {
        if($this->type == 'percent') {
            return ($price * $this->amount) / 100.0;
        }
        return $this->amount;
    }
}

class Bill {
    private float $blance;

    private float $taxPercentage = 5.0;
    private Discount $discount;

    public function __construct(float $balance, Discount $discount) 
    {
        $this->balance   = $balance;
        $this->discount  = $discount;
    }

    private function addVAT() 
    {
        $this->balance -= $this->discount->getDiscountAmount($this->blance); 
    }
}