@php
$dimmers = \Arrilot\Widgets\Facade::group('voyager::dimmers');
$count = $dimmers->count();

$classes = [
    'col-xs-12',
    'col-sm-'.($count >= 2 ? '6' : '12'),
    'col-md-'.($count >= 3 ? '4' : ($count >= 2 ? '6' : '12')),
];
$class = implode(' ', $classes);
$prefix = "<div class='{$class}'>";
$surfix = '</div>';
@endphp
@if ($dimmers->any())
<h1 class="page-title">
    <i class="voyager-bar-chart"></i>
    <span>Alguns números</span>
</h1>
<div class="clearfix container-fluid row">
    {!! $prefix.$dimmers->setSeparator($surfix.$prefix)->display().$surfix !!}
</div>
@endif
