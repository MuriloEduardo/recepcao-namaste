@php
$count = $events->count();

$classes = [
    'col-xs-12',
    'col-sm-'.($count >= 2 ? '6' : '12'),
    'col-md-'.($count >= 3 ? '4' : ($count >= 2 ? '6' : '12')),
];
$class = implode(' ', $classes);
$prefix = "<div class='{$class}'>";
$surfix = '</div>';
@endphp

@foreach($events as $event)
    @php echo $prefix @endphp
        <div class="panel widget center bgimage" style="margin-bottom:0;overflow:hidden;background-image:url('{{ voyager_asset('images/widget-backgrounds/01.jpg') }}');">
            <div class="dimmer"></div>
            <div class="panel-content">
                <h4>{{ $event->name }}</h4>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-event-id="{{ $event->id }}" data-event-name="{{ $event->name }}" data-target="#edit-event-modal">Adicionar cliente</button>
            </div>
        </div>
    @php echo $surfix @endphp
@endforeach
