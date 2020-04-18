@extends('authentication.index')
@section('content')
                                <form action="{{route('authentication')}}" method="POST" class="pt-2">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label for="emailaddress">L'adresse du email</label>
                                        <input class="form-control" name="email" type="email" .id="emailaddress" required="" placeholder="Entrer votre adresse email">
                                    </div>

                                    <div class="form-group mb-3">
                                        <a href="{{route('passwordForget')}}" class="text-muted float-right"><small>Mot de passe oublie?</small></a>
                                        <label for="password">Mot de passe</label>
                                        <input class="form-control" name="password" type="password" required="" id="password" placeholder="Entrer votre mot de passe">
                                    </div>

                                    

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-success btn-block" type="submit"> Connexion </button>
                                    </div>

                                </form>
                                <!-- end row -->
@endsection
       