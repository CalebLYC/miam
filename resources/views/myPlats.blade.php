@extends('layouts.dashboardLayout')

@section('main')
    <div class="container row m-3">
        <div class="col">
            <h1 class="text-success">Les plats de votre restaurant</h1>
        </div>
    </div>

    <div class="container plats">


        <div class="plats-list">

            @forelse ($plats as $plat)
                <a href="{{route('plats.show', ['plat'=>$plat->id])}}">
                    <div class=" col-sm-5 col-lg-3 mb-4 plat">
                        <div class="card-image">
                            <img src="{{Storage::url($plat->image->url)}}" width="370" height="200" alt="Plat" srcset=""/>
                        </div>
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">{{$plat->nom}}</h5>
                            <p class="card-text">{{$plat->description}}</p>
                            <p class="card-text"><small class="text-muted">{{$plat->price}} frs</small></p>
                            <div class="row">
                                <a href="{{route('plats.edit', ['plat'=>$plat->id])}}" class="btn btn-success m-3 col-5">Modifier</a>
                                <button class="btn btn-danger p-0 col-5" onclick="remove()">Supprimer</button>
                            </div>
                          </div>
                        </div>
                    </div>
                </a>

                <form id="delete-form" action="{{route('plats.destroy', ['plat'=>$plat->id])}}" method="post" hidden>
                    @csrf
                    @method('delete')
                </form>
                @empty
                    <div class="page-empty">
                        Aucun plat disponible pour votre restaurant
                        <a href="{{route('plats.create')}}">Ajouter un plat</a>
                    </div>
                @endforelse


        </div>
        </div>
    </div>

@endsection
