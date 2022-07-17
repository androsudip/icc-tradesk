    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">  {!! trans('ticket::ticket_reply.name') !!}</a></li>
            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-success btn-sm" data-action='NEW' data-load-to='#ticket-ticket_reply-entry' data-href='{{guard_url('ticket/ticket_reply/create')}}'><i class="fa fa-plus-circle"></i> {{ trans('app.new') }}</button>
                @if($ticket_reply->id )
                <button type="button" class="btn btn-primary btn-sm" data-action="EDIT" data-load-to='#ticket-ticket_reply-entry' data-href='{{ guard_url('ticket/ticket_reply') }}/{{$ticket_reply->getRouteKey()}}/edit'><i class="fa fa-pencil-square"></i> {{ trans('app.edit') }}</button>
                <button type="button" class="btn btn-danger btn-sm" data-action="DELETE" data-load-to='#ticket-ticket_reply-entry' data-datatable='#ticket-ticket_reply-list' data-href='{{ guard_url('ticket/ticket_reply') }}/{{$ticket_reply->getRouteKey()}}' >
                <i class="fa fa-times-circle"></i> {{ trans('app.delete') }}
                </button>
                @endif
            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('ticket-ticket_reply-show')
        ->method('POST')
        ->files('true')
        ->action(guard_url('ticket/ticket_reply'))!!}
            <div class="tab-content clearfix disabled">
                <div class="tab-pan-title"> {{ trans('app.view') }}   {!! trans('ticket::ticket_reply.name') !!}  [{!! $ticket_reply->name !!}] </div>
                <div class="tab-pane active" id="details">
                    @include('ticket::admin.ticket_reply.partial.entry', ['mode' => 'show'])
                </div>
            </div>
        {!! Form::close() !!}
    </div>