@extends('layouts.dashboardLayout')

@section('main')
    <div class="container-fluid m-5">
        <form action="{{route('plats.update', ['plat'=>$plat->id])}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <fieldset class="">
                <legend class="text-success m-3">Modifier le plat</legend>
                <div class="mb-3">
                    <label for="platName" class="form-label">Nom du plat</label>
                    <input type="text" class="form-control" id="platName" name="platName" placeholder="" value="{{$plat->nom}}">
                  </div>
                  <div class="mb-3">
                    <label for="platPrice" class="form-label">Prix du plat</label>
                    <input type="number" class="form-control" id="platPrice" name="platPrice" placeholder="" value="{{$plat->price}}">
                  </div>
                  <div class="mb-3">
                    <label for="platDescription" class="form-label">Description</label>
                    <textarea class="form-control" id="platDescription" name="platDescription" rows="3">{{$plat->description}}</textarea>
                  </div>
                  <div class="mb-3 d-flex flex-column">
                    <input class="form-control d-none" type="file" id="platImage" name="platImage" value="{{$plat->image}}">
                    <span href="" id="choose-file" class="p-20 choose-file">Choisir une image pour le plat</span>
                    <img src="" width="400" height="400" class="" id="imageToShow" alt="">
                  </div>
                  @if($errors->any())
                      <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
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
</div>
@endsection
