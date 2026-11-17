<?php

return [
    'page' => [
        'title' => 'Inventaire des données personnelles',
        'navigation_label' => 'Données personnelles',
    ],

    'fields' => [
        'column' => 'Colonne',
        'category' => 'Catégorie',
        'purpose' => 'Finalité',
        'legal_basis' => 'Base juridique',
        'retention' => 'Conservation',
        'anonymize' => 'Anonymisation',
    ],

    'category' => [
        'personal' => 'Personnelle',
        'special' => 'Catégorie particulière (art. 9)',
        'criminal' => 'Données pénales (art. 10)',
    ],

    'legal_basis' => [
        'consent' => 'Consentement (art. 6(1)(a))',
        'contract' => 'Contrat (art. 6(1)(b))',
        'legal_obligation' => 'Obligation légale (art. 6(1)(c))',
        'vital_interests' => 'Intérêts vitaux (art. 6(1)(d))',
        'public_task' => 'Mission d\'intérêt public (art. 6(1)(e))',
        'legitimate_interests' => 'Intérêts légitimes (art. 6(1)(f))',
    ],

    'anonymize' => [
        'nullify' => 'Vider',
        'hash' => 'Hachage',
        'mask' => 'Masquer',
        'keep' => 'Conserver (obligation légale)',
    ],

    'missing' => 'Non déclarée',
    'empty' => 'Aucun modèle enregistré. Ajoutez vos modèles à gdpr.models dans config/gdpr.php.',
];
