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
        <h1 class="mb-0">Edit employe</h1>
        <hr />
        @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
        @endif

        <form action="{{ route('employe.update', $employe->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="name" value="{{ $employe->name }}" readonly>
                </div>
                <div class="col">
                    <label class="form-label">email</label>
                    <input type="text" name="email" class="form-control" placeholder="email" value="{{ $employe->email }}" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">phone_number</label>
                    <input type="text" name="phone_number" class="form-control" placeholder="phone_number" value="{{ $employe->phone_number }}" readonly>
                </div>
                <div class="col">
                    <label class="form-label">adress</label>
                    <input type="text" name="adress" class="form-control" placeholder="adress" value="{{ $employe->adress }}" readonly>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Password</label>
                    <input type="text" name="Password" class="form-control" placeholder="Password" value="{{ $employe->Password }}" readonly>
                </div>
                <div class="col">
                    <label class="form-label">Role</label>
                    <input type="text" name="role" class="form-control" placeholder="role" value="{{ $employe->role }}">

                </div>
            </div>

            <div class="row mb-3">
            <div class="d-grid">
                <button class="btn btn-primary">Update</button>
                <a href="{{ route('employe.index')}}" type="button" class="btn btn-warning">cancel</a>       

            </div>
        </div>
        </form>

    </div>
</div>
@endsection