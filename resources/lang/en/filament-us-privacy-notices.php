<?php

return [
    'resource' => [
        'label' => 'Processing activity',
        'plural_label' => 'Processing activities',
    ],

    'fields' => [
        'name' => 'Name',
        'purpose' => 'Purpose',
        'consumers' => 'Consumers',
        'data_categories' => 'Categories of personal data',
        'models' => 'Models',
        'sources' => 'Sources',
        'recipients' => 'Shared with',
        'recipient_name' => 'Name',
        'role' => 'Role',
        'retention' => 'Retention period, or the criteria used to set it',
    ],

    'placeholders' => [
        'consumers' => 'customers, website visitors...',
        'sources' => 'directly from you, your devices, processors...',
    ],

    'help' => [
        'data_categories' => 'As the privacy notice names them: contact data, purchase history...',
        'models' => 'The personal data declared on these models with #[PersonalData] joins the activity.',
    ],

    'roles' => [
        'processor' => 'Processor',
        'third_party' => 'Third party',
        'affiliate' => 'Affiliate',
    ],

    'actions' => [
        'export' => 'Export notice data (JSON)',
    ],
];
