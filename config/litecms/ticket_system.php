<?php

return [

    /**
     * Provider.
     */
    'provider'  => 'litecms',

    /*
     * Package.
     */
    'package'   => 'ticket_system',

    /*
     * Modules.
     */
    'modules'   => ['ticket_system'],

    
    'ticket_system'       => [
        'model' => [
            'model'                 => \Litecms\TicketSystem\Models\TicketSystem::class,
            'table'                 => 'ticket_systems',
            'presenter'             => \Litecms\TicketSystem\Repositories\Presenter\TicketSystemPresenter::class,
            'hidden'                => [],
            'visible'               => [],
            'guarded'               => ['*'],
            'slugs'                 => ['slug' => 'name'],
            'dates'                 => ['deleted_at', 'createdat', 'updated_at'],
            'appends'               => [],
            'fillable'              => ['bus_id',  'journey_date',  'ticket_seats',  'user_id',  'user_type'],
            'translatables'         => [],
            'upload_folder'         => 'ticket_system/ticket_system',
            'uploads'               => [
            /*
                    'images' => [
                        'count' => 10,
                        'type'  => 'image',
                    ],
                    'file' => [
                        'count' => 1,
                        'type'  => 'file',
                    ],
            */
            ],

            'casts'                 => [
            /*
                'images'    => 'array',
                'file'      => 'array',
            */
            ],

            'revision'              => [],
            'perPage'               => '20',
            'search'        => [
                'name'  => 'like',
                'status',
            ]
        ],

        'controller' => [
            'provider'  => 'Litecms',
            'package'   => 'TicketSystem',
            'module'    => 'TicketSystem',
        ],

    ],
];
