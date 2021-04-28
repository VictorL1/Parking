@extends('head.connexion')
@section('content')


<div class="login-form">
    @if (isset($error) && $error == 1)
        <center>
            <p class="bg-light border border-danger">
                Erreur dans le nom d'utilisateur ou le mot de passe
            </p>
        </center>
    @elseif(isset($error) && $error == 2)
    <center>
        <p class="bg-light border border-danger">
            Compte non activé
        </p>
    </center>
    @elseif(isset($error) && $error == 4)
    <center>
        <p class="bg-light border border-primary">
            Demande d'inscription envoyé
        </p>
    </center>
    @elseif(isset($error) && $error == 5)
    <center>
        <p class="bg-light border border-primary">
            La demande de modification de mot de passe à était envoyée
        </p>
    </center>
    @endif
    <form action="/" method="post">
        @csrf
        <h2>Connexion</h2>
        <div class="form-group">
            <input type="text" name="user" class="form-control" placeholder="Nom d'utilisateur" required>
        </div>
        <div class="form-group">
            <input type="password" name="pswd" id="mdp" class="form-control" placeholder="Mot de passe" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-outline-success ">Connexion</button>
        </div>
    </form>
        <a href="motdepasseoublie" class="btn-link">Mot de passe oublié ?</a>
</div>
@endsection
