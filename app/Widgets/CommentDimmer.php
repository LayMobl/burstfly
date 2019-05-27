<?php

namespace App\Widgets;

use App\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Widgets\BaseDimmer;

class CommentDimmer extends BaseDimmer
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
        $count =  Comment::count();
        $string = trans_choice('Comments', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-bubble',
            'title'  => "{$count} {$string}",
            'text'   => 'Click here to check all the comments in your database',
            'button' => [
                'text' => 'View all comments',
                'link' => route('voyager.comments.index'),
            ],
            'image' => asset('img/comment.jpg'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', app(Comment::class));
    }
}
