<?php

interface PaymentProcessor
{
    public function processPayment(float $amount): bool;
    public function refundPayment(float $amount): bool;
}

abstract class OnlinePaymentProcessor implements PaymentProcessor
{
    public function __construct(protected string $apiKey)
    {
    }

    abstract protected function validateApiKey(): bool;
    // abstract protected function executePayment(): bool;
    // abstract protected function executeRefund(): bool;

    public function processPayment(float $amount): bool
    {
        if (!$this->validateApiKey()) {
            throw new Exception("Invalid API Key");
        }
        // return $this->executePayment($amount);
        return true;
    }

    public function refundPayment(float $amount): bool
    {
        if (!$this->validateApiKey()) {
            throw new Exception("Invalid API Key");
        }
        // return $this->executePayment($amount);
        return true;
    }
}

class StripeProcessor extends OnlinePaymentProcessor
{
    protected function validateApiKey(): bool
    {
        return strpos($this->apiKey, 'sk_') === 0;
    }
}
class PaypalProcessor extends OnlinePaymentProcessor
{
    protected function validateApiKey(): bool
    {
        return strlen($this->apiKey) === 32;
    }
}

class CashProcessor implements PaymentProcessor
{
    public function processPayment(float $amount): bool
    {
        echo "Cash payment...";
        return true;
    }

    public function refundPayment(float $amount): bool
    {
        echo "Refund payment...";
        return true;
    }
}

$processor = new StripeProcessor("sk_test_1234567890");
$processor->processPayment(500);
