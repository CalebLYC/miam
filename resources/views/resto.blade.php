@extends('layouts.layout')

@section('main')
    @include('partials.resto-header')
    <div class="description">
        <p class="m-5">{{$restaurant->description}}</p>
        <div class="infos">
            <div class="info-locas info-item">
                <p class="price-label">Quartier:   </p>
                <p>{{$restaurant->location}}</p>
            </div>
            <div class="infos-stars  info-item">
                <p class="price-label text-decoration-underline">Nombre d'étoiles:   </p>
                <p>{{$restaurant->rate_stars}}</p>
            </div>
        </div>
        <div class="info-item info-price">
            <p class="price-label">Prix moyen:   </p>
            <p class="price">{{$restaurant->median_price}} frs</p></div>
        <div class="info-item">


            <!-- Button trigger modal -->
        <a href="" class="text-decoration-underline" data-bs-toggle="modal" data-bs-target="#id{{$restaurant->id}}">
        Evaluez-nous
        </a>

            <!-- Modal -->
        <div class="modal fade" id="id{{$restaurant->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5 text-success" id="exampleModalLabel">Evaluez {{$restaurant->nom}}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form action="{{route('restaurant.rate', ['restaurant'=>$restaurant->id])}}" method="post">
                @csrf
                @method('post')
                <div class="modal-body">
                  <div class="mb-3">
                      <label for="stars" class="form-label">Note sur 5</label>
                      <input type="number" min="1" max="5" class="form-control" id="stars" name="stars" placeholder="" value="{{old('stars')}}" required>
                    </div>
                    <div class="mb-3">
                      <label for="avis" class="form-label">Laisser un avis</label>
                      <textarea class="form-control" id="avis" rows="3" name="avis">{{old('avis')}}</textarea>
                    </div>
                </div>
                <div class="danger bg-danger">
                    @if($errors->any())
                        @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                            <script>
                                alert("{{ $error }}");
                            </script>
                        @endforeach
                    @endif
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                  <button type="submit" class="btn btn-success">Evaluez</button>
                </div>
              </form>
            </div>
          </div>
        </div>
    </div>
    @include('partials.plats')
    @include('partials.restoMap')
@endsection
