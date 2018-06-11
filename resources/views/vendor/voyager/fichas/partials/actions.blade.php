@php
$action = new $action($dataType, $data);

$url_customer_id = '';
if($action->getPolicy() != 'delete' && !is_null($customer_id)) {
    $url_customer_id = '?key=customer_id&filter=equals&s=' . $customer_id;
}
@endphp

@if ($action->shouldActionDisplayOnDataType())
    @can($action->getPolicy(), $data)
        
        <a href="{{ $action->getRoute($dataType->name) . $url_customer_id}}" title="{{ $action->getTitle() }}" {!! $action->convertAttributesToHtml() !!}>
            <i class="{{ $action->getIcon() }}"></i> <span class="hidden-xs hidden-sm">{{ $action->getTitle() }}</span>
        </a>
    @endcan
@endif