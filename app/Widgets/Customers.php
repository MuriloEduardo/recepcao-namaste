<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;

class Customers extends AbstractWidget
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
        $count = \App\Customer::count();

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-people',
            'title'  => "{$count} clientes",
            'text'   => "Você tem {$count} clientes. Clique no botão abaixo para ver todos.",
            'button' => [
                'text' => 'Ver todos',
                'link' => '/admin/clientes',
            ],
            'image' => voyager_asset('images/widget-backgrounds/03.jpg'),
        ]));
    }
}
