            <div class='row'>
                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('bus_id')
                       -> label(trans('ticket_system::ticket_system.label.bus_id'))
                       -> required()
                       -> placeholder(trans('ticket_system::ticket_system.placeholder.bus_id'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('journey_date')
                       -> label(trans('ticket_system::ticket_system.label.journey_date'))
                       -> required()
                       -> placeholder(trans('ticket_system::ticket_system.placeholder.journey_date'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('ticket_seats')
                       -> label(trans('ticket_system::ticket_system.label.ticket_seats'))
                       -> required()
                       -> placeholder(trans('ticket_system::ticket_system.placeholder.ticket_seats'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('user_id')
                       -> label(trans('ticket_system::ticket_system.label.user_id'))
                       -> required()
                       -> placeholder(trans('ticket_system::ticket_system.placeholder.user_id'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('user_type')
                       -> label(trans('ticket_system::ticket_system.label.user_type'))
                       -> required()
                       -> placeholder(trans('ticket_system::ticket_system.placeholder.user_type'))!!}
                </div>
            </div>