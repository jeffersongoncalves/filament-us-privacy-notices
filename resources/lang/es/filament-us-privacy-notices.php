<?php

return [
    'resource' => [
        'label' => 'Actividad de tratamiento',
        'plural_label' => 'Actividades de tratamiento',
    ],

    'fields' => [
        'name' => 'Nombre',
        'purpose' => 'Finalidad',
        'consumers' => 'Consumidores',
        'data_categories' => 'Categorías de datos personales',
        'models' => 'Modelos',
        'sources' => 'Fuentes',
        'recipients' => 'Compartido con',
        'recipient_name' => 'Nombre',
        'role' => 'Rol',
        'retention' => 'Plazo de conservación o los criterios para fijarlo',
    ],

    'placeholders' => [
        'consumers' => 'clientes, visitantes del sitio...',
        'sources' => 'directamente de usted, sus dispositivos, encargados...',
    ],

    'help' => [
        'data_categories' => 'Como las nombra el aviso de privacidad: datos de contacto, historial de compras...',
        'models' => 'Los datos personales declarados en estos modelos con #[PersonalData] se suman a la actividad.',
    ],

    'roles' => [
        'processor' => 'Encargado del tratamiento',
        'third_party' => 'Tercero',
        'affiliate' => 'Afiliada',
    ],

    'actions' => [
        'export' => 'Exportar datos de los avisos (JSON)',
    ],
];
