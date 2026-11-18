<?php

return [
    'resource' => [
        'label' => '处理活动',
        'plural_label' => '处理活动',
    ],

    'fields' => [
        'name' => '名称',
        'purpose' => '目的',
        'consumers' => '消费者',
        'data_categories' => '个人数据类别',
        'models' => '模型',
        'sources' => '来源',
        'recipients' => '共享对象',
        'recipient_name' => '名称',
        'role' => '角色',
        'retention' => '保留期限或确定期限的标准',
    ],

    'placeholders' => [
        'consumers' => '客户、网站访客...',
        'sources' => '直接来自您、您的设备、处理者...',
    ],

    'help' => [
        'data_categories' => '按隐私声明中的名称：联系数据、购买记录...',
        'models' => '这些模型中通过 #[PersonalData] 声明的个人数据会并入该处理活动。',
    ],

    'roles' => [
        'processor' => '处理者',
        'third_party' => '第三方',
        'affiliate' => '关联方',
    ],

    'actions' => [
        'export' => '导出声明数据（JSON）',
    ],
];
