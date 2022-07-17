<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Language files for ticket_system in ticket_system package
    |--------------------------------------------------------------------------
    |
    | The following language lines are  for  ticket_system module in ticket_system package
    | and it is used by the template/view files in this module
    |
    */

    /**
     * Singlular and plural name of the module
     */
    'name'          => 'TicketSystem',
    'names'         => 'TicketSystems',
    
    /**
     * Singlular and plural name of the module
     */
    'title'         => [
        'main'  => 'TicketSystems',
        'sub'   => 'TicketSystems',
        'list'  => 'List of ticket_systems',
        'edit'  => 'Edit ticket_system',
        'create'    => 'Create new ticket_system'
    ],

    /**
     * Options for select/radio/check.
     */
    'options'       => [
            
    ],

    /**
     * Placeholder for inputs
     */
    'placeholder'   => [
        'bus_id'                     => 'bus name ',
        'journey_date'               => 'journey date',
        'ticket_seats'               => 'ticket seats',
        'user_id'                    => 'username',
        'user_type'                  => 'user type',
    ],

    /**
     * Labels for inputs.
     */
    'label'         => [
        'bus_id'                     => 'Bus Name',
        'journey_date'               => 'Journey Date',
        'ticket_seats'               => 'Ticket Seats',
        'user_id'                    => 'Username',
        'user_type'                  => 'User Type',
    ],

    /**
     * Columns array for show hide checkbox.
     */
    'cloumns'         => [
        'bus_id'                     => ['name' => 'Bus Name', 'data-column' => 1, 'checked'],
        'journey_date'               => ['name' => 'Journey Date', 'data-column' => 2, 'checked'],
        'ticket_seats'               => ['name' => 'Ticket Seats', 'data-column' => 3, 'checked'],
        'user_id'                    => ['name' => 'Username', 'data-column' => 4, 'checked'],
        'user_type'                  => ['name' => 'User Type', 'data-column' => 5, 'checked'],
    ],

    /**
     * Tab labels
     */
    'tab'           => [
        'name'  => 'TicketSystems',
    ],

    /**
     * Texts  for the module
     */
    'text'          => [
        'preview' => 'Click on the below list for preview',
    ],
];
