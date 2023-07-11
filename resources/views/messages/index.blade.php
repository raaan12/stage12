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
                <th>title</th>
                <th>corps</th>
                <th>email_sender</th>

            </tr>
        </thead>
        @if($message->count() > 0)
                @foreach($message as $rs)
                    <tr>
                        <td class="align-middle">{{ $rs->id }}</td>
                        <td class="align-middle">{{ $rs->title }}</td>
                        <td class="align-middle">{{ $rs->corps }}</td>
                        <td class="align-middle">{{ $rs->clientId}}</td>

                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">empty table</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection