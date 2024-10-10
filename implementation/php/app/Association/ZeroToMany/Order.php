<?php

namespace App\Association\ZeroToMany;

class Order {
    public $orderId;
    public $orderDate;

    public function __construct($orderId, $orderDate) {
        $this->orderId = $orderId;
        $this->orderDate = $orderDate;
    }
}