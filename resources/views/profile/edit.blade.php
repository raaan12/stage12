@extends('layouts.main')
@section('content')
<style>
    .container {
        margin-top: 10%;
        margin-left: 25%;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .form-wrapper {
        max-width: 500px;
        padding: 40px;
        background: linear-gradient(#DFD9FF, #FCFFD9);
        border-radius: 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    .col-form-label {
        font-weight: bold;
    }

    .form-control {
        border-radius: 0;
    }

    .btn-warning {
        border-radius: 0;
    }
</style>


<div class="container">
    <div class="form-wrapper">
    <h1 class="mb-0">Edit Admin</h1>
        <hr />
        @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif
    <form action="{{ route('profile.update',$profile) }}" method="POST">
                        @csrf
                        @method('PATCH')
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="name" class="form-control" value="{{ $profile->name }}" placeholder="Name" >
            </div>
            <div class="col">
                <input type="email" name="email" class="form-control" value="{{ $profile->email }}" placeholder="Email">
            </div>
        </div>
        
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="role" class="form-control" value="{{ $profile->role }}"  placeholder="Role">
            </div>
            <div class="col">
                <input type="text" name="phone_number" class="form-control" value="{{ $profile->phone_number }}"  placeholder="Phone_number">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <input type="text" name="adress" class="form-control" value="{{ $profile->adress }}" placeholder="Adress">
            </div>
            <div class="col">
                <input type="password" name="password" class="form-control" value="{{ $profile->password }}" placeholder="Password">
        </div>

        <div class="row mb-3">
            <div class="col">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('employe.index')}}" type="button" class="btn btn-warning">cancel</a>       

            </div>
        </div>
    </form>
    </div>
</div>
@endsection