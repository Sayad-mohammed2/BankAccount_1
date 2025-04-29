<?php
require_once 'Account.php';
// require_once 'savingAcc.php';

class PayingAcc extends Account
{
	
	protected function taxes()
	{
		return $this->balance -= 5;
	}
	//
    public function deposit($amount)
    {   
        // Check if the amount is valid (greater than 0)
        if ($amount > 0) {
            $this->balance += $amount;
            return $this->taxes();
            
        }
        return throw new Exception("Invalid amount.");

    }
    public function withdraw($amount)
    {
        if ($amount > 0 && $this->balance >= $amount) {
            $this->balance -= $amount ;
            return $this->taxes();
        } 
        return throw new Exception("Insufficient funds or invalid amount.");
        
    }
}