@extends('layouts.layout')

@section('main')
    <div class="container m-5">
        <form action="" method="post">
            <fieldset class="">
                <legend class="text-success m-3">Ajouter un plat</legend>
                <div class="mb-3">
                    <label for="platName" class="form-label">Nom du plat</label>
                    <input type="text" class="form-control" id="platName" name="platName" placeholder="">
                  </div>
                  <div class="mb-3">
                    <label for="platPrice" class="form-label">Prix du plat</label>
                    <input type="number" class="form-control" id="platPrice" name="platPrice" placeholder="">
                  </div>
                  <div class="mb-3">
                    <label for="platDescription" class="form-label">Description</label>
                    <textarea class="form-control" id="platDescription" name="platDescription" rows="3"></textarea>
                  </div>
                  <div class="mb-3">
                    <input class="form-control d-none" type="file" id="platImage" name="platImage">
                    <a href="" class="p-20 choose-file">Choisir une image pour votre restaurant</a>
                  </div>
                  <div class="col-12">
                    <button class="btn btn-success" type="submit">Ajouter</button>
                  </div>
            </fieldset>
        </form>
    </div>
@endsection
