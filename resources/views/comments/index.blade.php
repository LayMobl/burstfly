{{----}}
{{--./ressources/views/comments/index.blade.php--}}
{{--Variables disponibles:--}}
{{--- Table comment, Table user--}}
{{----}}

@foreach ($comments as $comment)
    <div class="post-reply">
        <img class="image-reply-post" src="{{asset('storage/'.$comment->user->avatar)}}">
        <div class="name-reply-post">{{$comment->user->name}}</div>
        <div class="text-reply-post">{{$comment->message}}</div>
    </div>
@endforeach
