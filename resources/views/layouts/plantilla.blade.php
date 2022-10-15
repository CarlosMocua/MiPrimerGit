<!-- Stored in resources/views/layouts/app.blade.php -->
 
<html>
    <head>
    <title>Inicio - @yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="home">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="registrareditor">Registrar Editor</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="registrarlibro">Registrar Libro</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categoria
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="registrareditor">Registrar Editor</a>
          <a class="dropdown-item" href="registrarlibro">Registrar Libro</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="consultalibros">consulta Libro</a>
          <a class="dropdown-item" href="consultaeditores">consulta editores</a>
          <a class="dropdown-item" href="vistacinco">vista5</a>
          <a class="dropdown-item" href="vistaseis">vista6</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="vistaseis">Info</a>
      </li>
    </ul>
    <!-- Right Side Of Navbar -->
    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
  </div>
  <!-- encabezado -->
</nav>
<header class="bg-dark py-5">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-start">
                                <h1 class="display-5 fw-bolder text-white mb-2">Bienvenido</h1>
                                <p class="lead fw-normal text-white-50 mb-4">Conoce las noticias más llamativas del momento</p>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                    <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Iniciar</a>
                                    <a class="btn btn-outline-light btn-lg px-4" href="vistados">Conoce Más</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="http://c.files.bbci.co.uk/17D60/production/_111223679_coronathumbweb.jpg" alt="..." /></div>
                    </div>
                </div>
            </header>
            <!-- Seccion Novedades-->
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
                        <div class="col-lg-4 mb-5 mb-lg-0"><h2 class="fw-bolder mb-0">El mejor lugar para estar siempre enterado de lo más reciente.</h2></div>
                        <div class="col-lg-8">
                            <div class="row gx-5 row-cols-1 row-cols-md-2">
                                <div class="col mb-5 h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection"></i></div>
                                    <h2 class="h5">Coronavirus</h2>
                                    <p class="mb-0">Moderna ha demandado a su competidora Pfizer y a su socio alemán BioNTech por infracción de patentes en el desarrollo de la primera vacuna para la covid-19.</p>
                                </div>
                                <div class="col mb-5 h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-building"></i></div>
                                    <h2 class="h5">Qatar 2022</h2>
                                    <p class="mb-0">Recientemente se detectó vía WhatsApp un engaño que intenta hacer creer que Panini está ofreciendo la oportunidad de ganar el álbum y 400 figuritas.</p>
                                </div>
                                <div class="col mb-5 mb-md-0 h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                                    <h2 class="h5">Rusia-Ucrania</h2>
                                    <p class="mb-0">Ucrania asegura que ha desconectado el último reactor de la central de Zaporiyia por los bombardeos.</p>
                                </div>
                                <div class="col h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                                    <h2 class="h5">SpaceX</h2>
                                    <p class="mb-0">Ucrania asegura que ha desconectado el último reactor de la central de Zaporiyia por los bombardeos</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Seccion Comentario-->
            <div class="py-5 bg-light">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-10 col-xl-7">
                            <div class="text-center">
                                <div class="fs-4 mb-4 fst-italic">"La inmigración subsahariana en la retina de ABC, que acaba de publicar Editorial Académica Española, se remonta hasta los dramáticos altercados que protagonizó la diáspora en las vallas de Ceuta y Melilla en 2005. Este trabajo de investigación desarticula el discurso del diario ABC para poner de manifiesto su simbolismo profundo en el tratamiento de los inmigrantes"</div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <img class="rounded-circle me-3" src="https://iapp.org/media/headshots/0011a00000lbvTbAAI.png" alt="..." />
                                    <div class="fw-bold">
                                        Marisa Oroman
                                        <span class="fw-bold text-primary mx-1">/</span>
                                        La inmigración subsahariana en la retina de ABC
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Seccion Posts-->
            <section class="py-5">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-8 col-xl-6">
                            <div class="text-center">
                                <h2 class="fw-bolder">Actualidad</h2>
                                <p class="lead fw-normal text-muted mb-5">Estamos en todas partes informandote sobre los acontecimientos más recientes</p>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-5">
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="https://static.eldiario.es/clip/878ce8a8-f1c6-441c-98ba-cb1b3378be4e_16-9-discover-aspect-ratio_default_0.jpg" alt="..." />
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">Economia</div>
                                    <a class="text-decoration-none link-dark stretched-link" href="vistatres"><h5 class="card-title mb-3">La UE se abre a todo tipo de medidas</h5></a>
                                    <p class="card-text mb-0">Los ministros de Energía de la UE se reúnen este viernes con un menú de propuestas que incluyen topes a los precios.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="https://static.eldiario.es/clip/6f5ada1b-65cd-41c0-8b28-3d9e484d96e9_16-9-aspect-ratio_default_0.jpg" alt="..." />
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">Internacional</div>
                                    <a class="text-decoration-none link-dark stretched-link" href="vistacuatro"><h5 class="card-title mb-3">Alto consumo eléctrico del sector digital</h5></a>
                                    <p class="card-text mb-0">Varios países europeos llaman a restringir el gasto de los centros de datos, claves en la sociedad digital.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="https://www.prensalibre.com/wp-content/uploads/2022/09/dron1.jpg?quality=52&w=600&h=350&crop=1" alt="..." />
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">Nacional</div>
                                    <a class="text-decoration-none link-dark stretched-link" href="vistacinco"><h5 class="card-title mb-3">Ejército habla del avión no tripulado, de la cámara de Q7 millones</h5></a>
                                    <p class="card-text mb-0">La aeronave se ha usado en zonas de conflicto aprovechando las capacidades de la cámara que se le compró y el Ejército detalla por qué no en la lucha contra el crimen organizado.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer-->
        <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; Carlos Mocua</div></div>
                    <div class="col-auto">
                        <a class="link-light small" href="#!">Privacidad</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Terminos</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Contacto</a>
                    </div>
                </div>
            </div>
        </footer>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>