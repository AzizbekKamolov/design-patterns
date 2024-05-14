<?php
include('AccountInterface.php');
class PersonalAccount implements AccountInterface
{
    public function validateUserIdentity()
    {
        echo "validate User for personal account<br>";
    }

    public function calculateInterestRate()
    {
        
    }

    public function registerAccount()
    {
        
    }
}