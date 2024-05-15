<?php

namespace example1;

include('BankAccountFactory.php');
include('AccountEnum.php');

class Branch
{
    public function openAccount(AccountEnum $type): AccountInterface
    {
        $bankAccount = (new BankAccountFactory())->createAccount($type->name);
        $bankAccount->validateUserIdentity();
        $bankAccount->calculateInterestRate();
        $bankAccount->registerAccount();
        return $bankAccount;
    }
}