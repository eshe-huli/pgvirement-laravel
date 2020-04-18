@extends('index')
    @section('content')
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item">Navigation</li>
                                    <li class="breadcrumb-item active">Utilisateurs</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Utilisateurs</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <div id="datatable-buttons_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="dt-buttons btn-group">
                                                    <a href="#custom-modal" class=" width-md" 
                                                    data-animation="slidetogether" data-plugin="custommodal" data-overlayspeed="100" 
                                                    data-overlaycolor="#36404a">
                                                    <button class="btn btn-secondary buttons-copy buttons-html5 waves-effect"
                                                    tabindex="0" aria-controls="datatable-buttons" type="button">
                                                    <span>
                                                        <i class="mdi mdi-account-plus"></i>
                                                    </span>
                                                    </button>
                                                    </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div id="datatable-buttons_filter" class="dataTables_filter">
                                            <label>Search:<input type="search" class="form-control form-control-sm"
                                                                 placeholder=""
                                                                 aria-controls="datatable-buttons"></label></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="datatable-buttons"
                                               class="table table-striped table-bordered dt-responsive nowrap dataTable no-footer dtr-inline"
                                               role="grid" aria-describedby="datatable-buttons_info"
                                               style="width: 1097px;">
                                            <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons"
                                                    rowspan="1" colspan="1" style="width: 174.4px;"
                                                    aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending">Nom
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable-buttons"
                                                    rowspan="1" colspan="1" style="width: 254.4px;"
                                                    aria-label="Position: activate to sort column ascending">Prenom
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable-buttons"
                                                    rowspan="1" colspan="1" style="width: 127.4px;"
                                                    aria-label="Office: activate to sort column ascending">Email
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable-buttons"
                                                    rowspan="1" colspan="1" style="width: 58.4px;"
                                                    aria-label="Age: activate to sort column ascending">Téléphone
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable-buttons"
                                                    rowspan="1" colspan="1" style="width: 115.4px;"
                                                    aria-label="Start date: activate to sort column ascending">Role
                                                
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable-buttons"
                                                    rowspan="1" colspan="1" style="width: 99.4px;"
                                                    aria-label="Salary: activate to sort column ascending">Dèrrnière Connexion
                                                </th>

                                                <th class="sorting" tabindex="0" aria-controls="datatable-buttons"
                                                    rowspan="1" colspan="1" style="width: 99.4px;"
                                                    aria-label="Salary: activate to sort column ascending">Actions
                                                </th>
                                            </tr>
                                            </thead>

                                            <tbody>

                                            @foreach($users as $user)
                                                <tr role="row" class="odd">
                                                    <td tabindex="0" class="sorting_1">{{$user->last_name}}</td>
                                                    <td>{{$user->first_name}}</td>
                                                    <td>{{$user->email}}</td>
                                                    <td>{{$user->phone}}</td>
                                                    <td>{{$user->role}}</td>
                                                    <td>{{$user->last_login}}</td>
                                                    <td>
                                                    <a href="#custom-modal" class=" width-md" 
                                                    data-animation="slidetogether" data-plugin="custommodal" data-overlayspeed="100" 
                                                    data-overlaycolor="#36404a">
                                                         <button class="btn-sm btn-secondary buttons-copy buttons-html5" tabindex="0"
                                                    aria-controls="datatable-buttons" type="button">
                                                    <span>
                                                        <i class=" mdi mdi-file-document-edit"></i>
                                                    </span>
                                            </button>
                                                                                                </a>

                                                    <a href="#modalDeleteUsers" class=" width-md" 
                                                    data-animation="slidetogether" data-plugin="custommodal" data-overlayspeed="100" 
                                                    data-overlaycolor="#36404a">
                                             <button class="btn-sm btn-danger buttons-copy buttons-html5" tabindex="0"
                                                    aria-controls="datatable-buttons" type="button">
                                                    <span>
                                                        <i class=" mdi mdi-trash-can-outline"></i>
                                                    </span>
                                            </button>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                    {{$users->links()}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div> <!-- container-fluid -->

        </div> <!-- content -->
@endsection

@section('modal')
        <div id="custom-modal" class="modal-demo" style="null">
            <button type="button" class="close" onclick="Custombox.modal.close();">
                <span>×</span><span class="sr-only">Close</span>
            </button>
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-card card" data-toggle="lists" data-options='{"valueNames": ["name"]}'>
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">

                                <!-- Title -->
                                <h4 class="card-header-title" id="exampleModalCenterTitle">
                                    Ajouter un membre
                                </h4>

                            </div>
                            <div class="col-auto">
                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="card-header">

                        <!-- Form -->
                        <form action="{{route('users.add')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nom</label>
                                <input name="name" type="text" class="form-control" id="name" placeholder="Nom prénom">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                         <strong>{{ $errors->first('name')  }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input name="email" type="email" class="form-control" id="email" placeholder="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                         <strong>{{ $errors->first('email')  }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="phone">Téléphone</label>
                                <input name="phone" type="tel" class="form-control" id="phone" placeholder="05000000">
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                         <strong>{{ $errors->first('phone')  }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Mot de passe</label>
                                <input name="password" type="password" class="form-control" id="password" placeholder="Password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                         <strong>{{ $errors->first('password')  }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Envoyer</button>
                        </form>
                    </div>
                    <div class="card-body">
                    </div>
                </div>
            </div>
        </div>

    <!-- Modal: Supress -->
    <div class="modal fade" id="modalDeleteUsers" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-card card" data-toggle="lists" data-options='{"valueNames": ["name"]}'>
                    <div class="card-header bg-secondary text-light text-center">
                        <div class="row align-items-center ">
                            <div class="col">

                                <!-- Title -->
                                <h4 class="card-header-title" id="exampleModalCenterTitle">
                                    Etes vous sur?
                                </h4>

                            </div>
                            <div class="col-auto">

                                <!-- Close -->
                                <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>

                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="card-header text-center">
                        <!-- Form -->
                        <form action="{{route('users.delete')}}" method="post">
                            @csrf
                            <button type="reset" class="btn btn-secondary mx-3" data-dismiss="modal" aria-label="Close">Non</button>
                            <button type="submit" class="btn btn-danger mx-3">Oui</button>
                        </form>
                    </div>
                    <div class="card-body">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
