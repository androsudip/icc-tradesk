            @include('ticket::public.ticket.partial.header')

            <section class="single">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            @include('ticket::public.ticket.partial.aside')
                        </div>
                        <div class="col-md-9 ">
                            <div class="area">
                                <div class="item">
                                    <div class="feature">
                                        <img class="img-responsive center-block" src="{!!url($ticket->defaultImage('images' , 'xl'))!!}" alt="{{$ticket->title}}">
                                    </div>
                                    <div class="content">
                                        <div class="row">
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="ticket_code">
                    {!! trans('ticket::ticket.label.ticket_code') !!}
                </label><br />
                    {!! $ticket['ticket_code'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="ticket_subject">
                    {!! trans('ticket::ticket.label.ticket_subject') !!}
                </label><br />
                    {!! $ticket['ticket_subject'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="ticket_body">
                    {!! trans('ticket::ticket.label.ticket_body') !!}
                </label><br />
                    {!! $ticket['ticket_body'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="ticket_status">
                    {!! trans('ticket::ticket.label.ticket_status') !!}
                </label><br />
                    {!! $ticket['ticket_status'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="ticket_user">
                    {!! trans('ticket::ticket.label.ticket_user') !!}
                </label><br />
                    {!! $ticket['ticket_user'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="ticket_priority">
                    {!! trans('ticket::ticket.label.ticket_priority') !!}
                </label><br />
                    {!! $ticket['ticket_priority'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="ticket_file">
                    {!! trans('ticket::ticket.label.ticket_file') !!}
                </label><br />
                    {!! $ticket['ticket_file'] !!}
            </div>
        </div>
    </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('ticket_code')
                       -> label(trans('ticket::ticket.label.ticket_code'))
                       -> required()
                       -> placeholder(trans('ticket::ticket.placeholder.ticket_code'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('ticket_subject')
                       -> label(trans('ticket::ticket.label.ticket_subject'))
                       -> required()
                       -> placeholder(trans('ticket::ticket.placeholder.ticket_subject'))!!}
                </div>

                <div class='col-md-12'>
                    {!! Form::textarea('ticket_body')
                    -> label(trans('ticket::ticket.label.ticket_body'))
                    -> dataUpload(trans_url($ticket->getUploadURL('ticket_body')))
                    -> addClass('html-editor')
                    -> placeholder(trans('ticket::ticket.placeholder.ticket_body'))!!}
                </div>
                <div class='col-md-4 col-sm-6'>
                    {!! Form::select('ticket_status')
                    -> options(trans('ticket::ticket.options.ticket_status'))
                    -> label(trans('ticket::ticket.label.ticket_status'))
                    -> required()
                    -> placeholder(trans('ticket::ticket.placeholder.ticket_status'))!!}
               </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('ticket_user')
                       -> label(trans('ticket::ticket.label.ticket_user'))
                       -> required()
                       -> placeholder(trans('ticket::ticket.placeholder.ticket_user'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                    {!! Form::select('ticket_priority')
                    -> options(trans('ticket::ticket.options.ticket_priority'))
                    -> label(trans('ticket::ticket.label.ticket_priority'))
                    -> required()
                    -> placeholder(trans('ticket::ticket.placeholder.ticket_priority'))!!}
               </div>

                <div class='col-md-12 col-sm-12'>
                    <div class="form-group">
                        <label for="files" class="control-label col-lg-12 col-sm-12 text-left"> {{trans('ticket::ticket.label.ticket_file') }}
                        </label>
                        <div class='col-lg-3 col-sm-12'>
                            {!! $ticket->files('files')
                            ->url($ticket->getUploadUrl('files'))
                            ->mime(config('filer.allowed_extensions'))
                            ->files()!!}
                        </div>
                        <div class='col-lg-7 col-sm-12'>
                            {!! $ticket->files('files')
                            ->editor()!!}
                        </div>
                    </div>
                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



