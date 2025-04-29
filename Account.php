<?php 
    //officiale account
    class Account {
        protected $balance ;
        protected int $code ; 

        private static $increamentCode = 1;

        function __construct($balance = null)
        {
            $this->balance =  $balance;
            $this->code = static::$increamentCode++;

        }

        public function getBalance()
        {
            return $this->balance;

        }
        public function getCode()
        {
          return $this->code;
        }

        public function __toString() : string
        {
        //    echo "Code : " . $this->code . PHP_EOL;
            $balance = $this->balance ?? 0;
            echo "Code : " . $this->code . PHP_EOL;
            echo "Balance : " . $balance . " MAD" .PHP_EOL;
            return $balance;
        }

        public  function deposit($amount)
        {   
            // Check if the amount is valid (greater than 0)
            if ($amount > 0) {
                $this->balance += $amount;
                return $this->balance;
                
            }
            return throw new Exception("Invalid amount.");
        }
        public function withdraw($amount)
        {
            if ($amount > 0 && $this->balance >= $amount) {
                $this->balance -= $amount ;
                return $this->balance;
            } 
            return throw new Exception("Insufficient funds or invalid amount.");
            
        }


    }