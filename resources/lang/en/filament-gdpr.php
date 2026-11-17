<?php

return [
    'page' => [
        'title' => 'Personal data inventory',
        'navigation_label' => 'Personal data',
    ],

    'fields' => [
        'column' => 'Column',
        'category' => 'Category',
        'purpose' => 'Purpose',
        'legal_basis' => 'Lawful basis',
        'retention' => 'Retention',
        'anonymize' => 'Anonymization',
    ],

    'category' => [
        'personal' => 'Personal',
        'special' => 'Special category (Art. 9)',
        'criminal' => 'Criminal data (Art. 10)',
    ],

    'legal_basis' => [
        'consent' => 'Consent (Art. 6(1)(a))',
        'contract' => 'Contract (Art. 6(1)(b))',
        'legal_obligation' => 'Legal obligation (Art. 6(1)(c))',
        'vital_interests' => 'Vital interests (Art. 6(1)(d))',
        'public_task' => 'Public task (Art. 6(1)(e))',
        'legitimate_interests' => 'Legitimate interests (Art. 6(1)(f))',
    ],

    'anonymize' => [
        'nullify' => 'Nullify',
        'hash' => 'Hash',
        'mask' => 'Mask',
        'keep' => 'Keep (legal retention)',
    ],

    'missing' => 'Not declared',
    'empty' => 'No models registered. Add your models to gdpr.models in config/gdpr.php.',
];
