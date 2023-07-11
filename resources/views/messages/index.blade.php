@extends('layouts.main')
@section('content')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List messages</h1>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif

    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Update/Delete</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>           
                <td></td>
                <td>
                    <button type="button" style="width: 30%; font-size: 24px; cursor: pointer; text-align: center; text-decoration: none; outline: none; color: #fff; background-color: #B4E7FF; border:none; border-radius: 6px;" >update</button>
                    <button type="button" style="width: 30%; font-size: 24px; cursor: pointer; text-align: center; text-decoration: none; outline: none; color: #fff; background-color: #B4E7FF; border:none; border-radius: 6px;" >delete</button>
                </td>

            </tr>
        </tbody>
    </table>
@endsection