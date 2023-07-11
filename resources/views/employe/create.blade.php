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
<h1 class="mb-0">Add employe</h1>
    <hr />
    <form action="{{ route('emplye.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="name" class="form-control" placeholder="name">
            </div>
            <div class="col">
                <input type="text" name="email" class="form-control" placeholder="email">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="role" class="form-control" placeholder="role">
            </div>
            <div class="col">
            <input type="text" name="phone_number" class="form-control" placeholder="phone_number">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <input type="text" name="adress" class="form-control" placeholder="adress">
            </div>
            <div class="col">
            <input type="text" name="password" class="form-control" placeholder="password">
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">save</button>
                <a href="{{ route('colors.index')}}" type="button" class="btn btn-warning">cancel</a>       
            </div>
        </div>
    </form>
        </div>
</div>

@endsection