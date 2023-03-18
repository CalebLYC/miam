@extends('layouts.layout')

@section('main')
    <div class="container-fluid plat-head">
        <div class="row">
            <img src="{{Storage::url($plat->image->url)}}" alt="">
        </div>
        <div class="row">
          <div class="col platinfos">
            <h1 class="text-warning">{{$plat->nom}}</h1>
          </div>
        </div>
    </div>

    <div class="container description plat-description">
        <p class="m-5">{{$plat->description}}</p>
        <div class="info-item info-price"><p class="price-label">Prix:   </p>
            <p class="price">{{$plat->price}} frs</p></div>
        <div class="info-item">
        <button class="btn btn-success m-5">Commander</button>
    </div>
@endsection
