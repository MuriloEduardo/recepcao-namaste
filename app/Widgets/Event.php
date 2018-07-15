<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Event extends AbstractWidget
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
        return view('vendor.voyager.widgets.event', array_merge($this->config, [
            'events' => DB::table('events')
                ->where([
                    ['day_week', date('w')]
                ])
                ->orWhere('start_date_at', date('Y-m-d'))
                ->get()
        ]));
    }
}
