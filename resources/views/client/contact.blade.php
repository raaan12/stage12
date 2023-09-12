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

    .column {
        float: left;
        width: 33.3%;
        margin-bottom: 16px;
        margin-left: 350px;
    }

    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        margin: 8px;
    }

</style>
<div class="column">
        <div class="card">
<div class="container">
    <h1 style="text-align: center; color: chocolate;">lets keep in touch guys...</h1>
    <form method="post" action="{{ route('message.store') }}">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="corps">Message</label>
            <textarea name="corps" id="corps" class="form-control" rows="4" required></textarea>
        </div>
        <button type="submit" class="button">Send</button>
        <br>
    </form>
    <br>
    <br>
</div>
        </div>
</div>
@endsection