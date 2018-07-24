@extends('voyager::master')

@section('content')
    <div class="page-content">
        @include('vendor.voyager.events-dimmer')
        @include('voyager::alerts')
        @include('voyager::dimmers')
    </div>
@stop

@section('modals')
    @include('vendor.voyager.modals.edit-event-modal')
    @include('vendor.voyager.modals.create-customer-modal')
@stop
