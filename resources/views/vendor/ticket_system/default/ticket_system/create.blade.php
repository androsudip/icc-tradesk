@extends('resource.create')
@php
$links['back'] = guard_url('ticket_system/ticket_system');
$links['form'] = $links['back'];
@endphp

@section('icon') 
<i class="pe-7s-display2"></i>
@stop

@section('title') 
{!! __('ticket_system::ticket_system.title.main') !!}
@stop

@section('sub.title') 
{!! __('ticket_system::ticket_system.title.create') !!}
@stop

@section('breadcrumb') 
  <li><a href="{!!guard_url('/')!!}">{{ __('app.home') }}</a></li>
  <li><a href="{!!guard_url('ticket_system/ticket_system')!!}">{!! __('ticket_system::ticket_system.name') !!}</a></li>
  <li>Create</li>
@stop

@section('tools') 
    <a href="{!!guard_url('ticket_system/ticket_system')!!}" rel="tooltip" class="btn btn-white btn-round btn-simple btn-icon pull-right add-new" data-original-title="" title="">
            <i class="fa fa-chevron-left"></i>
    </a>
@stop

@section('content') 
    @include('ticket_system::ticket_system.partial.entry', ['mode' => 'create'])
@stop

@section('actions') 
<div>
    <input class="btn-large btn-primary btn" type="submit" data-action="STORE" data-form="form-create" value="{{__('app.create')}}"> 
    <input class="btn-large btn-inverse btn" type="reset" value="{{__('app.reset')}}">
</div>
@stop

