            @include('ticket::public.ticket_reply.partial.header')

            <section class="grid">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            @include('ticket::public.ticket_reply.partial.aside')
                        </div>
                        <div class="col-md-9 ">
                            <div class="main-area parent-border list-item">
                                @foreach($ticket_replies as $ticket_reply)
                                <div class="item border">
                                    <div class="feature">
                                        <a href="{{trans_url('ticket_replies')}}/{{@$ticket_reply['slug']}}">
                                            <img src="{{url($ticket_reply->defaultImage('images'))}}" class="img-responsive center-block" alt="">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4><a href="{{trans_url('ticket_reply')}}/{{$ticket_reply['slug']}}">{{str_limit($ticket_reply['title'], 300)}}</a> 
                                        </h4>
                                        <div class="metas mt20">
                                            <div class="tag pull-left">
                                                <a href="#" class="">Seo Tips</a>
                                            </div>
                                            <div class="date-time pull-right">
                                                <span><i class="fa fa-comments"></i>{{@$ticket_reply->viewcount}}</span>
                                                <span><i class="fa fa-calendar"></i>{{format_date($ticket_reply['posted_on'])}}</span>
                                            </div>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="author">
                                            <div class="avatar pull-left">
                                                {{@$ticket_reply->user->badge}}
                                            </div>
                                            <div class="actions">
                                                

                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                @endforeach
                            </div>
                            <div class="pagination text-center">
                            {{ $ticket_replies->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </section> 