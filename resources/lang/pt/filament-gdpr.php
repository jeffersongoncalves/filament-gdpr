<?php

return [
    'page' => [
        'title' => 'Inventário de dados pessoais',
        'navigation_label' => 'Dados pessoais',
    ],

    'fields' => [
        'column' => 'Coluna',
        'category' => 'Categoria',
        'purpose' => 'Finalidade',
        'legal_basis' => 'Fundamento jurídico',
        'retention' => 'Retenção',
        'anonymize' => 'Anonimização',
    ],

    'category' => [
        'personal' => 'Pessoal',
        'special' => 'Categoria especial (art. 9.º)',
        'criminal' => 'Dados penais (art. 10.º)',
    ],

    'legal_basis' => [
        'consent' => 'Consentimento (art. 6.º, n.º 1, al. a))',
        'contract' => 'Contrato (art. 6.º, n.º 1, al. b))',
        'legal_obligation' => 'Obrigação jurídica (art. 6.º, n.º 1, al. c))',
        'vital_interests' => 'Interesses vitais (art. 6.º, n.º 1, al. d))',
        'public_task' => 'Interesse público (art. 6.º, n.º 1, al. e))',
        'legitimate_interests' => 'Interesses legítimos (art. 6.º, n.º 1, al. f))',
    ],

    'anonymize' => [
        'nullify' => 'Anular',
        'hash' => 'Hash',
        'mask' => 'Mascarar',
        'keep' => 'Manter (conservação legal)',
    ],

    'missing' => 'Não declarado',
    'empty' => 'Nenhum modelo registado. Adicione os seus modelos a gdpr.models em config/gdpr.php.',
];
