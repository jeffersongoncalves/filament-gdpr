<?php

return [
    'page' => [
        'title' => 'Şəxsi məlumatların inventarı',
        'navigation_label' => 'Şəxsi məlumatlar',
    ],

    'fields' => [
        'column' => 'Sütun',
        'category' => 'Kateqoriya',
        'purpose' => 'Məqsəd',
        'legal_basis' => 'Hüquqi əsas',
        'retention' => 'Saxlama',
        'anonymize' => 'Anonimləşdirmə',
    ],

    'category' => [
        'personal' => 'Şəxsi',
        'special' => 'Xüsusi kateqoriya (maddə 9)',
        'criminal' => 'Cinayət məlumatları (maddə 10)',
    ],

    'legal_basis' => [
        'consent' => 'Razılıq (maddə 6(1)(a))',
        'contract' => 'Müqavilə (maddə 6(1)(b))',
        'legal_obligation' => 'Hüquqi öhdəlik (maddə 6(1)(c))',
        'vital_interests' => 'Həyati maraqlar (maddə 6(1)(d))',
        'public_task' => 'İctimai vəzifə (maddə 6(1)(e))',
        'legitimate_interests' => 'Qanuni maraqlar (maddə 6(1)(f))',
    ],

    'anonymize' => [
        'nullify' => 'Boşalt',
        'hash' => 'Hash',
        'mask' => 'Maskala',
        'keep' => 'Saxla (hüquqi saxlama)',
    ],

    'missing' => 'Göstərilməyib',
    'empty' => 'Model qeydə alınmayıb. Modellərinizi config/gdpr.php faylında gdpr.models-ə əlavə edin.',
];
