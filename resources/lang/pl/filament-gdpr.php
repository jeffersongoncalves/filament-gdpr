<?php

return [
    'page' => [
        'title' => 'Inwentarz danych osobowych',
        'navigation_label' => 'Dane osobowe',
    ],

    'fields' => [
        'column' => 'Kolumna',
        'category' => 'Kategoria',
        'purpose' => 'Cel',
        'legal_basis' => 'Podstawa prawna',
        'retention' => 'Retencja',
        'anonymize' => 'Anonimizacja',
    ],

    'category' => [
        'personal' => 'Osobowe',
        'special' => 'Szczególna kategoria (art. 9)',
        'criminal' => 'Dane o wyrokach skazujących (art. 10)',
    ],

    'legal_basis' => [
        'consent' => 'Zgoda (art. 6 ust. 1 lit. a)',
        'contract' => 'Umowa (art. 6 ust. 1 lit. b)',
        'legal_obligation' => 'Obowiązek prawny (art. 6 ust. 1 lit. c)',
        'vital_interests' => 'Żywotne interesy (art. 6 ust. 1 lit. d)',
        'public_task' => 'Zadanie publiczne (art. 6 ust. 1 lit. e)',
        'legitimate_interests' => 'Prawnie uzasadnione interesy (art. 6 ust. 1 lit. f)',
    ],

    'anonymize' => [
        'nullify' => 'Wyczyść',
        'hash' => 'Hash',
        'mask' => 'Maskuj',
        'keep' => 'Zachowaj (obowiązek prawny)',
    ],

    'missing' => 'Nie zadeklarowano',
    'empty' => 'Brak zarejestrowanych modeli. Dodaj modele do gdpr.models w config/gdpr.php.',
];
