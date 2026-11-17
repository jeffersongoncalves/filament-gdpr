<?php

return [
    'page' => [
        'title' => 'Inventario de datos personales',
        'navigation_label' => 'Datos personales',
    ],

    'fields' => [
        'column' => 'Columna',
        'category' => 'Categoría',
        'purpose' => 'Finalidad',
        'legal_basis' => 'Base jurídica',
        'retention' => 'Retención',
        'anonymize' => 'Anonimización',
    ],

    'category' => [
        'personal' => 'Personal',
        'special' => 'Categoría especial (art. 9)',
        'criminal' => 'Datos penales (art. 10)',
    ],

    'legal_basis' => [
        'consent' => 'Consentimiento (art. 6(1)(a))',
        'contract' => 'Contrato (art. 6(1)(b))',
        'legal_obligation' => 'Obligación legal (art. 6(1)(c))',
        'vital_interests' => 'Intereses vitales (art. 6(1)(d))',
        'public_task' => 'Misión de interés público (art. 6(1)(e))',
        'legitimate_interests' => 'Intereses legítimos (art. 6(1)(f))',
    ],

    'anonymize' => [
        'nullify' => 'Anular',
        'hash' => 'Hash',
        'mask' => 'Enmascarar',
        'keep' => 'Conservar (guarda legal)',
    ],

    'missing' => 'No declarada',
    'empty' => 'No hay modelos registrados. Añada sus modelos a gdpr.models en config/gdpr.php.',
];
