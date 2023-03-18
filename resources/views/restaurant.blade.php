@extends('layouts.layout')

@section('main')
    @include('partials.resto-header')
    <div class="description">
        <p class="m-5">{{$restaurant->description}}</p>
        <div class="infos">
            <div class="info-locas info-item">
                <p>{{$restaurant->location}}</p>
            </div>
            <div class="infos-stars  info-item">

            </div>
        </div>
        <div class="info-item info-price"><p class="price-label">Prix moyen:   </p>
            <p class="price">{{$restaurant->median_price}} frs</p></div>
        <div class="info-item">
    </div>
    @include('partials.plats')
@endsection
