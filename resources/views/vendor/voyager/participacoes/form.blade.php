<form role="form"
        class="form-edit-add"
        action="@if(!is_null($dataTypeContent->getKey())){{ route('voyager.'.$dataType->slug.'.update', $dataTypeContent->getKey()) }}@else{{ route('voyager.'.$dataType->slug.'.store') }}@endif"
        method="POST" enctype="multipart/form-data">
    <!-- PUT Method if we are editing -->
    @if(!is_null($dataTypeContent->getKey()))
        {{ method_field("PUT") }}
    @endif

    <!-- CSRF TOKEN -->
    {{ csrf_field() }}

    <div class="panel-body">

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Adding / Editing -->
        @php
            $dataTypeRows = $dataType->{(!is_null($dataTypeContent->getKey()) ? 'editRows' : 'addRows' )};
        @endphp

        @foreach($dataTypeRows as $row)
            <!-- GET THE DISPLAY OPTIONS -->
            @php
                $options = json_decode($row->details);
                $display_options = isset($options->display) ? $options->display : NULL;
            @endphp
            @if ($options && isset($options->legend) && isset($options->legend->text))
                <legend class="text-{{$options->legend->align or 'center'}}" style="background-color: {{$options->legend->bgcolor or '#f0f0f0'}};padding: 5px;">{{$options->legend->text}}</legend>
            @endif
            @if ($options && isset($options->formfields_custom))
                @include('voyager::formfields.custom.' . $options->formfields_custom)
            @else
                <div class="form-group {{ strtolower(preg_replace('/\s+/', '', $row->display_name)) }} @if($row->type == 'hidden') hidden @endif col-md-{{ $display_options->width or 12 }}" @if(isset($display_options->id)){{ "id=$display_options->id" }}@endif>
                    {{ $row->slugify }}
                    <label for="name">{{ $row->display_name }}</label>
                    @include('voyager::multilingual.input-hidden-bread-edit-add')
                    @if($row->type == 'relationship')
                        @include('voyager::formfields.relationship')
                    @else
                        {!! app('voyager')->formField($row, $dataType, $dataTypeContent) !!}
                    @endif

                    @foreach (app('voyager')->afterFormFields($row, $dataType, $dataTypeContent) as $after)
                        {!! $after->handle($row, $dataType, $dataTypeContent) !!}
                    @endforeach
                </div>
            @endif
        @endforeach

    </div><!-- panel-body -->

    <div class="panel-footer">
        <button type="submit" class="btn btn-primary save">{{ __('voyager::generic.save') }}</button>
    </div>
</form>

<iframe id="form_target" name="form_target" style="display:none"></iframe>
<form id="my_form" action="{{ route('voyager.upload') }}" target="form_target" method="post"
        enctype="multipart/form-data" style="width:0;height:0;overflow:hidden">
    <input name="image" id="upload_file" type="file"
                onchange="$('#my_form').submit();this.value='';">
    <input type="hidden" name="type_slug" id="type_slug" value="{{ $dataType->slug }}">
    {{ csrf_field() }}
</form>

<!-- Modal Create Customer -->
<div id="customer-create-modal" class="modal fade" role="dialog" tabindex='-1'>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Criar novo cliente rapidamente</h4>
            </div>
            <form ref="form">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input required="" type="text" class="form-control" name="name" placeholder="Nome" autofocus>
                    </div>
                </div>
                <div class="modal-footer text-left">
                    <button type="button" id="submit-customer-create" class="btn btn-primary login-button">
                        <span class="keeping hidden"><span class="voyager-refresh"></span> Guardando...</span>
                        <span class="save">Guardar</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div><!-- /.modal -->

@section('javascript')
    <script>
        $(document).ready(function () {
            
            var $customerSelect2 = $('select.select2[name="participation_belongstomany_customer_relationship[]"]'),
                selCustomerModel = '#customer-create-modal';

            $(el).select2({
                allowClear: true,
                ajax: {
                    url: '/admin/clientes',
                    dataType: 'json',
                    data: function (params) {
                        var query = {
                            page: params.page || 1,
                            s: params.term,
                            key: 'name',
                            filter: 'contains'
                        };
                        return query;
                    },
                    processResults: function (response) {
                        console.log(response)
                        return {
                            results: $.map(response.data, function (item) {
                                return {
                                    text: item.name,
                                    id: item.id
                                }
                            }),
                            pagination: {
                                more: true
                            }
                        };
                    },
                    cache: true
                },
                language: {
                    noResults: function(){
                        let newTag = $('.form-group.clientes input.select2-search__field').val();
                        return `
                            <div id="newNoResults">
                                <div class="noResults">Nenhum resultado encontrado</div>
                                <div class="createNew">
                                    <a href="`+ selCustomerModel +`" class="btn btn-primary form-control" data-keyboard="true" data-customer-name="` + newTag + `" data-toggle="modal" data-target="`+ selCustomerModel +`">Criar novo cliente: <strong>` + newTag + `</strong></a>
                                </div>
                            </div>
                        `;
                    }
                },
                escapeMarkup: function (markup) {
                    return markup;
                }
            });

            $(selCustomerModel).on('show.bs.modal', function (e) {
                $customerSelect2.select2('close');
                
                var customerName = $(e.relatedTarget).data('customer-name');
                
                $(e.currentTarget).find('input[name="name"]').val(customerName);
            });

            $('#submit-customer-create').on('click', function(){

                $('#submit-customer-create .save').hide();
                $('#submit-customer-create .keeping').removeClass('hidden');

                params = {
                    name: $('#customer-create-modal input[name="name"]').val(),
                    _token: '{{ csrf_token() }}'
                };

                $.post('/admin/clientes', params, function(response, status){

                    let data = response.data;

                    if (status == 'success') {

                        $('#submit-customer-create .save').show();
                        $('#submit-customer-create .keeping').addClass('hidden');
                        
                        toastr.success('Cliente ' + data.name + ' criado com sucesso!');

                        let newOption = new Option(data.name, data.id, true, true);
                        $customerSelect2.append(newOption).trigger('change');

                        $(selCustomerModel).modal('hide');
                    } else {
                        toastr.error('Algo deu errado.');
                    }
                });
            });
        });
    </script>
@stop
