<div class="container plats">
    <div class="container m-3">
        <div class="row">
          <div class="col-8">
            <h2>Le menu du jour</h2>
          </div>
        </div>
    </div>

    <div class="plats-list" id="plats">

        @forelse ($plats as $plat)


          <!-- Button trigger modal -->
    <div class="col-sm-5 col-lg-3 mb-4 plat">
        <div data-bs-toggle="modal" data-bs-target="{{"#id".$plat->id}}">
            <div class="card-image">
                <img src="{{Storage::url($plat->image->url)}}" width="370" height="200" alt="Plat" srcset=""/>
            </div>
            <div class="card plat-card" >
              <div class="card-body">
                <h5 class="card-title">{{$plat->nom}}</h5>
                <p class="card-text">{{$plat->description}}</p>
                <p class="card-text"><small class="text-muted">{{$plat->price}} frs</small></p>
              </div>
            </div>
        </div>
        @include('partials.commandPlat')
    </div>

  <!-- Modal -->
  <div class="modal fade" id="{{"id".$plat->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title text-warning fs-5" id="staticBackdropLabel">{{$plat->nom}}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <h4 class="text-success text-center m-2">{{$plat->price}} frs</h4>
        <div class="modal-body">
          {{$plat->description}}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
          @include('partials.commandPlat')
        </div>
      </div>
    </div>
  </div>

        @empty
            <div class="page-empty">
                Aucun plat disponible pour ce restaurant
            </div>
        @endforelse

    </div>
</div>
