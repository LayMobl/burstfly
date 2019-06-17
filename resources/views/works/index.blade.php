{{----}}
{{--./ressources/views/works/index.blade.php--}}
{{--Variables disponibles:--}}
{{---Table work, Table tag--}}
{{----}}

@extends('welcome')
@section('title')
	Accueil
@endsection()
@section('content')

    <div class="container object">
        <div id="main-container-image">
            <section class="work">
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
            </section>
        </div>

        <div id="wrapper-oldnew" >
            <div class="oldnew">
                <div align="center">{{ $works->links() }}</div>
            </div>
        </div>
        <div id="wrapper-thank">
            <div class="thank">
                <div class="thank-text">pl<span style="letter-spacing:-5px;">a</span>tz</div>
            </div>
        </div>
    </div>

@endsection
