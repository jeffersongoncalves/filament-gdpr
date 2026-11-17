<?php

return [
    'page' => [
        'title' => 'Inventario dei dati personali',
        'navigation_label' => 'Dati personali',
    ],

    'fields' => [
        'column' => 'Colonna',
        'category' => 'Categoria',
        'purpose' => 'Finalità',
        'legal_basis' => 'Base giuridica',
        'retention' => 'Conservazione',
        'anonymize' => 'Anonimizzazione',
    ],

    'category' => [
        'personal' => 'Personale',
        'special' => 'Categoria particolare (art. 9)',
        'criminal' => 'Dati giudiziari (art. 10)',
    ],

    'legal_basis' => [
        'consent' => 'Consenso (art. 6(1)(a))',
        'contract' => 'Contratto (art. 6(1)(b))',
        'legal_obligation' => 'Obbligo legale (art. 6(1)(c))',
        'vital_interests' => 'Interessi vitali (art. 6(1)(d))',
        'public_task' => 'Compito di interesse pubblico (art. 6(1)(e))',
        'legitimate_interests' => 'Interessi legittimi (art. 6(1)(f))',
    ],

    'anonymize' => [
        'nullify' => 'Svuota',
        'hash' => 'Hash',
        'mask' => 'Maschera',
        'keep' => 'Conserva (obbligo legale)',
    ],

    'missing' => 'Non dichiarata',
    'empty' => 'Nessun modello registrato. Aggiungi i tuoi modelli a gdpr.models in config/gdpr.php.',
];
