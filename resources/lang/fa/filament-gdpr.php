<?php

return [
    'page' => [
        'title' => 'فهرست داده‌های شخصی',
        'navigation_label' => 'داده‌های شخصی',
    ],

    'fields' => [
        'column' => 'ستون',
        'category' => 'دسته',
        'purpose' => 'هدف',
        'legal_basis' => 'مبنای قانونی',
        'retention' => 'نگهداری',
        'anonymize' => 'ناشناس‌سازی',
    ],

    'category' => [
        'personal' => 'شخصی',
        'special' => 'دسته ویژه (ماده 9)',
        'criminal' => 'داده‌های کیفری (ماده 10)',
    ],

    'legal_basis' => [
        'consent' => 'رضایت (ماده 6(1)(الف))',
        'contract' => 'قرارداد (ماده 6(1)(ب))',
        'legal_obligation' => 'تعهد قانونی (ماده 6(1)(ج))',
        'vital_interests' => 'منافع حیاتی (ماده 6(1)(د))',
        'public_task' => 'وظیفه عمومی (ماده 6(1)(ه))',
        'legitimate_interests' => 'منافع مشروع (ماده 6(1)(و))',
    ],

    'anonymize' => [
        'nullify' => 'خالی کردن',
        'hash' => 'هش',
        'mask' => 'پوشاندن',
        'keep' => 'نگه‌داشتن (نگهداری قانونی)',
    ],

    'missing' => 'اعلام نشده',
    'empty' => 'هیچ مدلی ثبت نشده است. مدل‌های خود را در gdpr.models در config/gdpr.php اضافه کنید.',
];
