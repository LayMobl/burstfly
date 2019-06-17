{{----}}
{{--./ressources/views/works/index.blade.php--}}
{{--Variables disponibles:--}}
{{---Table work, Table tag--}}
{{----}}

<div class="image-morefrom">
    @foreach ($works as $work)
        <a href="{{ route('app_work_show',['id' => $work->id,'slug' => str_slug($work->name,'-')]) }}">
            <div class="image-morefrom-{{$loop->index+1}}">
                <img src="{{asset('storage/'.$work->image)}}" alt="" width="430" height="330"/>
            </div>
        </a>
    @endforeach
</div>
