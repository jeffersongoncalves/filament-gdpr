<?php

return [
    'page' => [
        'title' => 'Verzeichnis personenbezogener Daten',
        'navigation_label' => 'Personenbezogene Daten',
    ],

    'fields' => [
        'column' => 'Spalte',
        'category' => 'Kategorie',
        'purpose' => 'Zweck',
        'legal_basis' => 'Rechtsgrundlage',
        'retention' => 'Aufbewahrung',
        'anonymize' => 'Anonymisierung',
    ],

    'category' => [
        'personal' => 'Personenbezogen',
        'special' => 'Besondere Kategorie (Art. 9)',
        'criminal' => 'Strafrechtliche Daten (Art. 10)',
    ],

    'legal_basis' => [
        'consent' => 'Einwilligung (Art. 6 Abs. 1 lit. a)',
        'contract' => 'Vertrag (Art. 6 Abs. 1 lit. b)',
        'legal_obligation' => 'Rechtliche Verpflichtung (Art. 6 Abs. 1 lit. c)',
        'vital_interests' => 'Lebenswichtige Interessen (Art. 6 Abs. 1 lit. d)',
        'public_task' => 'Öffentliche Aufgabe (Art. 6 Abs. 1 lit. e)',
        'legitimate_interests' => 'Berechtigte Interessen (Art. 6 Abs. 1 lit. f)',
    ],

    'anonymize' => [
        'nullify' => 'Leeren',
        'hash' => 'Hash',
        'mask' => 'Maskieren',
        'keep' => 'Behalten (gesetzliche Aufbewahrung)',
    ],

    'missing' => 'Nicht angegeben',
    'empty' => 'Keine Models registriert. Tragen Sie Ihre Models in gdpr.models in config/gdpr.php ein.',
];
