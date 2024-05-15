<?php

use example1\AccountEnum;
use example1\Branch;

include('Branch.php');

$bankAccount = new Branch();
$a = $bankAccount->openAccount(AccountEnum::PersonalAccount);

echo "<pre>";
print_r($a);