<?php

namespace App\Widgets;

use App\Newsletter;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Widgets\BaseDimmer;

class NewsletterDimmer extends BaseDimmer
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
        $count =  Newsletter::count();
        $string = trans_choice('Newsletters', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-paper-plane',
            'title'  => "{$count} {$string}",
            'text'   => 'Click here to check all the subscribers in your database',
            'button' => [
                'text' => 'View all subscribers',
                'link' => route('voyager.newsletters.index'),
            ],
            'image' => asset('img/newsletter.jpg'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', app(Newsletter::class));
    }
}
