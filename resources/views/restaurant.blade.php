@extends('layouts.layout')

@section('main')
    @include('partials.resto-header')
    <div class="description">
        <p class="m-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi voluptate quae nihil esse quidem ipsam asperiores, nesciunt, soluta sint tempore assumenda. Saepe obcaecati illum accusamus.</p>
        <div class="infos">
            <div class="info-locas info-item">
                <p>Agoè-Demakpoè</p>
            </div>
            <div class="infos-stars  info-item">

            </div>
        </div>
        <div class="info-item info-price"><p class="price-label">Prix moyen:   </p>
            <p class="price">500 frs</p></div>
        <div class="info-item">
    </div>
    @include('partials.plats')
@endsection
