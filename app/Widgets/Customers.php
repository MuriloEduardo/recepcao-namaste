<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use TCG\Voyager\Facades\Voyager;

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
        $string = 'cliente';

        if ($count > 1) {
            $string = $string . 's';
        }

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-people',
            'title'  => "{$count} {$string}",
            'text'   => "Você tem {$count} {$string}. Clique no botão abaixo para ver todos.",
            'button' => [
                'text' => 'Ver todos',
                'link' => '/admin/clientes',
            ],
            'image' => voyager_asset('images/widget-backgrounds/01.jpg'),
        ]));
    }
}
