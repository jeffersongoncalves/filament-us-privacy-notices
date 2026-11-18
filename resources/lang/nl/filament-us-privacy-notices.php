<?php

return [
    'resource' => [
        'label' => 'Verwerkingsactiviteit',
        'plural_label' => 'Verwerkingsactiviteiten',
    ],

    'fields' => [
        'name' => 'Naam',
        'purpose' => 'Doel',
        'consumers' => 'Consumenten',
        'data_categories' => 'Categorieën persoonsgegevens',
        'models' => 'Modellen',
        'sources' => 'Bronnen',
        'recipients' => 'Gedeeld met',
        'recipient_name' => 'Naam',
        'role' => 'Rol',
        'retention' => 'Bewaartermijn of de criteria om die te bepalen',
    ],

    'placeholders' => [
        'consumers' => 'klanten, websitebezoekers...',
        'sources' => 'rechtstreeks van u, uw apparaten, verwerkers...',
    ],

    'help' => [
        'data_categories' => 'Zoals de privacyverklaring ze noemt: contactgegevens, aankoopgeschiedenis...',
        'models' => 'De persoonsgegevens die op deze modellen met #[PersonalData] zijn opgegeven, horen bij de activiteit.',
    ],

    'roles' => [
        'processor' => 'Verwerker',
        'third_party' => 'Derde',
        'affiliate' => 'Gelieerde onderneming',
    ],

    'actions' => [
        'export' => 'Kennisgevingsgegevens exporteren (JSON)',
    ],
];
