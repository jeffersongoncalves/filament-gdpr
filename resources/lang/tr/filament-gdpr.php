<?php

return [
    'page' => [
        'title' => 'Kişisel veri envanteri',
        'navigation_label' => 'Kişisel veriler',
    ],

    'fields' => [
        'column' => 'Sütun',
        'category' => 'Kategori',
        'purpose' => 'Amaç',
        'legal_basis' => 'Hukuki dayanak',
        'retention' => 'Saklama',
        'anonymize' => 'Anonimleştirme',
    ],

    'category' => [
        'personal' => 'Kişisel',
        'special' => 'Özel nitelikli (md. 9)',
        'criminal' => 'Cezai veriler (md. 10)',
    ],

    'legal_basis' => [
        'consent' => 'Rıza (md. 6(1)(a))',
        'contract' => 'Sözleşme (md. 6(1)(b))',
        'legal_obligation' => 'Hukuki yükümlülük (md. 6(1)(c))',
        'vital_interests' => 'Hayati menfaatler (md. 6(1)(d))',
        'public_task' => 'Kamu görevi (md. 6(1)(e))',
        'legitimate_interests' => 'Meşru menfaatler (md. 6(1)(f))',
    ],

    'anonymize' => [
        'nullify' => 'Boşalt',
        'hash' => 'Hash',
        'mask' => 'Maskele',
        'keep' => 'Koru (yasal saklama)',
    ],

    'missing' => 'Belirtilmemiş',
    'empty' => 'Kayıtlı model yok. Modellerinizi config/gdpr.php içindeki gdpr.models\'e ekleyin.',
];
