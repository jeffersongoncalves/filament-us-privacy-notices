<?php

return [
    'resource' => [
        'label' => 'Activité de traitement',
        'plural_label' => 'Activités de traitement',
    ],

    'fields' => [
        'name' => 'Nom',
        'purpose' => 'Finalité',
        'consumers' => 'Consommateurs',
        'data_categories' => 'Catégories de données personnelles',
        'models' => 'Modèles',
        'sources' => 'Sources',
        'recipients' => 'Partagé avec',
        'recipient_name' => 'Nom',
        'role' => 'Rôle',
        'retention' => 'Durée de conservation ou critères utilisés pour la fixer',
    ],

    'placeholders' => [
        'consumers' => 'clients, visiteurs du site...',
        'sources' => 'directement de vous, de vos appareils, des sous-traitants...',
    ],

    'help' => [
        'data_categories' => 'Comme la notice de confidentialité les nomme : coordonnées, historique d\'achats...',
        'models' => 'Les données personnelles déclarées sur ces modèles avec #[PersonalData] rejoignent l\'activité.',
    ],

    'roles' => [
        'processor' => 'Sous-traitant',
        'third_party' => 'Tiers',
        'affiliate' => 'Société affiliée',
    ],

    'actions' => [
        'export' => 'Exporter les données des avis (JSON)',
    ],
];
