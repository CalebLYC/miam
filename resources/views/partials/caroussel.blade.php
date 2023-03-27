<div id="myCarousel" class="slide carousel" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Miam.</h1>
            <p>Avoir une vue globale des services de restauration</p>
            <p><a class="btn btn-lg btn-success" href="#populars">Commencer</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption">
            <h1>Restaurants.</h1>
            <p>Retrouve tes restaurants préférés.</p>
            <p><a class="btn btn-lg btn-warning" href="{{route('restaurants.index')}}">Voir</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Localisation.</h1>
            <p>Service de localisation intégré.</p>
            <p><a class="btn btn-lg btn-success" href="{{route('register')}}">Inscris-toi rapidement</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle carou-img" src="{{asset('img/bg/bg1.jpg')}}" alt="">
        <h2 class="fw-normal">Restaurants</h2>
        <p>De nombreux restaurants offrant les meilleurs services de restauration et de livraison</p>
        <p><a class="btn btn-success" href="{{route('restaurants.index')}}">View&raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle carou-img" src="{{asset('img/bg/bg2.jpg')}}" alt="">

        <h2 class="fw-normal">Plats</h2>
        <p>De délicieux plats cusinés par les meilleurs chefs. Allant de la boisson jusqu'au déssert.</p>
        <p><a class="btn btn-warning" href="#">Voir &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle carou-img" src="{{asset('img/bg/bg3.jpeg')}}" alt="">

        <h2 class="fw-normal">Commande</h2>
        <p>Services de livraison rapides et éfficaces.</p>
        <p><a class="btn btn-success" href="#">Voir &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->





  </div><!-- /.container -->
