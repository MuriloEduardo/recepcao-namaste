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
        <div class="panel widget center bgimage" style="background-color:red;">
            <div class="dimmer"></div>
            <div class="panel-content">
                <h4>{{ $event->name }}</h4>
                <a href="#event-edit-modal={{ $event->id }}" class="btn btn-primary">Nova Participação</a>
            </div>
        </div>
    @php echo $surfix @endphp
@endforeach