<?php

return [
    'page' => [
        'title' => 'व्यक्तिगत डेटा सूची',
        'navigation_label' => 'व्यक्तिगत डेटा',
    ],

    'fields' => [
        'column' => 'कॉलम',
        'category' => 'श्रेणी',
        'purpose' => 'उद्देश्य',
        'legal_basis' => 'विधिक आधार',
        'retention' => 'प्रतिधारण',
        'anonymize' => 'अनामीकरण',
    ],

    'category' => [
        'personal' => 'व्यक्तिगत',
        'special' => 'विशेष श्रेणी (अनुच्छेद 9)',
        'criminal' => 'आपराधिक डेटा (अनुच्छेद 10)',
    ],

    'legal_basis' => [
        'consent' => 'सहमति (अनुच्छेद 6(1)(a))',
        'contract' => 'अनुबंध (अनुच्छेद 6(1)(b))',
        'legal_obligation' => 'विधिक दायित्व (अनुच्छेद 6(1)(c))',
        'vital_interests' => 'महत्वपूर्ण हित (अनुच्छेद 6(1)(d))',
        'public_task' => 'सार्वजनिक कार्य (अनुच्छेद 6(1)(e))',
        'legitimate_interests' => 'वैध हित (अनुच्छेद 6(1)(f))',
    ],

    'anonymize' => [
        'nullify' => 'खाली करें',
        'hash' => 'हैश',
        'mask' => 'मास्क करें',
        'keep' => 'रखें (कानूनी प्रतिधारण)',
    ],

    'missing' => 'घोषित नहीं',
    'empty' => 'कोई मॉडल पंजीकृत नहीं है। अपने मॉडल config/gdpr.php में gdpr.models में जोड़ें।',
];
