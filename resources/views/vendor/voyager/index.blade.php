@extends('voyager::master')

@section('content')
    <div class="page-content">
        @include('vendor.voyager.events-dimmer')
        @include('voyager::alerts')
        @include('voyager::dimmers')
    </div>
    <div id="event-edit-modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">
                        <i class="voyager-list-add"></i>
                        Adicionar Participação
                    </h4>
                    <div class="modal-body"></div>
                </div>
            </div>
        </div>
    </div>
@stop
