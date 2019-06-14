



        <section class="work">

            @foreach ($works as $work)
                <figure class="white">
                    <a href="{{ route('app_work_show',['id' => $work->id,'slug' => str_slug($work->name,'-')]) }}">
                        <img src="{{asset('img/psd-4.jpg')}}" alt="" />
                        <dl>
                            <dt>{{$work->name}}</dt>
                            <dd>{{$work->description}}</dd>
                        </dl>
                    </a>
                    <div id="wrapper-part-info">
                        <div class="part-info-image"><img src="{{asset('img/'.$work->tag->image)}}" alt="" width="28" height="28" /></div>
                        <div id="part-info">{{$work->tag->name}}</div>
                    </div>
                </figure>
            @endforeach
        </section>


