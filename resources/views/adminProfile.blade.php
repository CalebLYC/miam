@extends('layouts.managerLayout')
@section('main')
<div class="container-fluid">
    <h3 class="text-dark mb-4">Profile</h3>
    <div class="row mb-3">
        <div class="col-lg-4">
            <div class="card mb-3">
                <div class="card-body text-center shadow"><img class="rounded-circle mb-3 mt-4" src="{{asset('img/bg/miam.png')}}" width="160" height="160">
                    <div class="mb-3"><button class="btn btn-success btn-sm" type="button">Changer la Photo</button></div>
                </div>
            </div>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="text-success fw-bold m-0">Historique</h6>
                </div>
                <div class="card-body">

                </div>
            </div>
        </div>
            <div class="row">
                <div class="col">
                    <div class="card shadow mb-3">
                        <div class="card-header py-3">
                            <p class="text-success m-0 fw-bold">Données de l'administrateur</p>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                @csrf
                                @method('put')
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="username"><strong>Nom du restaurant</strong></label><input class="form-control" type="text" id="username" value="Miam" name="username"></div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="email"><strong>Addresse Email</strong></label><input class="form-control" type="email" id="email" value="miam@gmail.com" name="email"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="first_name"><strong>Localité</strong></label><input class="form-control" type="text" id="localite" value="Lomé" name="localite"></div>
                                    </div>
                                </div>
                                <div class="mb-3"><button class="btn btn-success btn-sm" type="submit">Enregistrer les paramètres</button></div>
                            </form>
                        </div>
                    </div>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-success m-0 fw-bold">paramètres de contacts</p>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                @csrf
                                @method('put')
                                <div class="mb-3"><label class="form-label" for="address"><strong>Addresse</strong></label><input class="form-control" type="text" id="address" value="Sunset Blvd, 38" name="address"></div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="city"><strong>City</strong></label><input class="form-control" type="text" id="city" value="Lomé" name="city"></div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="country"><strong>Country</strong></label><input class="form-control" type="text" id="country" value="Togo" name="country"></div>
                                    </div>
                                </div>
                                <div class="mb-3"><button class="btn btn-success btn-sm" type="submit">Enregistrer&nbsp;les paramètres</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
