@extends('errors.index')
@section('content')
    <h1 class="text-error">
        500
    </h1>
    <h4 class="text-uppercase text-danger mt-3">
        Une Erreur c'est produite
    </h4>
    <p class="text-muted mt-3">
        Pourquoi ne pas essayer de recharger la page? <br>
        Ou vous pouvez contacter le 
        <a href="{{'mailto:admin@'. $url}}" class="text-dark"><b>
            Support</b>
        </a>
    </p>
@endsection