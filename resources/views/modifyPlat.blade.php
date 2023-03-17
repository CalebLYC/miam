@extends('layouts.dashboardLayout')

@section('main')
    <div class="container m-5">
        <form action="" method="post">
            <fieldset class="">
                <legend class="text-success m-3">Modifier le plat</legend>
                <div class="mb-3">
                    <label for="platName" class="form-label">Nom du plat</label>
                    <input type="text" class="form-control" id="platName" name="platName" value="Atiéké">
                  </div>
                  <div class="mb-3">
                    <label for="platPrice" class="form-label">Prix du plat en cfa</label>
                    <input type="number" class="form-control" id="platPrice" name="platPrice" value="500">
                  </div>
                  <div class="mb-3">
                    <label for="platDescription" class="form-label">Description</label>
                    <textarea class="form-control" id="platDescription" name="platDescription" rows="3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, nulla, provident commodi praesentium, aperiam facere tempore tempora debitis beatae impedit assumenda tenetur delectus obcaecati eligendi. Nam ut ab facere vero!</textarea>
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
