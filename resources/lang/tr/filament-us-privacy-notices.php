<?php

return [
    'resource' => [
        'label' => 'İşleme faaliyeti',
        'plural_label' => 'İşleme faaliyetleri',
    ],

    'fields' => [
        'name' => 'Ad',
        'purpose' => 'Amaç',
        'consumers' => 'Tüketiciler',
        'data_categories' => 'Kişisel veri kategorileri',
        'models' => 'Modeller',
        'sources' => 'Kaynaklar',
        'recipients' => 'Paylaşılan',
        'recipient_name' => 'Ad',
        'role' => 'Rol',
        'retention' => 'Saklama süresi veya bunu belirlemek için kullanılan ölçütler',
    ],

    'placeholders' => [
        'consumers' => 'müşteriler, web sitesi ziyaretçileri...',
        'sources' => 'doğrudan sizden, cihazlarınızdan, işleyenlerden...',
    ],

    'help' => [
        'data_categories' => 'Gizlilik bildiriminin adlandırdığı şekilde: iletişim verileri, satın alma geçmişi...',
        'models' => 'Bu modellerde #[PersonalData] ile beyan edilen kişisel veriler faaliyete dahil olur.',
    ],

    'roles' => [
        'processor' => 'Veri işleyen',
        'third_party' => 'Üçüncü taraf',
        'affiliate' => 'Bağlı kuruluş',
    ],

    'actions' => [
        'export' => 'Bildirim verilerini dışa aktar (JSON)',
    ],
];
