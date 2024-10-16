<?php

namespace App\Realization\PaymentMethod;

class CreditCardPayment implements PaymentMethod {
    public function processPayment($amount) {
        return "Processing credit card payment of $" . number_format($amount, 2);
    }
}
