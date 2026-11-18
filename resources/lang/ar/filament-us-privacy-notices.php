<?php

return [
    'resource' => [
        'label' => 'عملية معالجة',
        'plural_label' => 'عمليات المعالجة',
    ],

    'fields' => [
        'name' => 'الاسم',
        'purpose' => 'الغرض',
        'consumers' => 'المستهلكون',
        'data_categories' => 'فئات البيانات الشخصية',
        'models' => 'النماذج',
        'sources' => 'المصادر',
        'recipients' => 'تتم المشاركة مع',
        'recipient_name' => 'الاسم',
        'role' => 'الدور',
        'retention' => 'مدة الاحتفاظ أو المعايير المستخدمة لتحديدها',
    ],

    'placeholders' => [
        'consumers' => 'العملاء، زوار الموقع...',
        'sources' => 'منك مباشرةً، من أجهزتك، من المعالجين...',
    ],

    'help' => [
        'data_categories' => 'كما يسميها إشعار الخصوصية: بيانات الاتصال، سجل المشتريات...',
        'models' => 'تنضم البيانات الشخصية المعلنة في هذه النماذج باستخدام #[PersonalData] إلى النشاط.',
    ],

    'roles' => [
        'processor' => 'المعالج',
        'third_party' => 'طرف ثالث',
        'affiliate' => 'شركة تابعة',
    ],

    'actions' => [
        'export' => 'تصدير بيانات الإشعارات (JSON)',
    ],
];
