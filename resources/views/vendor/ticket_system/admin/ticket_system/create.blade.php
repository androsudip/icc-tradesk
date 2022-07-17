
    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">TicketSystem</a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-primary btn-sm" data-action='CREATE' data-form='#ticket_system-ticket_system-create'  data-load-to='#ticket_system-ticket_system-entry' data-datatable='#ticket_system-ticket_system-list'><i class="fa fa-floppy-o"></i> {{ trans('app.save') }}</button>
                <button type="button" class="btn btn-default btn-sm" data-action='CLOSE' data-load-to='#ticket_system-ticket_system-entry' data-href='{{guard_url('ticket_system/ticket_system/0')}}'><i class="fa fa-times-circle"></i> {{ trans('app.close') }}</button>
            </div>
        </ul>
        <div class="tab-content clearfix">
            {!!Form::vertical_open()
            ->id('ticket_system-ticket_system-create')
            ->method('POST')
            ->files('true')
            ->action(guard_url('ticket_system/ticket_system'))!!}
            <div class="tab-pane active" id="details">
                <div class="tab-pan-title">  {{ trans('app.new') }}  [{!! trans('ticket_system::ticket_system.name') !!}] </div>
                @include('ticket_system::admin.ticket_system.partial.entry', ['mode' => 'create'])
            </div>
            {!! Form::close() !!}
        </div>
    </div>