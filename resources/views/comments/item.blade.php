{{----}}
{{--./ressources/views/comments/item.blade.php--}}
{{--Variables disponibles:--}}
{{--- Table comment, Table user--}}
{{----}}
<div class="post-reply">
    <img class="image-reply-post" src="{{asset('storage/'.str_replace('\\','/',Auth::user()->avatar))}}">
    <div class="name-reply-post">{{Auth::user()->name}}</div>
    <div class="text-reply-post">{{$comment}}</div>
</div>
