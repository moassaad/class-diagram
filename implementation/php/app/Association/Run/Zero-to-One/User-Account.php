<?php
namespace App\Association\Run;

// Class representing a User
class User {
    public $userId;
    public $name;
    public $account; // Relationship with Account

    public function __construct($userId, $name, $account = null) {
        $this->userId = $userId;
        $this->name = $name;
        $this->account = $account; // Account can be null
    }

    public function getUserInfo() {
        if ($this->account) {
            return "{$this->name} has an account with Account ID: {$this->account->accountId}.";
        } else {
            return "{$this->name} does not have an account.";
        }
    }
}

// Class representing an Account
class Account {
    public $accountId;
    public $accountType;

    public function __construct($accountId, $accountType) {
        $this->accountId = $accountId;
        $this->accountType = $accountType;
    }
}

// Example usage
$user1 = new User(1, "Mohammad Asaad", new Account(1001, "Premium"));
$user2 = new User(2, "Sara Ahmed"); // No account for this user

echo $user1->getUserInfo() . "\n"; // User with an account
echo $user2->getUserInfo() . "\n"; // User without an account

?>