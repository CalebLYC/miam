
<div id="wrapper">
    <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-success p-0">
        <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                <div class="sidebar-brand-text mx-3"><span>Miam</span></div>
            </a>
            <hr class="sidebar-divider my-0">
            <ul class="navbar-nav text-light" id="accordionSidebar">
                <li class="nav-item"><a class="nav-link active" href="{{route('resto.dashboard')}}"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('resto.profile')}}"><i class="fas fa-user"></i><span>Profile</span></a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('myPlats')}}"><i class="fas fa-table"></i><span>Mes plats</span></a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('plats.create')}}"><i class="fas fa-plus"></i><span>Ajouter un nouveau plat</span></a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('restaurants.edit', ['restaurant'=>$restaurant->id])}}"><i class="fas fa-pen"></i><span>Modifier les informations de mon restaurant</span></a></li>
                <li class="nav-item"><a class="nav-link" href=""><i class="fas fa-table"></i><span>Commandes en attente</span></a></li>
                <a href="{{route('resto.logout')}}" class="btn btn-danger">Déconnexion</a>
            </ul>
            <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
        </div>
    </nav>
</div>
@include('layouts.partials.dashHeader')
