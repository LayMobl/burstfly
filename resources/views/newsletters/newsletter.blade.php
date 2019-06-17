{{----}}
{{--./ressources/views/newsletters/newsletter.blade.php--}}
{{--Variables disponibles:--}}
{{--- Table email--}}
{{----}}

@extends('welcome')
@section('title')
    Newsletter
@endsection()
@section('content')

    <div id="wrapper-container" style="height: 300px;">
        <div class="container object">
            <div id="main-container-image" style="padding-top: 85px;">
                @if($success == 0)
                    <p class="newsletter-text">Email <span id="email">{{ $email }}</span> already exists in our database, please enter another email address</p>
                @else
					<p class="newsletter-text">Email <span id="email">{{ $email }}</span> successfully added to our database. Welcome in the family!</p>
                @endif
                <div style="text-align: center;">
                    <form action="{{ route('app_homepage') }}" method="post">
                        <input type="submit" value="Go back to homepage"
                               name="Submit" id="newsletter-redirect" />
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
