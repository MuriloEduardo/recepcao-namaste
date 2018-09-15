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
                $format_display_name = strtolower(preg_replace('/\s+/', '', $row->display_name));
            @endphp
            @if ($options && isset($options->legend) && isset($options->legend->text))
                <legend class="text-{{$options->legend->align or 'center'}}" style="background-color: {{$options->legend->bgcolor or '#f0f0f0'}};padding: 5px;">{{$options->legend->text}}</legend>
            @endif
            @if ($options && isset($options->formfields_custom))
                @include('voyager::formfields.custom.' . $options->formfields_custom)
            @else
                @if(!Request::ajax() || (Request::ajax() && ($format_display_name == 'nome' || $format_display_name == 'email' || $format_display_name == 'telefone')))
                    <div class="form-group @if($row->type == 'hidden') hidden @endif col-md-{{ $display_options->width or 12 }}" @if(isset($display_options->id)){{ "id=$display_options->id" }}@endif>
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
