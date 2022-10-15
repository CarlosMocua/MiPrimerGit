
<html>
    <head>
    <title>Plantilla 5 - @yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    
    <script src="{{ asset('js/app.js') }}" defer></script>

    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Mis Noticias</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="vistauno">Lo más nuevo</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categoria
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="vistauno">vista1</a>
          <a class="dropdown-item" href="vistados">vista2</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="vistatres">vista3</a>
          <a class="dropdown-item" href="vistacuatro">vista4</a>
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
  </nav>
<!-- encabezado-->
<header class="masthead" style="background-image: url('https://www.prensalibre.com/wp-content/uploads/2022/09/dron1.jpg?resize=760,430')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="post-heading text-light">
                            <h1>Inquietud en Europa por el alto consumo eléctrico del sector digital ante la crisis del gas ruso</h1>
                            <h2 class="subheading">Carlos del Castillo</h2>
                            <span class="meta">
                                Posted by
                                <a href="#!">Actualizado el </a>
                                05/09/2022 13:58h
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- contenido-->
        <article class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <p>No se deja nada fuera de la discusión. La situación es tan crítica, las previsiones son tan oscuras, que la Unión Europea no descarta nada de antemano ante la crisis energética y los cortes del Kremlin como respuesta al apoyo de los 27 a Ucrania tras la invasión rusa. Si hace una semana fue la presidenta de la Comisión Europea, Ursula von der Leyen, quien anunció propuestas para intervenir y reformar el mercado eléctrico, ahora ha comenzado a circular un borrador de la presidencia checa rotatoria del Consejo de la UE en el que pregunta a los 27 Gobiernos, con vistas a la reunión del próximo viernes, sobre todas las medidas posibles para responder a la crítica situación en el continente.</p>
                        <p>
                         <p>
                         Los precios del gas han subido más del 30% después de la decisión de Rusia del viernes por la noche de mantener cerrado el gasoducto Nord Stream 1. La crisis energética también está poniendo al euro bajo una intensa presión, cayendo por debajo de los 99 centavos de dólar estadounidense a su nivel más bajo desde 2002.
                          <p> 
                            <p>
                            “Los altos precios de la energía y la volatilidad están alimentando el aumento de la inflación y tienen graves impactos en todas las empresas y consumidores, incluidos los más vulnerables, las víctimas de la pobreza energética y, cada vez más, los hogares de ingresos medios”, afirma el documento checo difundido por Politico: “Además, la capacidad de generación de electricidad en la UE ha sido significativamente menor de lo habitual, en particular debido al déficit de energía nuclear en algunos Estados miembros, la disminución de la generación de energía hidroeléctrica en Europa, los bajos niveles del Rin y otros ríos que afectan al transporte de carbón y las condiciones de viento desfavorables, entre otros factores. La escasez en la generación de energía a partir de estas fuentes de energía está impulsando la demanda de gas”.
                              <p>
                                <p>
                                “Está claro que la próxima temporada de calefacción pondrá a prueba la resiliencia del mercado energético de la UE”, sentencia el documento de la presidencia checa del Consejo de la UE, que hace un análisis sobre los problemas, también para los mercados de futuros que reducen la liquidez en el presente: “Las preocupaciones de liquidez para el comercio de electricidad suponen un nuevo desafío para el mercado interior de la UE, que ejerce presión sobre las posiciones de cobertura de los actores del mercado. Las fluctuaciones diarias de precios a veces han llevado a aumentos significativos en los requisitos de margen para los contratos de futuros. Esto hace que sea casi imposible para un número cada vez mayor de empresas mantener sus posiciones, lo que desencadena su retirada de los mercados de futuros. Los niveles más bajos de participación en los mercados de futuros reducen la liquidez en estos mercados y, a su vez, exacerban la volatilidad de los precios en un ciclo de retroalimentación negativa”.
                                  <p>
                                    <p>
                                    Así, el anfitrión de la reunión extraordinaria de ministros de Energía del próximo viernes, detalla una larga lista de “opciones consideradas”.
                                      <p>
                                        <p>
                                        En primer lugar, el Gobierno checo habla de “desvincular/limitar el impacto del precio del gas sobre el precio de la electricidad”, algo que ya está en la agenda de reforma del mercado de la Comisión Europea, si bien Bruselas lo plantea para principios de 2023. El documento añade: “Limitar temporalmente el precio del gas utilizado para la producción de electricidad; limitar temporalmente el precio del gas importado de jurisdicciones específicas [en alusión a Rusia, cosa que también defiende Bruselas y el G-7]; exclusión temporal de la producción de electricidad a partir de gas de la orden de mérito y fijación de precios en el mercado de la electricidad”.
                                          <p>
                            Informacion de
                            <a href="#">El Reporte</a>
                            &middot; Imagenes de
                            <a href="#">Gobierno de Rusia</a>
                        </p>
                    </div>
                </div>
            </div>
        </article>
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