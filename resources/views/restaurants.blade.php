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
                        <div class="info-item">
                            <p class="price-label">Prix moyen:   </p>
                             <p class="price">{{$restaurant->median_price}} frs</p></div>
                        <div class="info-item">
                            <p class="price-label">Quartier:   </p>
                            <p>{{$restaurant->location}}</p>
                        </div>
                        <div class="info-item stars">

                            <p class="price-label text-decoration-underline" data-bs-toggle="modal" data-bs-target="#id{{$restaurant->id}}">
                                Nombre d'étoiles:
                            </p>

                            <p>{{$restaurant->rate_stars}}</p>

                            <div class="modal fade" id="id{{$restaurant->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h1 class="modal-title fs-5 text-success" id="exampleModalLabel">Evaluez {{$restaurant->nom}}</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    ...
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                    <button type="button" class="btn btn-success">Evaluez</button>
                                  </div>
                                </div>
                              </div>
                            </div>

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
