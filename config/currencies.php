<?php

return [
    'currencies' => [
        'USD' => [
            'name' => 'US Dollar',
            'symbol' => '$',
            'rate' => 1.00,
        ],
        'GBP' => [
            'name' => 'British Pound',
            'symbol' => '£',
            'rate' => 0.78,
        ],
        'EUR' => [
            'name' => 'Euro',
            'symbol' => '€',
            'rate' => 0.92,
        ],
        'NGN' => [
            'name' => 'Nigerian Naira',
            'symbol' => '₦',
            'rate' => 1500.00,
        ],
        'USDC' => [
            'name' => 'USD Coin (BEP-20)',
            'symbol' => 'USDC',
            'rate' => 1.00,
            'network' => 'BEP-20',
            'wallet_address' => env('USDC_WALLET_ADDRESS'),
        ],
    ],
];