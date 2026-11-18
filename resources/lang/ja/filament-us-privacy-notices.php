<?php

return [
    'resource' => [
        'label' => '処理活動',
        'plural_label' => '処理活動',
    ],

    'fields' => [
        'name' => '名称',
        'purpose' => '目的',
        'consumers' => '消費者',
        'data_categories' => '個人データの区分',
        'models' => 'モデル',
        'sources' => '取得元',
        'recipients' => '共有先',
        'recipient_name' => '名称',
        'role' => '役割',
        'retention' => '保存期間、またはその決定基準',
    ],

    'placeholders' => [
        'consumers' => '顧客、ウェブサイトの訪問者...',
        'sources' => 'ご本人から直接、お使いの端末から、処理者から...',
    ],

    'help' => [
        'data_categories' => 'プライバシー通知での呼び方で：連絡先データ、購入履歴...',
        'models' => 'これらのモデルで #[PersonalData] により宣言された個人データがこの処理活動に含まれます。',
    ],

    'roles' => [
        'processor' => '処理者',
        'third_party' => '第三者',
        'affiliate' => '関連会社',
    ],

    'actions' => [
        'export' => '通知データをエクスポート（JSON）',
    ],
];
