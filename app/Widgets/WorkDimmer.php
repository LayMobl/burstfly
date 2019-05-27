<?php

namespace App\Widgets;

use App\Work;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Widgets\BaseDimmer;

class WorkDimmer extends BaseDimmer
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
        $count =  Work::count();
        $string = trans_choice('Works', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-bag',
            'title'  => "{$count} {$string}",
            'text'   => 'Click here to check all the works in your database',
            'button' => [
                'text' => 'View all works',
                'link' => route('voyager.works.index'),
            ],
            'image' => asset('img/work.jpg'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', app(Work::class));
    }
}
