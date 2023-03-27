@extends('layouts.managerLayout')

@section('main')
<div class="container row m-3">
    <div class="col">
        <h1 class="text-success">Tous les restaurants</h1>
    </div>
    <div class="row">
        <div class="col-md-6 text-nowrap">
            <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label class="form-label">Show&nbsp;<select class="d-inline-block form-select form-select-sm">
                        <option value="10" selected="">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>&nbsp;</label></div>
        </div>
        <div class="col-md-6">
            <div class="text-md-end dataTables_filter" id="dataTable_filter"><label class="form-label"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
        </div>
    </div>
    <div class="table-responsive m-5">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nom</th>
              <th scope="col">Nombe d'étoiles</th>
              <th scope="col">Quartier</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($restaurants as $restaurant)
                <tr>
                    <td>{{$restaurant->id}}</td>
                    <td><a href="{{route('restaurants.show', ['restaurant'=>$restaurant->id])}}">
                        {{$restaurant->nom}}
                    </a></td>
                    <td>{{$restaurant->rate_stars}}</td>
                    <td>{{$restaurant->location}}</td>
                    <td>
                        <button onclick="remove()" class="btn btn-danger">Supprimer</button>
                    </td>
                </tr>

                <form hidden id="delete-form" action="{{route('restaurants.destroy', ['restaurant'=>$restaurant->id])}}" method="post">
                    @csrf
                    @method('delete')
                </form>
            @empty
                <div class="page-empty">
                    Aucun restaurant enregistré
                </div>
            @endforelse

          </tbody>
        </table>
      </div>
</div>
</div>
@endsection
