@extends('authentication.index')
@section('content')
                                <form action="#" method="POST" class="pt-2">
                                @csrf
                                    <p class="text-muted mt-3 text-center">Enter your email address and we'll send you an email with instructions to reset your password.</p>
                                    <div class="form-group mb-3">
                                        <label for="emailaddress">Address Email</label>
                                        <input class="form-control" type="email" id="emailaddress" required="" placeholder="Entrez votre email">
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-success btn-block" type="submit"> Reinitialiser votre mot de passe</button>
                                    </div>

                                </form>

                                <div class="row mt-3">
                                    <div class="col-12 text-center">
                                        <p class="text-muted mb-0">Retourner sur la page de <a href="{{route('login')}}" class="text-dark ml-1"><b>Connexion</b></a></p>
                                    </div> <!-- end col -->
                                </div>
                                <!-- end row -->

       @endsection