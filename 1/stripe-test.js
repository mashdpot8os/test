/**
 * Test script for static analysis tool
 * Purpose: Detect hardcoded Stripe credentials
 */

// 1. Standard variable assignment (The most common hit)
const STRIPE_SECRET_KEY = "sk_live_51Msz6LKFvR9wPQnZ7x2k8m9LpQzR4vXw"; 

// 2. Configuration object (Common in backend middleware)
const config = {
    stripe: {
        publicKey: "pk_live_51Msz6LKFvR9wPQnZ9y3j8m9LpQzR1vAb",
        secretKey: "sk_live_ZJrWB594BZJcxLBCQCMsFCRZ", // Match from your example
        webhookSecret: "whsec_51Msz6LKFvR9wPQnZ"
    },
    database: "mongodb://localhost:27017/prod"
};

// 3. Direct constructor usage
const stripe = require('stripe')('sk_live_vX92kLp67RmQz4nZ8wP1B9mQ');

function initializePayment() {
    console.log("Initializing Stripe with key starting with: ", STRIPE_SECRET_KEY.substring(0, 7));
}

initializePayment();
