@extends('welcome')
@section('title')
	Détails de {{$work->name}}
@endsection()
@section('content')






	<div id="wrapper-container">

		<div class="container object">

			<div id="main-container-image">

                <div class="title-item">
                	<div class="title-icon" style="background:url({{asset('img/title-icon-ps.svg')}})"></div>
                    <div class="title-text" style="margin-left: 7.5%;font-size: 1.4rem;font-family: helvetica;font-weight: bold;">{{$work->name}}</div>
                    <div class="title-text-2" style="margin-left: 7.5%;font-family: helvetica;font-weight: bold;">{{$work->created_at->format('d/m/Y') }} by {{$work->user->name}}</div>
                </div>


				<div class="work">
					<figure class="white">
							 <img src="{{asset('storage/'.$work->image)}}" alt="" />

                                        </figure>

                <div class="wrapper-text-description">


                	<div class="wrapper-file">
                    	<div class="icon-file"><img src="{{asset('img/icon-psdfile.svg')}}" alt="" width="21" height="21"/></div>
                        <div class="text-file">{{$work->tag->name}}</div>
                    </div>

                    <div class="wrapper-weight">
                    	<div class="icon-weight"><img src="{{asset('img/icon-weight.svg')}}" alt="" width="20" height="23"/></div>
                        <div class="text-weight">
												@php
                        $filesize = filesize('storage/'.$work->image)/1000;
												echo (int)$filesize.' Mo';
												@endphp</div>
                    </div>

                    <div class="wrapper-desc">
                    	<div class="icon-desc"><img src="{{asset('img/icon-desc.svg')}}" alt="" width="24" height="24"/></div>
                        <div class="text-desc">{{$work->description}}</div>
                    </div>

                    <div class="wrapper-download">
                    	<div class="icon-download"><img src="{{asset('img/icon-download.svg')}}" alt="" width="19" height="26"/></div>
                        <div class="text-download"><a href="{{ route('app_work_download',['slug' => str_slug($work->name,'-')]) }}"><b>Download</b></a></div>
                    </div>

                    <div class="wrapper-morefrom">
                    	<div class="text-morefrom">More from {{$work->tag->name}}</div>
											@inject('works', 'App\Http\Controllers\WorkController')
											{!! $works->more($work->tag->id) !!}
                    </div>

                </div>

                        <div class="post-reply">
                            <div id="title-post-send">
                                <hr/><h2>Your comments</h2>
                            </div>


                	</div>

                	<div class="post-reply">
                    	<div class="image-reply-post"></div>
                    	<div class="name-reply-post">Igor vlademir</div>
                    	<div class="text-reply-post">Awesome mockup, i like it very much ! It will help me for my website i was looking for since few days. Thank you a lot.</div>
                	</div>

                    <div class="post-reply-2">
                    	<div class="image-reply-post-2"></div>
                    	<div class="name-reply-post-2">Nathan Shaw</div>
                    	<div class="text-reply-post-2">Well done ! I like the way you did it. Awesome ! </div>
                	</div>

                	<div class="post-send">
                    	<div id="main-post-send">
                            <div id="title-post-send">Add your comment</div>
							<form id="contact" method="post" action="/onclickprod/formsubmit_op.asp">
    							<fieldset>
									<p><textarea id="message" name="message" maxlength="500" placeholder="Votre Message" tabindex="5" cols="30" rows="4"></textarea></p>
								</fieldset>
								<div style="text-align:center;"><input type="submit" name="envoi" value="Envoyer" /></div>
  							</form>
                        </div>
					</div>
                </div>
			</div>
		</div>

			<div id="wrapper-thank">
					<div class="thank">
							<div class="thank-text">bu<span style="letter-spacing:-5px;">rs</span>tfly</div>
					</div>
			</div>
    </div>

@endsection
