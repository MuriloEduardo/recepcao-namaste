<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;

class Events extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = \App\Event::count();

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-pizza',
            'title'  => "{$count} eventos",
            'text'   => "Você tem {$count} eventos. Clique no botão abaixo para ver todos.",
            'button' => [
                'text' => 'Ver todos',
                'link' => '/admin/events',
            ],
            'image' => voyager_asset('images/widget-backgrounds/02.jpg'),
        ]));
    }
}
