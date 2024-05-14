<?php

interface AccountInterface
{
    public function validateUserIdentity();

    public function calculateInterestRate();

    public function registerAccount();
}