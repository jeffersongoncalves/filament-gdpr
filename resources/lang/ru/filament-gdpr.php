<?php

return [
    'page' => [
        'title' => 'Реестр персональных данных',
        'navigation_label' => 'Персональные данные',
    ],

    'fields' => [
        'column' => 'Столбец',
        'category' => 'Категория',
        'purpose' => 'Цель',
        'legal_basis' => 'Правовое основание',
        'retention' => 'Хранение',
        'anonymize' => 'Анонимизация',
    ],

    'category' => [
        'personal' => 'Персональные',
        'special' => 'Особая категория (ст. 9)',
        'criminal' => 'Данные о судимостях (ст. 10)',
    ],

    'legal_basis' => [
        'consent' => 'Согласие (ст. 6(1)(a))',
        'contract' => 'Договор (ст. 6(1)(b))',
        'legal_obligation' => 'Юридическая обязанность (ст. 6(1)(c))',
        'vital_interests' => 'Жизненно важные интересы (ст. 6(1)(d))',
        'public_task' => 'Публичная задача (ст. 6(1)(e))',
        'legitimate_interests' => 'Законные интересы (ст. 6(1)(f))',
    ],

    'anonymize' => [
        'nullify' => 'Очистить',
        'hash' => 'Хеш',
        'mask' => 'Маскировать',
        'keep' => 'Сохранить (обязательное хранение)',
    ],

    'missing' => 'Не указано',
    'empty' => 'Модели не зарегистрированы. Добавьте модели в gdpr.models в config/gdpr.php.',
];
