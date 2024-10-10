<?php

namespace App\Association\ZeroToMany;

class Customer {
    public $customerId;
    public $name;
    public $orders = []; // Relationship with Orders (0..*)

    public function __construct($customerId, $name) {
        $this->customerId = $customerId;
        $this->name = $name;
    }

    public function addOrder(Order $order) {
        $this->orders[] = $order; // Add order to the customer's orders
    }

    public function getCustomerInfo() {
        $orderCount = count($this->orders);
        return "{$this->name} has $orderCount order(s).";
    }
}