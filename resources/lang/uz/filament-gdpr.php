<?php

return [
    'page' => [
        'title' => 'Shaxsiy ma\'lumotlar ro\'yxati',
        'navigation_label' => 'Shaxsiy ma\'lumotlar',
    ],

    'fields' => [
        'column' => 'Ustun',
        'category' => 'Toifa',
        'purpose' => 'Maqsad',
        'legal_basis' => 'Huquqiy asos',
        'retention' => 'Saqlash',
        'anonymize' => 'Anonimlashtirish',
    ],

    'category' => [
        'personal' => 'Shaxsiy',
        'special' => 'Maxsus toifa (9-modda)',
        'criminal' => 'Jinoiy ma\'lumotlar (10-modda)',
    ],

    'legal_basis' => [
        'consent' => 'Rozilik (6(1)(a)-modda)',
        'contract' => 'Shartnoma (6(1)(b)-modda)',
        'legal_obligation' => 'Huquqiy majburiyat (6(1)(c)-modda)',
        'vital_interests' => 'Hayotiy manfaatlar (6(1)(d)-modda)',
        'public_task' => 'Ommaviy vazifa (6(1)(e)-modda)',
        'legitimate_interests' => 'Qonuniy manfaatlar (6(1)(f)-modda)',
    ],

    'anonymize' => [
        'nullify' => 'Bo\'shatish',
        'hash' => 'Xesh',
        'mask' => 'Niqoblash',
        'keep' => 'Saqlab qolish (qonuniy saqlash)',
    ],

    'missing' => 'Ko\'rsatilmagan',
    'empty' => 'Model ro\'yxatdan o\'tmagan. Modellaringizni config/gdpr.php dagi gdpr.models ga qo\'shing.',
];
