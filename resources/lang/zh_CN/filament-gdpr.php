<?php

return [
    'page' => [
        'title' => '个人数据清单',
        'navigation_label' => '个人数据',
    ],

    'fields' => [
        'column' => '列',
        'category' => '类别',
        'purpose' => '目的',
        'legal_basis' => '合法性基础',
        'retention' => '保留期限',
        'anonymize' => '匿名化',
    ],

    'category' => [
        'personal' => '个人',
        'special' => '特殊类别（第9条）',
        'criminal' => '刑事数据（第10条）',
    ],

    'legal_basis' => [
        'consent' => '同意（第6(1)(a)条）',
        'contract' => '合同（第6(1)(b)条）',
        'legal_obligation' => '法定义务（第6(1)(c)条）',
        'vital_interests' => '重大利益（第6(1)(d)条）',
        'public_task' => '公共任务（第6(1)(e)条）',
        'legitimate_interests' => '正当利益（第6(1)(f)条）',
    ],

    'anonymize' => [
        'nullify' => '置空',
        'hash' => '哈希',
        'mask' => '掩码',
        'keep' => '保留（法定留存）',
    ],

    'missing' => '未声明',
    'empty' => '尚未注册模型。请将模型添加到 config/gdpr.php 的 gdpr.models 中。',
];
