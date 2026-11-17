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
        'legal_basis' => 'Base legal',
        'retention' => 'Retenção',
        'anonymize' => 'Anonimização',
    ],

    'category' => [
        'personal' => 'Pessoal',
        'special' => 'Categoria especial (art. 9)',
        'criminal' => 'Dados criminais (art. 10)',
    ],

    'legal_basis' => [
        'consent' => 'Consentimento (art. 6(1)(a))',
        'contract' => 'Contrato (art. 6(1)(b))',
        'legal_obligation' => 'Obrigação legal (art. 6(1)(c))',
        'vital_interests' => 'Interesses vitais (art. 6(1)(d))',
        'public_task' => 'Interesse público (art. 6(1)(e))',
        'legitimate_interests' => 'Interesses legítimos (art. 6(1)(f))',
    ],

    'anonymize' => [
        'nullify' => 'Anular',
        'hash' => 'Hash',
        'mask' => 'Mascarar',
        'keep' => 'Manter (guarda legal)',
    ],

    'missing' => 'Não declarada',
    'empty' => 'Nenhum model registrado. Adicione seus models em gdpr.models no config/gdpr.php.',
];
