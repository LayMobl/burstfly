@foreach ($comments as $comment)


<div class="post-reply">
    <img class="image-reply-post" src="{{asset('storage/'.$comment->user->avatar)}}"></img>
    <div class="name-reply-post">{{$comment->name}}</div>
    <div class="text-reply-post">{{$comment->message}}</div>
</div>
@endforeach
