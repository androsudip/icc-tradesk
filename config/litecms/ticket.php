<?php

return [

    /**
     * Provider.
     */
    'provider'  => 'litecms',

    /*
     * Package.
     */
    'package'   => 'ticket',

    /*
     * Modules.
     */
    'modules'   => ['ticket', 
'ticket_reply'],

    'ticket'       => [
        'model' => [
            'model'                 => \Litecms\Ticket\Models\Ticket::class,
            'table'                 => 'tickets',
            'presenter'             => \Litecms\Ticket\Repositories\Presenter\TicketPresenter::class,
            'hidden'                => [],
            'visible'               => [],
            'guarded'               => ['*'],
            'slugs'                 => ['slug' => 'name'],
            'dates'                 => ['deleted_at', 'createdat', 'updated_at'],
            'appends'               => [],
            'fillable'              => ['ticket_code',  'ticket_subject',  'ticket_body',  'ticket_status',  'ticket_user',  'ticket_priority',  'ticket_file'],
            'translatables'         => [],
            'upload_folder'         => 'ticket/ticket',
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
            'package'   => 'Ticket',
            'module'    => 'Ticket',
        ],

    ],

    'ticket_reply'       => [
        'model' => [
            'model'                 => \Litecms\Ticket\Models\TicketReply::class,
            'table'                 => 'ticket_replies',
            'presenter'             => \Litecms\Ticket\Repositories\Presenter\TicketReplyPresenter::class,
            'hidden'                => [],
            'visible'               => [],
            'guarded'               => ['*'],
            'slugs'                 => ['slug' => 'name'],
            'dates'                 => ['deleted_at', 'createdat', 'updated_at'],
            'appends'               => [],
            'fillable'              => ['ticket_id',  'body',  'replier_id',  'attachment'],
            'translatables'         => [],
            'upload_folder'         => 'ticket/ticket_reply',
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
            'package'   => 'Ticket',
            'module'    => 'TicketReply',
        ],

    ],
];
