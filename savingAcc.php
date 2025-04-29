<?php

require_once 'Account.php';

class SavingAcc extends Account
{

    private static $interestRate = 5;

    public function __construct($balance = null)
    {
        parent::__construct($balance);
    }
    public function addInterest()
    {
        $interest = ($this->balance * static::$interestRate) / 100;
        $this->balance += $interest;
        return $this->balance;
    }

}