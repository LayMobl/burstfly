{{----}}
{{--./ressources/views/users/register.blade.php--}}
{{--Variables disponibles:--}}
{{---Table user--}}
{{----}}

@extends('welcome')
@section('title')
    Nouvel utilisateur
@endsection()
@section('content')

    <div id="wrapper-container">
        <div class="container object">
            <div style="text-align: center">
                <h2>Inscription</h2>
                <form method="POST" action="{{route('app_user_store')}}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">Nom utilisateur:</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>

                    <div class="form-group">
                        <label for="password">Mot de passe:</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Confirmation du mot de passe:</label>
                        <input type="password" class="form-control" id="password_confirmation"
                               name="password_confirmation">
                    </div>

                    <div class="form-group">
                        <button style="cursor:pointer" type="submit" class="btn btn-primary">Inscription</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="wrapper-thank">
        <div class="thank">
            <div class="thank-text">bu<span style="letter-spacing:-5px;">rs</span>tfly</div>
        </div>
    </div>

@endsection

