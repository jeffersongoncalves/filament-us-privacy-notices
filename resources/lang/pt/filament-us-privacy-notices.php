<?php

return [
    'resource' => [
        'label' => 'Atividade de tratamento',
        'plural_label' => 'Atividades de tratamento',
    ],

    'fields' => [
        'name' => 'Nome',
        'purpose' => 'Finalidade',
        'consumers' => 'Consumidores',
        'data_categories' => 'Categorias de dados pessoais',
        'models' => 'Modelos',
        'sources' => 'Origens',
        'recipients' => 'Partilhado com',
        'recipient_name' => 'Nome',
        'role' => 'Papel',
        'retention' => 'Período de conservação ou os critérios usados para o definir',
    ],

    'placeholders' => [
        'consumers' => 'clientes, visitantes do site...',
        'sources' => 'diretamente de si, dos seus dispositivos, de subcontratantes...',
    ],

    'help' => [
        'data_categories' => 'Como o aviso de privacidade as designa: dados de contacto, histórico de compras...',
        'models' => 'Os dados pessoais declarados nestes modelos com #[PersonalData] passam a integrar a atividade.',
    ],

    'roles' => [
        'processor' => 'Subcontratante',
        'third_party' => 'Terceiro',
        'affiliate' => 'Afiliada',
    ],

    'actions' => [
        'export' => 'Exportar dados dos avisos (JSON)',
    ],
];
