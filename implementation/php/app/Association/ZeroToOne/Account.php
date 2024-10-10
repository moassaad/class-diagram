<?php

namespace App\Association\ZeroToOne;

class Account {
    public $accountId;
    public $accountType;

    public function __construct($accountId, $accountType) {
        $this->accountId = $accountId;
        $this->accountType = $accountType;
    }
}