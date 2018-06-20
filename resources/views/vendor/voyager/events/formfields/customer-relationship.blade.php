@if(isset($options->model) && isset($options->type))

	@php $relationshipField = $row->field; @endphp

	<select
		class="form-control @if(isset($options->taggable) && $options->taggable == 'on') select2-taggable @else select2 @endif" 
		name="{{ $relationshipField }}[]" multiple
		@if(isset($options->taggable) && $options->taggable == 'on')
			data-route="{{ route('voyager.'.str_slug($options->table).'.store') }}"
			data-label="{{$options->label}}"
			data-error-message="{{__('voyager::bread.error_tagging')}}"
		@endif
	>
		@php 
			$selected_values = isset($dataTypeContent) ? $dataTypeContent->belongsToMany($options->model, $options->pivot_table)->pluck($options->table.'.'.$options->key)->all() : array();
			$relationshipOptions = app($options->model)->find($selected_values);
		@endphp

		@foreach($relationshipOptions as $relationshipOption)
			<option value="{{ $relationshipOption->{$options->key} }}" @if(in_array($relationshipOption->{$options->key}, $selected_values)){{ 'selected="selected"' }}@endif>{{ $relationshipOption->{$options->label} }}</option>
		@endforeach

	</select>

@endif
