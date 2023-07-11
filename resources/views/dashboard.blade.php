@extends('layouts.main')
@section('content')
<!-- Chart -->
<!-- eCommerce statistic -->
<div class="row">
    <div class="col-xl-4 col-lg-6 col-md-12">
        <div class="card pull-up ecom-card-1 bg-white">
            <div class="card-content ecom-card2 height-180">
                <h5 class="text-muted danger position-absolute p-1">Produit 1</h5>
                <div>
                    <i class="ft-pie-chart danger font-large-1 float-right p-1"></i>
                </div>
                <div style="text-align: center; margin-top: 30px;" id="">
                    <img src="{{asset('images/tshirT.png')}}" height="80px" alt="Une belle image">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. </p>
                    <p>Price: 200£</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-12">
        <div class="card pull-up ecom-card-1 bg-white">
            <div class="card-content ecom-card2 height-180">
                <h5 class="text-muted info position-absolute p-1">Produit 2</h5>
                <div>
                    <i class="ft-activity info font-large-1 float-right p-1"></i>
                </div>
                <div style="text-align: center; margin-top: 30px;" id="">
                    <img src="{{asset('images/tshirT.png')}}" height="80px" alt="Une belle image">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. </p>
                    <p>Price: 200£</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-12">
        <div class="card pull-up ecom-card-1 bg-white">
            <div class="card-content ecom-card2 height-180">
                <h5 class="text-muted warning position-absolute p-1">Produit 3</h5>
                <div>
                    <i class="ft-activity info font-large-1 float-right p-1"></i>
                </div>
                <div style="text-align: center; margin-top: 30px;" id="">
                    <img src="{{asset('images/tshirT.png')}}" height="80px" alt="Une belle image">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. </p>
                    <p>Price: 200£</p>
                </div>
            </div>
        </div>

    </div>
    <button type="button" style="width: 50%; margin-left: 25%; margin-top: 30px;   font-size: 24px; cursor: pointer; text-align: center; text-decoration: none; outline: none; color: #fff; background-color: #A698C4; border:none; border-radius: 6px;" >Ajouter un produit</button>

</div>
@endsection