@extends('layouts.layout')

@section('main')
    <div class="container m-5">
        <form action="" method="post">
            <fieldset class="">
                <legend class="text-success m-3">Inscrire votre restaurant</legend>
                <div class="mb-3">
                    <label for="restoName" class="form-label">Nom du restaurant</label>
                    <input type="text" class="form-control" id="restoName" name="restoName" placeholder="">
                  </div>
                  <div class="mb-3">
                    <label for="restoSlogan" class="form-label">Mini description ou slogan</label>
                    <input type="text" class="form-control" id="restoSlogan" name="restoSlogan" placeholder="">
                  </div>
                  <div class="mb-3">
                    <label for="restoPrice" class="form-label">Prix moyen du restaurant</label>
                    <input type="number" class="form-control" id="restoPrice" name="restoPrice" placeholder="">
                  </div>
                  <div class="mb-3">
                    <label for="restoDescription" class="form-label">Description</label>
                    <textarea class="form-control" id="restoDescription" name="restoDescription" rows="3"></textarea>
                  </div>
                  <div class="mb-3">
                    <label for="restoslocation" class="form-label">Quartier</label>
                    <input type="text" class="form-control" id="restosLocation" name="restosLocation" placeholder="">
                  </div>
                  <div class="mb-3">
                    <label for="restoLongitude" class="form-label">Longitude</label>
                    <input type="number" class="form-control" id="restoLongitude" name="restoLongitude" placeholder="">
                  </div>
                  <div class="mb-3">
                    <label for="restoLatitude" class="form-label">Latitude</label>
                    <input type="number" class="form-control" id="restoLatitude" name="restoLatitude" placeholder="">
                  </div>
                  <div class="mb-3">
                    <input class="form-control d-none" type="file" id="platImage" name="platImage">
                    <a href="" class="p-20 choose-file">Choisir une image pour votre restaurant</a>
                  </div>
                  <div class="col-12">
                    <button class="btn btn-success" type="submit">Enregistrer</button>
                  </div>
            </fieldset>
        </form>
    </div>
@endsection
