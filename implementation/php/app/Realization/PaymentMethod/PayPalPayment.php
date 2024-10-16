<?php

namespace App\Realization\PaymentMethod;

class PayPalPayment implements PaymentMethod {
    public function processPayment($amount) {
        return "Processing PayPal payment of $" . number_format($amount, 2);
    }
}
