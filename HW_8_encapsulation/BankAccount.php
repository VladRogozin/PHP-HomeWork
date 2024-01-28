<?php
declare(strict_types=1);
namespace HW_8;

class BankAccount {
    private string $accountNumber;
    private float $balance;
    private string $password;

    public function __construct(string $accountNumber, string $password, float $initialBalance = 0.0) {
        $this->accountNumber = $accountNumber;
        $this->balance = max(0.0, $initialBalance);
        $this->password = $password;
    }

    public function getAccountNumber(): string {
        return $this->accountNumber;
    }

    public function getBalance(): float {
        return $this->balance;
    }

    public function deposit(float $amount, string $enteredPassword): void {
        if ($this->checkPassword($enteredPassword)) {
            if ($amount > 0) {
                $this->balance += $amount;
                echo "Deposited $amount. New balance: {$this->balance}\n";
            } else {
                echo "Invalid deposit amount\n";
            }
        } else {
            echo "Invalid password\n";
        }
    }

    public function withdraw(float $amount, string $enteredPassword): void {
        if ($this->checkPassword($enteredPassword)) {
            if ($amount > 0) {
                if ($amount <= $this->balance) {
                    $this->balance -= $amount;
                    echo "Withdrawn $amount. New balance: {$this->balance}\n";
                } else {
                    echo "Insufficient funds\n";
                }
            } else {
                echo "Invalid withdrawal amount\n";
            }
        } else {
            echo "Invalid password\n";
        }
    }

    private function checkPassword(string $enteredPassword): bool {
        return $enteredPassword === $this->password;
    }
}