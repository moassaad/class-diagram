<?php

namespace App\Association\ZeroToOne;

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