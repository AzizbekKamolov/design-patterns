<?php
include('PersonalAccount.php');
include('BusinessAccount.php');
include('CheckingAccount.php');
class BankAccountFactory
{
    public  AccountInterface $bankAccount;
    public function createAccount(string $type):AccountInterface
    {
        $this->bankAccount = new $type();
        return $this->bankAccount;
    }
}