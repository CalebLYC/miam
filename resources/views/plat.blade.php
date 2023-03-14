@extends('layouts.layout')

@section('main')
    <div class="container-fluid plat-head">
        <div class="row">
            <img src="{{'img/plats/plat1.jpg'}}" alt="">
        </div>
        <div class="row">
          <div class="col platinfos">
            <h1 class="text-warning">Atiéké.</h1>
          </div>
        </div>
    </div>

    <div class="container description plat-description">
        <p class="m-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi voluptate quae nihil esse quidem ipsam asperiores, nesciunt, soluta sint tempore assumenda. Saepe obcaecati illum accusamus.</p>
        <div class="info-item info-price"><p class="price-label">Prix:   </p>
            <p class="price">500 frs</p></div>
        <div class="info-item">
        <button class="btn btn-success m-5">Commander</button>
    </div>
@endsection
