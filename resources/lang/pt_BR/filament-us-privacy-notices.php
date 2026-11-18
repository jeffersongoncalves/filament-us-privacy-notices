<?php

return [
    'resource' => [
        'label' => 'Operação de tratamento',
        'plural_label' => 'Operações de tratamento',
    ],

    'fields' => [
        'name' => 'Nome',
        'purpose' => 'Finalidade',
        'consumers' => 'Consumidores',
        'data_categories' => 'Categorias de dados pessoais',
        'models' => 'Modelos',
        'sources' => 'Origens',
        'recipients' => 'Compartilhado com',
        'recipient_name' => 'Nome',
        'role' => 'Papel',
        'retention' => 'Período de retenção ou os critérios usados para defini-lo',
    ],

    'placeholders' => [
        'consumers' => 'clientes, visitantes do site...',
        'sources' => 'diretamente de você, dos seus dispositivos, de processadores...',
    ],

    'help' => [
        'data_categories' => 'Como o aviso de privacidade as nomeia: dados de contato, histórico de compras...',
        'models' => 'Os dados pessoais declarados nesses models com #[PersonalData] entram na atividade.',
    ],

    'roles' => [
        'processor' => 'Processador',
        'third_party' => 'Terceiro',
        'affiliate' => 'Afiliada',
    ],

    'actions' => [
        'export' => 'Exportar dados dos avisos (JSON)',
    ],
];
