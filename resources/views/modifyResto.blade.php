@extends('layouts.dashboardLayout')

@section('main')
    <div class="container m-5">
        <form action="" method="post">
            <fieldset class="">
                <legend class="text-success m-3">Modifier les informations de votre restaurant</legend>
                <div class="mb-3">
                    <label for="restoName" class="form-label">Nom du restaurant</label>
                    <input type="text" class="form-control" id="restoName" name="restoName" value="Vouvouzela">
                  </div>
                  <div class="mb-3">
                    <label for="restoSlogan" class="form-label">Mini description ou slogan</label>
                    <input type="text" class="form-control" id="restoSlogan" name="restoSlogan" value="Lorem ipsum dolor sit amet.">
                  </div>
                  <div class="mb-3">
                    <label for="restoPrice" class="form-label">Prix moyen du restaurant</label>
                    <input type="number" class="form-control" id="restoPrice" name="restoPrice" value="500">
                  </div>
                  <div class="mb-3">
                    <label for="restoDescription" class="form-label">Description</label>
                    <textarea class="form-control" id="restoDescription" name="restoDescription" rows="3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, nulla, provident commodi praesentium, aperiam facere tempore tempora debitis beatae impedit assumenda tenetur delectus obcaecati eligendi. Nam ut ab facere vero!</textarea>
                  </div>
                  <div class="mb-3">
                    <label for="restoslocation" class="form-label">Quartier</label>
                    <input type="text" class="form-control" id="restosLocation" name="restosLocation" value="Agoè Demakpoè">
                  </div>
                  <div class="mb-3">
                    <label for="restoLongitude" class="form-label">Longitude</label>
                    <input type="number" class="form-control" id="restoLongitude" name="restoLongitude" value="">
                  </div>
                  <div class="mb-3">
                    <label for="restoLatitude" class="form-label">Latitude</label>
                    <input type="number" class="form-control" id="restoLatitude" name="restoLatitude" value="">
                  </div>
                  <div class="mb-3">
                    <input class="form-control d-none" type="file" id="platImage" name="platImage">
                    <span href="" id="choose-file" class="p-20 choose-file">Choisir une image pour votre restaurant</span>
                    <img src="" width="400" height="400" class="" id="imageToShow" alt="">                  </div>
                  <div class="col-12">
                    <button class="btn btn-success" type="submit">Modifier</button>
                  </div>
            </fieldset>
        </form>
    </div>
</div>
@endsection
