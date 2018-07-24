<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;

class Professionals extends AbstractWidget
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
        $count = \App\Professional::count();

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-study',
            'title'  => "{$count} profissionais",
            'text'   => "Você tem {$count} profissionais. Clique no botão abaixo para ver todos.",
            'button' => [
                'text' => 'Ver todos',
                'link' => '/admin/profissionais',
            ],
            'image' => voyager_asset('images/widget-backgrounds/02.jpg'),
        ]));
    }
}
