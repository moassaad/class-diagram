<?php
namespace App\Association\Run;

class LoyaltyCard {
    private $cardNumber;

    public function __construct($cardNumber) {
        $this->cardNumber = $cardNumber;
    }

    public function getCardNumber() {
        return $this->cardNumber;
    }
}

class Customer {
    private $name;
    private $loyaltyCard = null;

    public function __construct($name) {
        $this->name = $name;
    }

    public function setLoyaltyCard(LoyaltyCard $card) {
        $this->loyaltyCard = $card;
    }

    public function getLoyaltyCard() {
        return $this->loyaltyCard;
    }

    public function getName() {
        return $this->name;
    }
}

$customer1 = new Customer("Mohammad");
$customer2 = new Customer("Ali");

$card = new LoyaltyCard("CARD12345");
$customer1->setLoyaltyCard($card);

# customer1 have LoyaltyCard
if ($customer1->getLoyaltyCard() !== null) {
    echo $customer1->getName() . "Have Loyalty Card No. " . $customer1->getLoyaltyCard()->getCardNumber() . "\n";
} else {
    echo $customer1->getName() . "Don't have Loyalty Card.\n";
}

# customer2 don't have LoyaltyCard
if ($customer2->getLoyaltyCard() !== null) {
    echo $customer2->getName() . "Have Loyalty Card No. " . $customer2->getLoyaltyCard()->getCardNumber() . "\n";
} else {
    echo $customer2->getName() . "Don't have Loyalty Card.\n";
}
?>