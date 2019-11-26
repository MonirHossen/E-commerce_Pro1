<?php

// SSLCommerz configuration

return [
    'projectPath' => env('PROJECT_PATH'),
    // For Sandbox, use
    // For Live, use "https://securepay.sslcommerz.com"
    'apiDomain' => env("API_DOMAIN_URL","https://sandbox.sslcommerz.com"),
    'apiCredentials' => [
        'store_id' => env("STORE_ID",'dream5dda5ed2ee70e'),
        'store_password' => env("STORE_PASSWORD",'dream5dda5ed2ee70e@ssl'),
    ],
    'apiUrl' => [
        'make_payment' => "/gwprocess/v4/api.php",
        'transaction_status' => "/validator/api/merchantTransIDvalidationAPI.php",
        'order_validate' => "/validator/api/validationserverAPI.php",
        'refund_payment' => "/validator/api/merchantTransIDvalidationAPI.php",
        'refund_status' => "/validator/api/merchantTransIDvalidationAPI.php",
    ],
    'connect_from_localhost' => env("IS_LOCALHOST", true), // For Sandbox, use "true", For Live, use "false"
    'success_url' => '/payment/success',
    'failed_url'  => '/payment/fail',
    'cancel_url'  => '/payment/cancel',
    'ipn_url'     => '/payment/ipn',
];
