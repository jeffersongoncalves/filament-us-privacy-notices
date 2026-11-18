<?php

return [
    'resource' => [
        'label' => 'Emal əməliyyatı',
        'plural_label' => 'Emal əməliyyatları',
    ],

    'fields' => [
        'name' => 'Ad',
        'purpose' => 'Məqsəd',
        'consumers' => 'İstehlakçılar',
        'data_categories' => 'Şəxsi məlumat kateqoriyaları',
        'models' => 'Modellər',
        'sources' => 'Mənbələr',
        'recipients' => 'Paylaşılır',
        'recipient_name' => 'Ad',
        'role' => 'Rol',
        'retention' => 'Saxlama müddəti və ya onu müəyyən etmək üçün meyarlar',
    ],

    'placeholders' => [
        'consumers' => 'müştərilər, sayt ziyarətçiləri...',
        'sources' => 'birbaşa sizdən, cihazlarınızdan, emal edənlərdən...',
    ],

    'help' => [
        'data_categories' => 'Məxfilik bildirişində adlandırıldığı kimi: əlaqə məlumatları, alış tarixçəsi...',
        'models' => 'Bu modellərdə #[PersonalData] ilə bəyan edilmiş şəxsi məlumatlar fəaliyyətə qoşulur.',
    ],

    'roles' => [
        'processor' => 'Emal edən',
        'third_party' => 'Üçüncü tərəf',
        'affiliate' => 'Əlaqəli şirkət',
    ],

    'actions' => [
        'export' => 'Bildiriş məlumatlarını ixrac etmək (JSON)',
    ],
];
