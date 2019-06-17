{{----}}
{{--./ressources/views/users/edit.blade.php--}}
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
                    <p style="font-family: Helvetica; font-weight: bold; font-size: 50px;">Modification de {{$user->name}}</p>
                </div>
                <div>
                    <figure>
                        <img style="width: 256px" src="{{asset('storage/' . $user->avatar)}}" alt="" />
                    </figure>
                    <form method="post" action="{{ route('app_user_update',['id' => $user->id, 'name' => $user->name]) }}">
                        @csrf
                        <div class="form-group">
                            <label style="font-weight: bold;" for="name">Mon nom d'utilisateur: </label>
                            <input type="text" class="form-control" name="name" value={{ $user->name }} />
                        </div>
                        <div class="form-group">
                            <label style="font-weight: bold;" for="price">Mon adresse mail: </label>
                            <input type="text" class="form-control" name="email" value={{ $user->email }} />
                        </div>
                        <div class="form-group">
                            <label style="font-weight: bold;" for="quantity">Mot de passe: :</label>
                            <input type="password" class="form-control" name="password" />
                        </div>
                        <button type="submit" class="btn btn-primary">Mettre à jour</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="wrapper-thank">
        <div class="thank">
            <div class="thank-text">bu<span style="letter-spacing:-5px;">rs</span>tfly</div>
        </div>
    </div>

@endsection

