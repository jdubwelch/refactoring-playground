<?php

namespace App\RefactorBigMethod;

class BetterDesign
{
    private $accountID;

    public function __construct($accountID)
    {
        $this->accountID = $accountID;
    }

    public function someReallyLongMethod($param1, $param2, $param3 = true)
    {
        return "do it param2 way with BetterDesign for Account {$this->accountID} with {$param1} and {$param2}";
    }
}
