@extends('layouts.layout')

@section('main')
    <div class="container m-5">
        <form action="{{route('restaurants.update', ['restaurant'=>$restaurant->id])}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <fieldset class="">
                <legend class="text-success m-3">Modifier votre restaurant</legend>
                <div class="mb-3">
                    <label for="restoName" class="form-label">Nom du restaurant</label>
                    <input type="text" class="form-control" id="restoName" name="restoName" placeholder="" value="{{$restaurant->nom}}">
                  </div>
                  <div class="mb-3">
                    <label for="restoEmail" class="form-label">Email</label>
                    <input type="text" class="form-control" id="restoEmail" name="restoEmail" placeholder="resto@gmail.com" value="{{$restaurant->email}}">
                  </div>
                  <div class="mb-3">
                    <label for="restoSlogan" class="form-label">Mini description ou slogan</label>
                    <input type="text" class="form-control" id="restoSlogan" name="restoSlogan" placeholder="" value="{{$restaurant->slogan}}">
                  </div>
                  <div class="mb-3">
                    <label for="restoPrice" class="form-label">Prix moyen du restaurant</label>
                    <input type="number" class="form-control" id="restoPrice" name="restoPrice" placeholder="" value="{{$restaurant->median_price}}">
                  </div>
                  <div class="mb-3">
                    <label for="restoDescription" class="form-label">Description</label>
                    <textarea class="form-control" id="restoDescription" name="restoDescription" rows="3">{{$restaurant->description}}</textarea>
                  </div>
                  <div class="mb-3">
                    <label for="restoslocation" class="form-label">Quartier</label>
                    <input type="text" class="form-control" id="restoLocation" name="restoLocation" value="{{$restaurant->location}}" placeholder="">
                  </div>
                  <div class="mb-3">
                    <label for="restoLongitude" class="form-label">Longitude</label>
                    <input type="number" class="form-control" id="restoLongitude" name="restoLongitude" value="{{$restaurant->longitude}}" placeholder="">
                  </div>
                  <div class="mb-3">
                    <label for="restoLatitude" class="form-label">Latitude</label>
                    <input type="number" class="form-control" id="restoLatitude" name="restoLatitude" value="{{$restaurant->latitude}}" placeholder="">
                  </div>
                  <div class="mb-3">
                    <input class="form-control d-none" type="file" id="platImage" name="platImage" value="{{old('platImage')}}">
                    <span href="" id="choose-file" class="p-20 choose-file">Choisir une image pour votre restaurant</span>
                    <img src="" width="400" height="400" class="" id="imageToShow" alt="">
                 </div>

                  @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                    <div class="col-12">
                    <button class="btn btn-success" type="submit">Modifier</button>
                  </div>
            </fieldset>
        </form>
    </div>
@endsection
