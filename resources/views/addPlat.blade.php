@extends('layouts.dashboardLayout')

@section('main')
    <div class="container-fluid m-5">
        <form action="{{route('plats.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('post')
            <fieldset class="">
                <legend class="text-success m-3">Ajouter un plat</legend>
                <div class="mb-3">
                    <label for="platName" class="form-label">Nom du plat</label>
                    <input type="text" class="form-control" id="platName" name="platName" placeholder="" value="{{old('platName')}}">
                  </div>
                  <div class="mb-3">
                    <label for="platPrice" class="form-label">Prix du plat</label>
                    <input type="number" class="form-control" id="platPrice" name="platPrice" placeholder="" value="{{old('platPrice')}}">
                  </div>
                  <div class="mb-3">
                    <label for="platDescription" class="form-label">Description</label>
                    <textarea class="form-control" id="platDescription" name="platDescription" rows="3">{{old('platDescription')}}</textarea>
                  </div>
                  <div class="mb-3 d-flex flex-column">
                    <input class="form-control d-none" type="file" id="platImage" name="platImage" value="{{old('platImage')}}">
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
                    <button class="btn btn-success" type="submit">Ajouter</button>
                  </div>
            </fieldset>
        </form>
    </div>
</div>
@endsection
