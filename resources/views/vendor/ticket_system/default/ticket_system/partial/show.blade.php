            <div class="content">
                <div class="row">
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="bus_id">
                    {!! trans('ticket_system::ticket_system.label.bus_id') !!}
                </label><br />
                    {!! $ticket_system['bus_id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="journey_date">
                    {!! trans('ticket_system::ticket_system.label.journey_date') !!}
                </label><br />
                    {!! $ticket_system['journey_date'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="ticket_seats">
                    {!! trans('ticket_system::ticket_system.label.ticket_seats') !!}
                </label><br />
                    {!! $ticket_system['ticket_seats'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="user_id">
                    {!! trans('ticket_system::ticket_system.label.user_id') !!}
                </label><br />
                    {!! $ticket_system['user_id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="user_type">
                    {!! trans('ticket_system::ticket_system.label.user_type') !!}
                </label><br />
                    {!! $ticket_system['user_type'] !!}
            </div>
        </div>
    </div>

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