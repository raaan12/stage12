@extends('layouts.main')
@section('content')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List commande</h1>
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
                <th>Montant</th>
                <th>DateLivraison</th>
                <th>Etat</th>
                <th>UserId</th>
                <th>Update/Delete</th>

            </tr>
        </thead>
        <tbody>
            <tr>
            @if($commande->count() > 0)
                @foreach($commande as $rs)
                    <tr>
                        <td class="align-middle">{{ $rs->id }}</td>
                        <td class="align-middle">{{ $rs->montant }}</td>
                        <td class="align-middle">{{ $rs->dateLivraison }}</td>
                        <td class="align-middle">{{ $rs->etat }}</td>
                        <td class="align-middle">{{ $rs->clientId}}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('commandes.details', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('commandes.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>       
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">empty table</td>
                </tr>
            @endif

            </tr>
        </tbody>
    </table>
@endsection 