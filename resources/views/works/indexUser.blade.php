{{----}}
{{--./ressources/views/works/indexUser.blade.php--}}
{{--Variables disponibles:--}}
{{---Table work, Table tag--}}
{{----}}

<section class="work">
    @if(count($works) > 0)
        @foreach ($works as $work)
            <figure class="white">
                <a href="{{ route('app_work_show',['id' => $work->id,'slug' => str_slug($work->name,'-')]) }}">
                    <img src="{{asset('storage/'.$work->image)}}" alt="" />
                    <dl>
                        <dt>{{$work->name}}</dt>
                        <dd>{{$work->description}}</dd>
                    </dl>
                </a>
                <div id="wrapper-part-info">
                    <div class="part-info-image"><img src="{{asset('img/'.$work->tag->image)}}" alt="" width="28" height="28"/></div>
                    <div id="part-info">{{$work->tag->name}}</div>
                </div>
            </figure>
        @endforeach
    @else
        <p>Aucun projet disponible</p>
    @endif
</section>
        


