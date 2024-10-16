<?php

namespace App\Realization\PaymentMethod;

interface PaymentMethod {
    public function processPayment($amount);
}
