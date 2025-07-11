<?php

class BankAccount
{
    private float $balance = 0;

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function deposit(float $amount): void
    {
        if ($amount > 0) {
            $this->balance += $amount;

        }
    }

    public function withdraw(float $amount): bool
    {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
            return true;
        }

        return false;
    }
}

$account = new BankAccount;
$account->deposit(1000);
var_dump(
    $account->withdraw(500),
    $account->getBalance()
);
