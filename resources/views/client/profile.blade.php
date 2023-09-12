@extends('client.layouts.main')
@section('content')

<style>
    .button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: chocolate;
        background-color: #FFEED6;
        text-align: center;
        cursor: pointer;
        width: 100%;
    }

    .button:hover {
        background-color: #FFE5C1;
    }
</style>
<div class="container py-5">
    <div class="row">
        <div class="col-lg-4">
            <div class="card mb-4">
                <div class="card-body text-center">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                    <h5 class="my-3">{{ Auth::user()->name }}</h5>
                    <p class="text-muted mb-4">{{ Auth::user()->adress }}</p>
                    <p class="text-muted mb-4">{{ Auth::user()->phone_number }}</p>
                    <div class="d-flex justify-content-center mb-2">
                        <a href="#" data-toggle="modal" data-target="#editNameModal">Edit</a>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal pour la modification du nom -->
        <div class="modal fade" id="editNameModal" tabindex="-1" role="dialog" aria-labelledby="editNameModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editNameModalLabel">Edit general informations</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Formulaire de modification du nom -->
                        <form action="{{ route('update.name') }}" method="POST">
                            @csrf
                            <input type="text" name="name" class="form-control" value="{{ Auth::user()->name}}">
                            <br>
                            <input type="text" name="adress" class="form-control" value="{{ Auth::user()->adress}}">
                            <br>
                            <input type="text" name="phone_number" class="form-control" value="{{ Auth::user()->phone_number}}">

                            <button type="submit" class="btn btn-primary mt-3">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Email</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{{ Auth::user()->email }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Password</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{{ Auth::user()->password }}</p>
                        </div>
                    </div>
                </div>
                <a href="#" data-toggle="modal" data-target="#editPassModal">Edit</a>
            </div>

        </div>

        <!-- Modal pour la modification du nom -->
        <div class="modal fade" id="editPassModal" tabindex="-1" role="dialog" aria-labelledby="editPassModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editNameModalLabel">Edit authentification information</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Formulaire de modification du nom -->
                        <form action="{{ route('update.pass') }}" method="POST">
                            @csrf
                            <input type="text" name="email" class="form-control" value="{{ Auth::user()->email}}">
                            <br>
                            <input type="text" name="password" class="form-control" value="{{ Auth::user()->password}}">
                            <button type="submit" class="btn btn-primary mt-3">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection