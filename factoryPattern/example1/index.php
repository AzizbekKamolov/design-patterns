<?php
include('Branch.php');

$bankAccount = new Branch();
$a = $bankAccount->openAccount(AccountEnum::PersonalAccount);

echo "<pre>";
print_r($a);