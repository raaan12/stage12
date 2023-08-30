@extends('client.layouts.main')
@section('content')
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        margin: 0;
    }

    html {
        box-sizing: border-box;
    }

    *,
    *:before,
    *:after {
        box-sizing: inherit;
    }

    .column {
        float: left;
        width: 33.3%;
        margin-bottom: 16px;
        padding: 0 8px;
    }

    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        margin: 8px;
    }

    .about-section {
        padding: 50px;
        text-align: center;
        background-color: #FFEED6;
        color: burlywood;
    }

    .container {
        padding: 0 16px;
    }

    .container::after,
    .row::after {
        content: "";
        clear: both;
        display: table;
    }

    .title {
        color: burlywood;
    }

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

    @media screen and (max-width: 650px) {
        .column {
            width: 100%;
            display: block;
        }
    }
</style>

<div class="about-section">
    <h1 style="color: chocolate;">MOLRA YARN</h1>
    <p>Notre boutique dédiée aux accessoires et vêtements en crochet, créée par deux étudiantes animées par leur passion pour la couture. </p>
    <p>Bienvenue dans notre univers où la mode rencontre la créativité !</p>

</div>
<br>
<div class="row" style="display: flex; justify-content: center;">
    <div class="column">
        <div class="card">
            <img src="{{asset('images/rania.jpg')}}" alt="Rania Chakroun" style="width:100%">
            <div class="container">
                <h2 style="color: chocolate;">Rania Chakroun</h2>
                <p class="title">Clothing design manager</p>
                <p>2nd year Computer Engineering student</p>
                <p>rania.chakroun@etudiant-enit.utm.tn</p>
                <p><button class="button">Contact</button></p>
            </div>
        </div>
    </div>

    <div class="column">
        <div class="card">
            <img src="{{asset('images/molka.jpg')}}" alt="Molka Beddi" style="width:100%">
            <div class="container">
                <h2 style="color: chocolate;">Molka Beddi</h2>
                <p class="title">Accessories design manager</p>
                <p>1st year Computer Engineering student</p>
                <p>molka.beddi@etudiant-enit.utm.tn</p>
                <p><button class="button">Contact</button></p>
            </div>
        </div>
    </div>
</div>


@endsection