<?php

return [
    'resource' => [
        'label' => 'Verarbeitungstätigkeit',
        'plural_label' => 'Verarbeitungstätigkeiten',
    ],

    'fields' => [
        'name' => 'Name',
        'purpose' => 'Zweck',
        'consumers' => 'Verbraucher',
        'data_categories' => 'Kategorien personenbezogener Daten',
        'models' => 'Modelle',
        'sources' => 'Quellen',
        'recipients' => 'Weitergegeben an',
        'recipient_name' => 'Name',
        'role' => 'Rolle',
        'retention' => 'Aufbewahrungsdauer oder die Kriterien für ihre Festlegung',
    ],

    'placeholders' => [
        'consumers' => 'Kunden, Website-Besucher...',
        'sources' => 'direkt von Ihnen, Ihren Geräten, Auftragsverarbeitern...',
    ],

    'help' => [
        'data_categories' => 'Wie der Datenschutzhinweis sie nennt: Kontaktdaten, Kaufhistorie...',
        'models' => 'Die auf diesen Models mit #[PersonalData] deklarierten personenbezogenen Daten gehören zur Tätigkeit.',
    ],

    'roles' => [
        'processor' => 'Auftragsverarbeiter',
        'third_party' => 'Dritter',
        'affiliate' => 'Verbundenes Unternehmen',
    ],

    'actions' => [
        'export' => 'Hinweisdaten exportieren (JSON)',
    ],
];
