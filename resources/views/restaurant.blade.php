@extends('layouts.layout')

@section('main')
    @include('partials.resto-header')
    <div class="description">
        <p class="m-5">{{$restaurant->description}}</p>
        <div class="infos">
            <div class="info-locas info-item">
                <p class="price-label text-decoration-underline">Quartier:   </p>
                <p>{{$restaurant->location}}</p>
            </div>
            <div class="infos-stars  info-item">
                <p class="price-label text-decoration-underline">Nombre d'étoiles:   </p>
                <p>{{$restaurant->rate_stars}}</p>
            </div>
            <div class="info-item info-price">
                <p class="price-label">Prix moyen:   </p>
                <p class="price">{{$restaurant->median_price}} frs</p></div>
            <div class="info-item">
            <a href="">Evaluez-nous</a>
        </div>
    </div>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
    @include('partials.plats')
@endsection
