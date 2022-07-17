    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#ticket_system" data-toggle="tab">{!! trans('ticket_system::ticket_system.tab.name') !!}</a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-primary btn-sm" data-action='UPDATE' data-form='#ticket_system-ticket_system-edit'  data-load-to='#ticket_system-ticket_system-entry' data-datatable='#ticket_system-ticket_system-list'><i class="fa fa-floppy-o"></i> {{ trans('app.save') }}</button>
                <button type="button" class="btn btn-default btn-sm" data-action='CANCEL' data-load-to='#ticket_system-ticket_system-entry' data-href='{{guard_url('ticket_system/ticket_system')}}/{{$ticket_system->getRouteKey()}}'><i class="fa fa-times-circle"></i> {{ trans('app.cancel') }}</button>

            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('ticket_system-ticket_system-edit')
        ->method('PUT')
        ->enctype('multipart/form-data')
        ->action(guard_url('ticket_system/ticket_system/'. $ticket_system->getRouteKey()))!!}
        <div class="tab-content clearfix">
            <div class="tab-pane active" id="ticket_system">
                <div class="tab-pan-title">  {{ trans('app.edit') }}  {!! trans('ticket_system::ticket_system.name') !!} [{!!$ticket_system->name!!}] </div>
                @include('ticket_system::admin.ticket_system.partial.entry', ['mode' => 'edit'])
            </div>
        </div>
        {!!Form::close()!!}
    </div>