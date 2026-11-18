<?php

return [
    'resource' => [
        'label' => 'Attività di trattamento',
        'plural_label' => 'Attività di trattamento',
    ],

    'fields' => [
        'name' => 'Nome',
        'purpose' => 'Finalità',
        'consumers' => 'Consumatori',
        'data_categories' => 'Categorie di dati personali',
        'models' => 'Modelli',
        'sources' => 'Fonti',
        'recipients' => 'Condiviso con',
        'recipient_name' => 'Nome',
        'role' => 'Ruolo',
        'retention' => 'Periodo di conservazione o criteri per stabilirlo',
    ],

    'placeholders' => [
        'consumers' => 'clienti, visitatori del sito...',
        'sources' => 'direttamente da te, dai tuoi dispositivi, dai responsabili...',
    ],

    'help' => [
        'data_categories' => 'Come le chiama l\'informativa: dati di contatto, storico acquisti...',
        'models' => 'I dati personali dichiarati su questi model con #[PersonalData] entrano nell\'attività.',
    ],

    'roles' => [
        'processor' => 'Responsabile del trattamento',
        'third_party' => 'Terza parte',
        'affiliate' => 'Società affiliata',
    ],

    'actions' => [
        'export' => 'Esporta i dati delle informative (JSON)',
    ],
];
