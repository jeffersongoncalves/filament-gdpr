<?php

return [
    'page' => [
        'title' => 'جرد البيانات الشخصية',
        'navigation_label' => 'البيانات الشخصية',
    ],

    'fields' => [
        'column' => 'العمود',
        'category' => 'الفئة',
        'purpose' => 'الغرض',
        'legal_basis' => 'الأساس القانوني',
        'retention' => 'الاحتفاظ',
        'anonymize' => 'التجهيل',
    ],

    'category' => [
        'personal' => 'شخصية',
        'special' => 'فئة خاصة (المادة 9)',
        'criminal' => 'بيانات جنائية (المادة 10)',
    ],

    'legal_basis' => [
        'consent' => 'الموافقة (المادة 6(1)(أ))',
        'contract' => 'العقد (المادة 6(1)(ب))',
        'legal_obligation' => 'الالتزام القانوني (المادة 6(1)(ج))',
        'vital_interests' => 'المصالح الحيوية (المادة 6(1)(د))',
        'public_task' => 'المهمة العامة (المادة 6(1)(هـ))',
        'legitimate_interests' => 'المصالح المشروعة (المادة 6(1)(و))',
    ],

    'anonymize' => [
        'nullify' => 'إفراغ',
        'hash' => 'تجزئة',
        'mask' => 'إخفاء',
        'keep' => 'الإبقاء (احتفاظ قانوني)',
    ],

    'missing' => 'غير محدد',
    'empty' => 'لا توجد نماذج مسجلة. أضف نماذجك إلى gdpr.models في config/gdpr.php.',
];
