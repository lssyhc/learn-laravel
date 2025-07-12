<?php

interface PaymentProcessor
{
    public function processPayment(float|int $amount): bool;
    public function refundPayment(float|int $amount): bool;
}

abstract class OnlinePaymentProcessor implements PaymentProcessor
{
    public function __construct(protected readonly string $apiKey)
    {
    }

    abstract protected function validateApiKey(): bool;
    abstract protected function executePayment(float|int $amount): bool;
    abstract protected function executeRefund(float|int $amount): bool;

    public function processPayment(float|int $amount): bool
    {
        if (!$this->validateApiKey()) {
            throw new Exception("Invalid API Key");
        }
        return $this->executePayment($amount);
    }

    public function refundPayment(float|int $amount): bool
    {
        if (!$this->validateApiKey()) {
            throw new Exception("Invalid API Key");
        }
        return $this->executePayment($amount);
    }
}

final class StripeProcessor extends OnlinePaymentProcessor
{
    protected function validateApiKey(): bool
    {
        return strpos($this->apiKey, 'sk_') === 0;
    }

    protected function executePayment(float|int $amount): bool
    {
        echo "Processing Stripe payment of $amount\n";
        return true;
    }

    protected function executeRefund(float|int $amount): bool
    {
        echo "Processing Stripe refund of $amount\n";
        return true;
    }
}
class PaypalProcessor extends OnlinePaymentProcessor
{
    protected function validateApiKey(): bool
    {
        return strlen($this->apiKey) === 32;
    }

    protected function executePayment(float|int $amount): bool
    {
        echo "Processing Paypal payment of $amount\n";
        return true;
    }

    protected function executeRefund(float|int $amount): bool
    {
        echo "Processing Paypal refund of $amount\n";
        return true;
    }
}

class CashProcessor implements PaymentProcessor
{
    public function processPayment(float|int $amount): bool
    {
        echo "Cash payment...\n";
        return true;
    }

    public function refundPayment(float|int $amount): bool
    {
        echo "Refund payment...\n";
        return true;
    }
}

class OrderProcessor
{
    public function __construct(private PaymentProcessor $paymentProcessor)
    {
    }

    public function processOrder(float|int $amount, string|array $items): void
    {
        if (is_array($items)) {
            $itemsList = implode(", ", $items);
        } else {
            $itemsList = $items;
        }

        echo "Processing order for items: $itemsList\n";

        if ($this->paymentProcessor->processPayment($amount)) {
            echo "Order processed successfully\n";
        } else {
            echo "Order processing failed\n";
        }
    }

    public function refundOrder(float|int $amount): void
    {
        if ($this->paymentProcessor->refundPayment($amount)) {
            echo "Order refunded successfully\n";
        } else {
            echo "Order refund failed\n";
        }
    }
}

$stripeProcessor = new StripeProcessor("sk_test_1234567890");
$paypalProcessor = new PaypalProcessor("valid_paypal_api_key_32charslong");
$cashProcessor = new CashProcessor();

$stripeOrder = new OrderProcessor($stripeProcessor);
$paypalOrder = new OrderProcessor($paypalProcessor);
$cashOrder = new OrderProcessor($cashProcessor);

$stripeOrder->processOrder(100.0, "Book");
$paypalOrder->processOrder(150.0, ["Book", "Movie"]);
$cashOrder->processOrder(50.0, ["Apple", "Orange"]);

$stripeOrder->refundOrder(25.0);
$paypalOrder->refundOrder(50.0);
$cashOrder->refundOrder(10.0);
