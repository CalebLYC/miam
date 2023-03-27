<!-- Button trigger modal -->
<button type="button" class="btn btn-success m-2" data-bs-toggle="modal" data-bs-target="{{'#cmd'.$plat->id}}">
    Commander
  </button>

  <!-- Modal -->
  <div class="modal fade" id="{{'cmd'.$plat->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5 text-warning" id="staticBackdropLabel">Commander {{$plat->nom}}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="" method="post">
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-success">Commander</button>
            </div>
        </form>
      </div>
    </div>
  </div>
