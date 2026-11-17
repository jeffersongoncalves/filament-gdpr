<?php

return [
    'page' => [
        'title' => 'Реєстр персональних даних',
        'navigation_label' => 'Персональні дані',
    ],

    'fields' => [
        'column' => 'Стовпець',
        'category' => 'Категорія',
        'purpose' => 'Мета',
        'legal_basis' => 'Правова підстава',
        'retention' => 'Зберігання',
        'anonymize' => 'Анонімізація',
    ],

    'category' => [
        'personal' => 'Персональні',
        'special' => 'Особлива категорія (ст. 9)',
        'criminal' => 'Дані про судимість (ст. 10)',
    ],

    'legal_basis' => [
        'consent' => 'Згода (ст. 6(1)(a))',
        'contract' => 'Договір (ст. 6(1)(b))',
        'legal_obligation' => 'Юридичний обов\'язок (ст. 6(1)(c))',
        'vital_interests' => 'Життєво важливі інтереси (ст. 6(1)(d))',
        'public_task' => 'Публічне завдання (ст. 6(1)(e))',
        'legitimate_interests' => 'Законні інтереси (ст. 6(1)(f))',
    ],

    'anonymize' => [
        'nullify' => 'Очистити',
        'hash' => 'Хеш',
        'mask' => 'Маскувати',
        'keep' => 'Зберегти (обов\'язкове зберігання)',
    ],

    'missing' => 'Не вказано',
    'empty' => 'Моделі не зареєстровано. Додайте моделі до gdpr.models у config/gdpr.php.',
];
