<?php
declare(strict_types=1);
namespace HW_8;

class BankAccount {
    private string $accountNumber;
    private float $balance;
    private string $password;

    public function __construct(string $accountNumber, string $password, float $initialBalance = 0.0) {
        $this->accountNumber = $accountNumber;
        $this->setBalance($initialBalance);
        $this->password = $password;
    }

    public function getAccountNumber(): string {
        return $this->accountNumber;
    }

    public function getBalance(): float {
        return $this->balance;
    }

    public function deposit(float $amount, string $enteredPassword): void {
        $this->validatePassword($enteredPassword);

        $this->validateAmount($amount);

        $this->balance += $amount;
    }

    public function withdraw(float $amount, string $enteredPassword): void {
        $this->validatePassword($enteredPassword);

        $this->validateAmount($amount);

        if ($amount > $this->balance) {
            throw new \InvalidArgumentException("Insufficient funds");
        }

        $this->balance -= $amount;
    }

    private function validatePassword(string $enteredPassword): void {
        if ($enteredPassword !== $this->password) {
            throw new \InvalidArgumentException("Invalid password");
        }
    }

    private function validateAmount(float $amount): void {
        if ($amount <= 0) {
            throw new \InvalidArgumentException("Invalid amount");
        }
    }

    private function setBalance(float $balance): void {
        if ($balance < 0) {
            throw new \InvalidArgumentException("Invalid initial balance");
        }

        $this->balance = $balance;
    }
}