@extends('resource.show')

@php
$links['back'] = guard_url('ticket_system/ticket_system');
$links['edit'] = guard_url('ticket_system/ticket_system') . '/' . $ticket_system->getRouteKey() . '/edit';
@endphp

@section('icon') 
<i class="pe-7s-display2"></i>
@stop

@section('title') 
{!! __('ticket_system::ticket_system.title.main') !!}
@stop

@section('sub.title') 
{!! __('ticket_system::ticket_system.title.show') !!}
@stop

@section('breadcrumb') 
  <li><a href="{!!guard_url('/')!!}">{{ __('app.home') }}</a></li>
  <li><a href="{!!guard_url('$ticket_system/ticket_system')!!}">{!! __('ticket_system::ticket_system.name') !!}</a></li>
  <li>{{ __('app.show') }}</li>
@stop

@section('tabs') 
@stop

@section('tools') 
    <a href="{!!guard_url('$ticket_system/ticket_system')!!}" rel="tooltip" class="btn btn-white btn-round btn-simple btn-icon pull-right add-new" data-original-title="" title="">
            <i class="fa fa-chevron-left"></i>
    </a>
@stop

@section('content') 
    @include('ticket_system::ticket_system.partial.show', ['mode' => 'show'])
@stop
