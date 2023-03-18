<div class="container-fluid resto-head">
    <div class="row">
        <img src="{{ Storage::url($restaurant->image->url) }}" alt="">
    </div>
      <div class="row restoinfos">
        <h1>{{$restaurant->name}}</h1>
        <p>{{$restaurant->slogan}}</p>
        <p><a class="btn btn-lg btn-success" href="#">Voir nos plats</a></p>
      </div>
    </div>
</div>
