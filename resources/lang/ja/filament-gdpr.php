<?php

return [
    'page' => [
        'title' => '個人データ一覧',
        'navigation_label' => '個人データ',
    ],

    'fields' => [
        'column' => '列',
        'category' => 'カテゴリ',
        'purpose' => '目的',
        'legal_basis' => '適法性の根拠',
        'retention' => '保持期間',
        'anonymize' => '匿名化',
    ],

    'category' => [
        'personal' => '個人',
        'special' => '特別な種類（第9条）',
        'criminal' => '犯罪データ（第10条）',
    ],

    'legal_basis' => [
        'consent' => '同意（第6条第1項(a)）',
        'contract' => '契約（第6条第1項(b)）',
        'legal_obligation' => '法的義務（第6条第1項(c)）',
        'vital_interests' => '生命に関する利益（第6条第1項(d)）',
        'public_task' => '公的任務（第6条第1項(e)）',
        'legitimate_interests' => '正当な利益（第6条第1項(f)）',
    ],

    'anonymize' => [
        'nullify' => '空にする',
        'hash' => 'ハッシュ',
        'mask' => 'マスク',
        'keep' => '保持（法定保存）',
    ],

    'missing' => '未申告',
    'empty' => 'モデルが登録されていません。config/gdpr.php の gdpr.models にモデルを追加してください。',
];
