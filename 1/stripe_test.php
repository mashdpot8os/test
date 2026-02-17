<?php
/**
 * Test script for static analysis tool
 * Purpose: Detect hardcoded PHP Stripe credentials
 */

// 1. Defining as a constant (Common in older architectures)
define('STRIPE_SECRET_KEY', 'sk_live_ZJrWB594BZJcxLBCQCMsFCRZ');

// 2. Class-based configuration (Modern OOP approach)
class PaymentConfig {
    public const PUBLIC_KEY = 'pk_live_2xYe5BnGDZJqQ39SHuMhsOqf';
    protected $secret = 'sk_live_51Msz6LKFvR9wPQnZ7x2k8m9LpQzR4vXw';

    public function getSecret() {
        return $this->secret;
    }
}

// 3. Mocking environment variables
putenv("STRIPE_API_KEY=sk_live_vX92kLp67RmQz4nZ8wP1B9mQ");

// 4. Direct SDK Initialization
// Often found in quick-and-dirty integrations
$stripe = new \Stripe\StripeClient([
  'api_key' => 'sk_live_ZJrWB594BZJcxLBCQCMsFCRZ',
]);

echo "Stripe initialized.";
