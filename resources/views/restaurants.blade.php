@extends('layouts/layout')
@section('main')
<div class="container restaurants">

    <div class="restos-list">
        @forelse ($restaurants as $restaurant)

            <a href="{{route('restaurants.show', ['restaurant'=>$restaurant->id])}}">
                <div class="resto">
                    <div class="resto-image">
                        <img src="{{Storage::url($restaurant->image->url)}}" width="400" height="200" alt="Image du restaurant">
                    </div>
                    <div class="resto-infos">
                        <h4>{{$restaurant->nom}}</h4>
                        <div class="info-item"><p class="price-label">Prix moyen:   </p>
                             <p class="price">{{$restaurant->median_price}} frs</p></div>
                        <div class="info-item">
                            <a href=""><i class="fa-sharp fa-solid fa-location-dot"></i></a>
                            <p>{{$restaurant->location}}</p>
                        </div>
                        <div class="info-item stars">
                            <i class="fa-regular fa-star"></i>
                            <p>{{$restaurant->rate_stars}}</p>
                        </div>
                    </div>
                </div>
            </a>

        @empty
            <div class="page-empty">
                Aucun restaurant en ligne...
            </div>
        @endforelse
    </div>
</div>
@endsection
