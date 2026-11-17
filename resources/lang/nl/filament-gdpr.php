<?php

return [
    'page' => [
        'title' => 'Overzicht persoonsgegevens',
        'navigation_label' => 'Persoonsgegevens',
    ],

    'fields' => [
        'column' => 'Kolom',
        'category' => 'Categorie',
        'purpose' => 'Doel',
        'legal_basis' => 'Rechtsgrond',
        'retention' => 'Bewaring',
        'anonymize' => 'Anonimisering',
    ],

    'category' => [
        'personal' => 'Persoonlijk',
        'special' => 'Bijzondere categorie (art. 9)',
        'criminal' => 'Strafrechtelijke gegevens (art. 10)',
    ],

    'legal_basis' => [
        'consent' => 'Toestemming (art. 6(1)(a))',
        'contract' => 'Overeenkomst (art. 6(1)(b))',
        'legal_obligation' => 'Wettelijke verplichting (art. 6(1)(c))',
        'vital_interests' => 'Vitale belangen (art. 6(1)(d))',
        'public_task' => 'Taak van algemeen belang (art. 6(1)(e))',
        'legitimate_interests' => 'Gerechtvaardigde belangen (art. 6(1)(f))',
    ],

    'anonymize' => [
        'nullify' => 'Leegmaken',
        'hash' => 'Hash',
        'mask' => 'Maskeren',
        'keep' => 'Behouden (wettelijke bewaring)',
    ],

    'missing' => 'Niet opgegeven',
    'empty' => 'Geen models geregistreerd. Voeg je models toe aan gdpr.models in config/gdpr.php.',
];
