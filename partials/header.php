<header sticky ng-controller="HeaderCtrl as nav">
  <div class="container nav-container">
    <section class="header-info">
      <div class="logo text-center">
        <div class="logo-image text-center">
          <a ui-sref="root.explore">
            <img src="http://placehold.it/44x44" alt="">
          </a>
        </div>
        <div class="language-switch"><a href="#"> Cambiar a inglés </a></div>
      </div>

      <div class="time-weather text-center">
        <div class="time">
          <p>Martes, 14 de junio</p>

        </div>
        <div class="weather">
          <span class="glyphicon glyphicon-cloud" aria-hidden="true"></span>
          <span>Caracas. 19 C</span>
        </div>
      </div>

      <div class="session-info text-center">
        <img src="http://placehold.it/30x30" class="img-circle" alt="">
        <p>Bienvenido(a),</p>
        <p>Visitante</p>
      </div>
    </section>

    <section class="header-nav" >
      <ul>
        <li class="active">Explore</li>
        <li>Vea</li>
        <li>Participe</li>
        <li>Mi Telesur</li>
      </ul>
    </section>

    <section class="header-extra text-center">
      <div class="live-signal" ng-click="toggleLiveSignal()">
        <p>Señal en vivo</p>
        <p>En el aire: Conexión Global</p>
      </div>

      <div class="menu-principal" ng-click="toggleMenu()">
        <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
        <span>Menú Principal</span>
      </div>

      <div class="social-search">
        <div class="socials-container">
          <img src="http://placehold.it/16x16" alt="">
          <img src="http://placehold.it/16x16" alt="">
          <img src="http://placehold.it/16x16" alt="">
          <img src="http://placehold.it/16x16" alt="">
          <img src="http://placehold.it/16x16" alt="">
        </div>
        <div class="search">
          <form role="form">
            <div class="form-group">
              <i class="glyphicon glyphicon-search"></i>
              <input type="email" class="form-control" id="email" placeholder="Buscar en teleSUR">
            </div>
          </form>
        </div>
      </div>
      <div class="clearfix"></div>
    </section>
  </div>

  <div class="subnav">
    <div class="container">

      <div class="breadcrumbs pull-left">
        <p>Explorando: Página Inicial > Notícias en destaque</p>
      </div>
      <div class="menu-principal pull-right" id="menu-trigger">
        <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
        <span>Menú Principal</span>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>


  <div class="container">
    <div id="menu-container" class="subnav-container">
      <??>
      <ng-include src="'views/partials/subfooter.html'"></ng-include>
      <ng-include src="'views/partials/footer.html'"></ng-include>
    </div>

    <div id="live-signal-container" class="subnav-container">
      <ng-include src="'views/partials/live-signal.html'"></ng-include>
    </div>
  </div>

</header>
