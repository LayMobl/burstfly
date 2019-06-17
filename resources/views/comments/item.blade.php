
<div class="post-reply">
    <img class="image-reply-post" src="{{asset('storage/'.str_replace('\\','/',Auth::user()->avatar))}}"></img>
    <div class="name-reply-post">{{Auth::user()->name}}</div>
    <div class="text-reply-post">{{$comment}}</div>
</div>
