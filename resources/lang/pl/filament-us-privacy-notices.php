<?php

return [
    'resource' => [
        'label' => 'Czynność przetwarzania',
        'plural_label' => 'Czynności przetwarzania',
    ],

    'fields' => [
        'name' => 'Nazwa',
        'purpose' => 'Cel',
        'consumers' => 'Konsumenci',
        'data_categories' => 'Kategorie danych osobowych',
        'models' => 'Modele',
        'sources' => 'Źródła',
        'recipients' => 'Udostępniane',
        'recipient_name' => 'Nazwa',
        'role' => 'Rola',
        'retention' => 'Okres przechowywania lub kryteria jego ustalania',
    ],

    'placeholders' => [
        'consumers' => 'klienci, odwiedzający stronę...',
        'sources' => 'bezpośrednio od Ciebie, z Twoich urządzeń, od podmiotów przetwarzających...',
    ],

    'help' => [
        'data_categories' => 'Tak jak nazywa je informacja o prywatności: dane kontaktowe, historia zakupów...',
        'models' => 'Dane osobowe zadeklarowane w tych modelach przez #[PersonalData] dołączają do czynności.',
    ],

    'roles' => [
        'processor' => 'Podmiot przetwarzający',
        'third_party' => 'Strona trzecia',
        'affiliate' => 'Podmiot powiązany',
    ],

    'actions' => [
        'export' => 'Eksportuj dane informacji (JSON)',
    ],
];
