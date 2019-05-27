<?php

namespace App\Widgets;

use App\Tag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Widgets\BaseDimmer;

class TagDimmer extends BaseDimmer
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
        $count =  Tag::count();
        $string = trans_choice('Tags', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-thumb-tack',
            'title'  => "{$count} {$string}",
            'text'   => 'Click here to check all the tags in your database',
            'button' => [
                'text' => 'View all tags',
                'link' => route('voyager.tags.index'),
            ],
            'image' => asset('img/tag.jpg'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', app(Tag::class));
    }
}
