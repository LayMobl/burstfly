
<div id="wrapper-navbar">
		<div class="navbar object">

            <div id="wrapper-bouton-icon">

              @foreach ($tags as $tag )

            	<a href="{{route('app_tag_show',['id' => $tag->id,'slug' => str_slug($tag->name,'-')]) }}" id="{{'bouton-'.substr($tag->image,5,-4)}}">
								<img src="{{asset('img/'.$tag->image)}}" alt="{{$tag->name}}" title="{{$tag->name}}" height="28" width="28">
							</a>
            	@endforeach
			</div>
    	</div>
    </div>

<!-- FILTER -->

	<div id="main-container-menu" class="object">
    	<div class="container-menu">

            <div id="main-cross">
            	<div id="cross-menu"></div>
            </div>

            <div id="main-small-logo">
            	<div class="small-logo"></div>
            </div>

            <div id="main-premium-ressource">
                <div class="premium-ressource"><a href="#">Premium resources</a></div>
            </div>

            <div id="main-themes">
                <div class="themes"><a href="#">Latest themes</a></div>
            </div>

            <div id="main-psd">
                <div class="psd"><a href="#">PSD goodies</a></div>
            </div>

            <div id="main-ai">
                <div class="ai"><a href="#">Illustrator freebies</a></div>
            </div>

            <div id="main-font">
                <div class="font"><a href="#">Free fonts</a></div>
            </div>

            <div id="main-photo">
                <div class="photo"><a href="#">Free stock photos</a></div>
            </div>

        </div>
    </div>
