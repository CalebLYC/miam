@extends('layouts.layout')

@section('main')
    <div class="container m-5">
        <form action="{{route('restaurants.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('post')
            <fieldset class="">
                <legend class="text-success m-3">Inscrire votre restaurant</legend>
                <div class="mb-3">
                    <label for="restoName" class="form-label">Nom du restaurant</label>
                    <input type="text" class="form-control" id="restoName" name="restoName" placeholder="" value="{{old('restoName')}}">
                  </div>
                  <div class="mb-3">
                    <label for="restoEmail" class="form-label">Email</label>
                    <input type="text" class="form-control" id="restoEmail" name="restoEmail" placeholder="resto@gmail.com" value="{{old('restoEmail')}}">
                  </div>
                  <div class="mb-3">
                    <label for="restoPassword" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" id="restoPassword" name="restoPassword" placeholder="" value="{{old('restoPassword')}}">
                  </div>
                  <div class="mb-3">
                    <label for="restoPasswordConfirm" class="form-label">Confirmer votre mot de passe</label>
                    <input type="password" class="form-control" id="restoPasswordConfirm" name="restoPasswordConfirm" placeholder="" value="{{old('restoPasswordConfirm')}}">
                    @error('passwordConfirm')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="restoSlogan" class="form-label">Mini description ou slogan</label>
                    <input type="text" class="form-control" id="restoSlogan" name="restoSlogan" placeholder="" value="{{old('restoSlogan')}}">
                  </div>
                  <div class="mb-3">
                    <label for="restoPrice" class="form-label">Prix moyen du restaurant</label>
                    <input type="number" class="form-control" id="restoPrice" name="restoPrice" placeholder="" value="{{old('restoPrice')}}">
                  </div>
                  <div class="mb-3">
                    <label for="restoDescription" class="form-label">Description</label>
                    <textarea class="form-control" id="restoDescription" name="restoDescription" value="{{old('restoDescription')}}" rows="3">{{old('restoDescription')}}</textarea>
                  </div>
                  <div class="mb-3">
                    <label for="restoslocation" class="form-label">Quartier</label>
                    <input type="text" class="form-control" id="restoLocation" name="restoLocation" value="{{old('restoLocation')}}" placeholder="">
                  </div>
                  <div class="mb-3">
                    <label for="restoLongitude" class="form-label">Longitude</label>
                    <input type="" class="form-control" id="restoLongitude" name="restoLongitude" value="{{old('restoLongitude')}}" placeholder="">
                  </div>
                  <div class="mb-3">
                    <label for="restoLatitude" class="form-label">Latitude</label>
                    <input type="" class="form-control" id="restoLatitude" name="restoLatitude" value="{{old('restoLatitude')}}" placeholder="">
                  </div>
                  <div class="mb-3">
                    <input class="form-control d-none" type="file" id="platImage" name="platImage" value="{{old('platImage')}}">
                    <span href="" id="choose-file" class="p-20 choose-file">Choisir une image pour votre restaurant</span>
                    <img src="" width="400" height="400" class="" id="imageToShow" alt="">                  </div>
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
                    <button class="btn btn-success" type="submit">Enregistrer</button>
                  </div>
            </fieldset>
        </form>
    </div>
@endsection
