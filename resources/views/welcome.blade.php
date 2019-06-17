{{----}}
{{--./ressources/views/welcome.blade.php--}}
{{----}}
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
        <link href='{{asset('css/app.css')}}' rel='stylesheet' type='text/css'>
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
                <div class="logo"><a href="{{route('app_homepage')}}"><img src="{{asset('img/logo-burst.png')}}" alt="logo platz" height="38" width="90"></a></div>
                <div id="main_tip_search">
                    <form>
                        <input type="text" name="search" id="tip_search_input" list="search" autocomplete=off required>
                    </form>
                </div>
                <div id="stripes"></div>
            </div>
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
        <script type="text/javascript" src="{{asset('js/ajax.js')}}"></script>
    </body>

</html>
