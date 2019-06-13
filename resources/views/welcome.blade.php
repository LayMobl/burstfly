<!DOCTYPE HTML>
<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Platz - @yield('title')</title>

<!-- Behavioral Meta Data -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="icon" type="image/png" href="{{asset('img/small-logo-01.png')}}">
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,900,900italic,700italic,700,500italic,400italic,500,300italic,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link href='{{asset('style.css')}}' rel='stylesheet' type='text/css'>

	@if (Route::current()->getName() == 'app_work_show')
  	<link href='{{asset('show.css')}}' rel='stylesheet' type='text/css'>
	@endif

</head>

<body>

<a name="ancre"></a>

<!-- CACHE -->
<div class="cache"></div>

<!-- HEADER -->

<div id="wrapper-header">
	<div id="main-header" class="object">
		<div class="logo"><img src="{{asset('img/logo-burst.png')}}" alt="logo platz" height="38" width="90"></div>

        <div id="main_tip_search">
			<form>
				<input type="text" name="search" id="tip_search_input" list="search" autocomplete=off required>
			</form>
		</div>
        <div id="stripes"></div>
    </div>
</div>
<div style="background-color:#2E2D30;padding-left:7.3rem;">
	@if (auth()->check())
						@if (auth()->user()->isAdmin())

								<div>
									Hello {{Auth::user()->name}} <a href="{{url('admin')}}">Panneau d'administration</a> | <a href="{{route('logout')}}">(Logout)</a>
								</div>
						@else
									<div>Hello {{Auth::user()->name}} <a href="{{url('app_homepage')}}">Mon profil</a> | <a href="{{route('logout')}}">(Logout)</a></div>
						@endif
@else
 <a href="{{url('admin')}}">Se connecter</a>|<a href="">S'inscrire</a>
@endif
</div>

<!-- NAVBAR -->
@inject('tag', 'App\Http\Controllers\TagController')
{!! $tag->index() !!}




<!-- PORTFOLIO -->

	<div id="wrapper-container">
   @yield('content')




							<!-- Include FOOTER -->
							@include('partials.footer')

</div>



<!-- SCRIPT -->

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('js/jquery.scrollTo.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.localScroll.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery-animate-css-rotate-scale.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/fastclick.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.animate-colors-min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.animate-shadow-min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/main.js')}}"></script>
	<script>





/* PRELOADER */

function preloader() {
	if (document.images) {
		var img1 = new Image();
		var img2 = new Image();
		var img3 = new Image();
		var img4 = new Image();
		var img5 = new Image();
		var img6 = new Image();
		var img7 = new Image();
		var img8 = new Image();
		var img9 = new Image();
		var img10 = new Image();
		var img11 = new Image();
		var img12 = new Image();
		var img13 = new Image();
		var img14 = new Image();
		var img15 = new Image();
		var img16 = new Image();
		var img17 = new Image();
		var img18 = new Image();
		var img19 = new Image();
		var img20 = new Image();

		img1.src = "img/psd-4.jpg";
		img2.src = "img/font-1.jpg";
		img3.src = "img/psd-1.jpg";
		img4.src = "img/psd-2.jpg";
		img5.src = "img/ai-1.jpg";
		img6.src = "img/theme-2.jpg";
		img7.src = "img/psd-3.jpg";
		img8.src = "img/font-2.jpg";
		img9.src = "img/font-3.jpg";
		img10.src = "img/ai-2.jpg";
		img11.src = "img/icons-1.jpg";
		img12.src = "img/ui-1.jpg";
		img13.src = "img/font-5.jpg";
		img14.src = "img/theme-2.jpg";
		img15.src = "img/psd-5.jpg";
		img16.src = "img/icons-3.jpg";
		img17.src = "img/font-4.jpg";
		img18.src = "img/theme-3.jpg";
		img19.src = "img/font-6.jpg";
		img20.src = "img/theme-4.jpg";
	}
}
function addLoadEvent(func) {
	var oldonload = window.onload;
	if (typeof window.onload != 'function') {
		window.onload = func;
	} else {
		window.onload = function() {
			if (oldonload) {
				oldonload();
			}
			func();
		}
	}
}
addLoadEvent(preloader);

</script>


</body>


</html>
