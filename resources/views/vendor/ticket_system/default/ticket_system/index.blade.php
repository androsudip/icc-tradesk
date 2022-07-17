@extends('resource.index')
@php
$links['create'] = guard_url('ticket_system/ticket_system/create');
$links['search'] = guard_url('ticket_system/ticket_system');
@endphp

@section('icon') 
<i class="pe-7s-display2"></i>
@stop

@section('title') 
{!! __('ticket_system::ticket_system.title.main') !!}
@stop

@section('sub.title') 
{!! __('ticket_system::ticket_system.title.list') !!}
@stop

@section('breadcrumb') 
  <li><a href="{!!guard_url('/')!!}">{{ __('app.home') }}</a></li>
  <li><a href="{!!guard_url('ticket_system/ticket_system')!!}">{!! __('ticket_system::ticket_system.name') !!}</a></li>
  <li>{{ __('app.list') }}</li>
@stop

@section('entry') 
<div id="entry-form">

</div>
@stop

@section('list')
    @include('ticket_system::ticket_system.partial.list.' . $view, ['mode' => 'list'])
@stop

@section('pagination') 
    {!!$ticket_systems->links()!!}
@stop

@section('script')

@stop

@section('style')

@stop 
