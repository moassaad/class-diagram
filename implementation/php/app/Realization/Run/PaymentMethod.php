<?php
namespace App\Realization\Run;
// Interface representing a payment method
interface PaymentMethod {
    public function processPayment($amount);
}

// Class representing CreditCardPayment, implementing the PaymentMethod interface
class CreditCardPayment implements PaymentMethod {
    public function processPayment($amount) {
        return "Processing credit card payment of $" . number_format($amount, 2);
    }
}

// Class representing PayPalPayment, implementing the PaymentMethod interface
class PayPalPayment implements PaymentMethod {
    public function processPayment($amount) {
        return "Processing PayPal payment of $" . number_format($amount, 2);
    }
}

// Example usage
$creditCardPayment = new CreditCardPayment();
$payPalPayment = new PayPalPayment();

echo $creditCardPayment->processPayment(100.50) . "\n"; // Credit card payment
echo $payPalPayment->processPayment(75.25) . "\n"; // PayPal payment

?>
