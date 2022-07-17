    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">  {!! trans('ticket_system::ticket_system.name') !!}</a></li>
            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-success btn-sm" data-action='NEW' data-load-to='#ticket_system-ticket_system-entry' data-href='{{guard_url('ticket_system/ticket_system/create')}}'><i class="fa fa-plus-circle"></i> {{ trans('app.new') }}</button>
                @if($ticket_system->id )
                <button type="button" class="btn btn-primary btn-sm" data-action="EDIT" data-load-to='#ticket_system-ticket_system-entry' data-href='{{ guard_url('ticket_system/ticket_system') }}/{{$ticket_system->getRouteKey()}}/edit'><i class="fa fa-pencil-square"></i> {{ trans('app.edit') }}</button>
                <button type="button" class="btn btn-danger btn-sm" data-action="DELETE" data-load-to='#ticket_system-ticket_system-entry' data-datatable='#ticket_system-ticket_system-list' data-href='{{ guard_url('ticket_system/ticket_system') }}/{{$ticket_system->getRouteKey()}}' >
                <i class="fa fa-times-circle"></i> {{ trans('app.delete') }}
                </button>
                @endif
            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('ticket_system-ticket_system-show')
        ->method('POST')
        ->files('true')
        ->action(guard_url('ticket_system/ticket_system'))!!}
            <div class="tab-content clearfix disabled">
                <div class="tab-pan-title"> {{ trans('app.view') }}   {!! trans('ticket_system::ticket_system.name') !!}  [{!! $ticket_system->name !!}] </div>
                <div class="tab-pane active" id="details">
                    @include('ticket_system::admin.ticket_system.partial.entry', ['mode' => 'show'])
                </div>
            </div>
        {!! Form::close() !!}
    </div>