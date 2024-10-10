<?php
namespace App\Association\Run;

// Class representing a Customer
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

// Class representing an Order
class Order {
    public $orderId;
    public $orderDate;

    public function __construct($orderId, $orderDate) {
        $this->orderId = $orderId;
        $this->orderDate = $orderDate;
    }
}

// Example usage
$customer1 = new Customer(1, "Mohammad Asaad");
$customer2 = new Customer(2, "Sara Ahmed");

$order1 = new Order(101, "2024-09-15");
$order2 = new Order(102, "2024-09-20");

// Adding orders to customers
$customer1->addOrder($order1);
$customer1->addOrder($order2);

echo $customer1->getCustomerInfo() . "\n"; // Customer with orders
echo $customer2->getCustomerInfo() . "\n"; // Customer without orders

?>