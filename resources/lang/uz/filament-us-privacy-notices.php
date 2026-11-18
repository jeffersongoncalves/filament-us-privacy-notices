<?php

return [
    'resource' => [
        'label' => 'Ishlov berish faoliyati',
        'plural_label' => 'Ishlov berish faoliyatlari',
    ],

    'fields' => [
        'name' => 'Nomi',
        'purpose' => 'Maqsad',
        'consumers' => 'Isteʼmolchilar',
        'data_categories' => 'Shaxsiy ma\'lumotlar toifalari',
        'models' => 'Modellar',
        'sources' => 'Manbalar',
        'recipients' => 'Ulashiladi',
        'recipient_name' => 'Nomi',
        'role' => 'Rol',
        'retention' => 'Saqlash muddati yoki uni belgilash mezonlari',
    ],

    'placeholders' => [
        'consumers' => 'mijozlar, sayt tashrifchilari...',
        'sources' => 'bevosita sizdan, qurilmalaringizdan, ishlovchilardan...',
    ],

    'help' => [
        'data_categories' => 'Maxfiylik bildirishnomasi nomlaganidek: aloqa ma\'lumotlari, xaridlar tarixi...',
        'models' => 'Ushbu modellarda #[PersonalData] bilan e\'lon qilingan shaxsiy ma\'lumotlar faoliyatga qo\'shiladi.',
    ],

    'roles' => [
        'processor' => 'Ishlovchi',
        'third_party' => 'Uchinchi tomon',
        'affiliate' => 'Bog\'liq kompaniya',
    ],

    'actions' => [
        'export' => 'Bildirishnoma maʼlumotlarini eksport qilish (JSON)',
    ],
];
