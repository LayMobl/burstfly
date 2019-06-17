{{----}}
{{--./ressources/views/users/show.blade.php--}}
{{--Variables disponibles:--}}
{{---Table user--}}
{{----}}

@extends('welcome')
@section('title')
    Profil de {{$user->name}}
@endsection()
@section('content')

    <div id="wrapper-container">
        <div class="container object">
            <div style="text-align: center">
                <div>
                    <p style="font-family: Helvetica; font-weight: bold; font-size: 50px;">Profil de {{$user->name}}</p>
                </div>
                <div>
                    <figure>
                        <img style="width: 256px" src="{{asset('storage/' . $user->avatar)}}" alt="" />
                    </figure>
                    <a href="{{route('app_user_edit', ['id' => $user->id, 'name' => $user->name])}}">Modifier mon profil</a>
                    <div>
                            <p><span style="font-weight: bold;">Mon nom d'utilisateur: </span>{{$user->name}}</p>
                            <p><span style="font-weight: bold;">Mon adresse mail: </span>{{$user->email}}</p>
                            <p><span style="font-weight: bold;">Date de création du compte: </span>{{$user->created_at}}</p>
                    </div>
                </div>
            </div>
            <p style="margin-top: 5rem; font-family: Helvetica; font-weight: bold; font-size: 35px;">Tous les works de {{$user->name}}</p>
            @inject('works', 'App\Http\Controllers\WorkController')
            {!! $works->indexUser($user->id) !!}
        </div>
    </div>

    <div id="wrapper-thank">
        <div class="thank">
            <div class="thank-text">bu<span style="letter-spacing:-5px;">rs</span>tfly</div>
        </div>
    </div>

@endsection
