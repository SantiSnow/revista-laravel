<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.png" />
    <title>noticiasCinformatica</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- iconos de google -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- link href="css/bootstrap.solar.min.css" rel="stylesheet" -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- JQuery -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

    <style>
        #mi-form-busqueda{
            margin: 15px;
            padding: 15px;
        }

        a{
            margin: 5px;
        }
        #banner{
            background-image: url("../images/banner.jpg");
        }

        #titulo1{
            background-color: white;
            border-radius: 5px;
        }

        #titulo2{
            background-color: white;
            border-radius: 5px;
        }
        .ImagenNoticia{
            width: 200px;
            border-radius: 20px;
            margin-bottom: 5px;
        }
        .titulo-noticia:hover{
            text-decoration: none;
        }
        .fotoDescript{
            border-radius: 8px;
            width: 60%;
        }
    </style>

</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item"> <a class="nav-link" href="{{ url('/') }}">Home</a> </li>
            <li class="nav-item"> <a class="nav-link" href="{{ url('/articulos/todos') }}">Artículos</a> </li>
            <li class="nav-item"> <a class="nav-link" href="{{ url('/categorias') }}">Categorias </a> </li>
            <li class="nav-item"> <a class="nav-link" href="{{ url('/sobreNosotros') }}">Sobre Nosotros</a> </li>
        </ul>
        
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="btn btn-outline-primary" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                            <a class="btn btn-outline-primary" href="{{ route('register') }}">{{ __('Registro') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>

        @yield('navbar')
        <form class="form-inline my-2 my-lg-0" id="mi-form-busqueda" method="post" action=" {{ url('/busqueda') }} ">
            @csrf
            <input name="buscar" class="form-control mr-sm-2" type="search" placeholder="Busqueda..." aria-label="Search" required />
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>
    </div>
</nav>

<header>
    <div class="jumbotron" id="banner">
        <div class="container">
          <div class="row">
            <div id="titulos" class="col-12">
              <h1 class="text-center" id="titulo1"  style="color: black;">Bienvenido a Noticias CInformatica</h1>
              <div id="contenedorRedondo">
              <p class="text-center" id="titulo2"  style="color: black;"><strong>Aquí puede encontrar las últimas noticias relacionadas con tecnología, programación, informática, reviews y otros temas de interes general, actualizadas día a día y con información completamente confiable y chequeada.</strong></p>
              </div>
              <p>&nbsp;</p>
              <p class="text-center"><a class="btn btn-primary btn-lg" href="{{ url('/articulos') }}" role="button">Ver todas las noticias</a> </p>
            </div>
          </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-2"></div>
            <div class="col-2"></div>
            <div class="col-2"></div>
            <div class="col-2"></div>
            <div class="col-2">
                <p id="modoDia" class="btn btn-primary"><span class="material-icons">brightness_5</span></p>
                <p id="modoNoc" class="btn btn-primary"><span class="material-icons">brightness_2</span></p>
            </div>
        </div>
    </div>
</header>

<div class="container-fluid">
    @yield('contenido')

    
    
</div>

<br />
<br />
<hr>
<br />

<div class="container">
      <div class="row">
        <div class="col-12 col-md-8 mx-auto">
          <div class="jumbotron" style="background-color: #99ccff;">
            <div class="row text-center">
              <div class="text-center col-12">
                <h4 class="negro">Envianos tu opinion o consulta</h4>
                <p  class="negro">Recorda que leeremos tu opinión, y la valoramos. Intenta ser respetuoso y enviarnos una crítica siempre constructiva y educada. Te agradecemos por el interés y por tu tiempo.</p>
              </div>
              <div class="text-center col-12">
                <form id="feedbackForm" class="text-center" method="post" action="mailEnviado.php">
                  <div class="form-group">
                    <label for="name" class="negro">Nombre</label>
                    <input type="text" class="form-control" id="name" name="nombre" placeholder="Nombre completo" aria-describedby="nameHelp">
                    <span id="nameHelp" class="form-text text-muted" style="display: none;">Ingresa tu nombre.</span>
                  </div>
                  <div class="form-group">
                    <label for="email" class="negro">E-Mail</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" aria-describedby="emailHelp">
                    <span id="emailHelp" class="form-text text-muted" style="display: none;">Direccion de correo.</span>
                  </div>
                  <div class="form-group">
                    <label for="message" class="negro">Mensaje</label>
                    <textarea rows="10" cols="100" class="form-control" id="mensaje" name="mensaje" placeholder="Duda, consulta o peticion" aria-describedby="messageHelp"></textarea>
                    <span id="messageHelp" class="form-text text-muted" style="display: none;">Escribi tu mensaje.</span>
                  </div>
                    
                    <!--button class="btn btn-primary" type="submit">¡Enviar!</button>
                    <br />
                    <br />
                    <br / -->
                    <a href="mailto:noticiascinformatica@gmail.com?Subject=Contacto%20Desde%20El%20Sitio%20Web-Consulta" class="btn btn-primary btn-lg">¡Enviar!</a>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>





    <!-- footer del sitio -->
    <div class="container well">
    @yield('footer')
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-7">
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6">
                        <div>
                            <ul class="list-unstyled">
                                <li class="fondoBlancoRed"> <a href="https://www.facebook.com/CompuItuzaingo/?ref=bookmarks"> 
                                <img alt="facebook" src="../images/facebook.png" width="40px" height="40px" class="iconosOscuros" style="border-radius: 12px;"> </a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4  col-xs-6">
                        <div>
                            <ul class="list-unstyled">
                                <li class="fondoBlancoRed"> <a href="mailto:noticiascinformatica@gmail.com?Subject=Contacto%20Desde%20El%20Sitio%20Web%20Consulta"> 
                                <img alt="gmail" src="../images/gmail.png" width="40px" height="35px" class="iconosOscuros" style="border-radius: 8px;"></a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6">
                        <div class="fondoBlancoRed">
                            <ul class="list-unstyled">
                                <li> <a href="https://www.instagram.com/compuituzaingo/">
                                <img alt="instagram" src="../images/instagram.png" width="40px" height="40px" class="iconosOscuros" style="border-radius: 12px;"></a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-5"> 
                <address>
                <strong>Creado por CompuItuzaingo</strong><br />
                CISoftware - Creación de sistemas web.<br />
                </address>
                <strong>Diseño de imagenes e ilustraciones:</strong><br/>
                Imagenes Diseñadas por Freepik & Bubook
                <br />
                <a href="https://www.freepik.es/">Freepik.es</a>
                <br />
                <a href="https://www.instagram.com/bubook11/">Bubook</a>
                <br /><br />
                <address>
                <strong>E-Mail</strong><br />
                <a href="mailto:noticiascinformatica@gmail.com?Subject=Contacto%20Desde%20El%20Sitio%20Web%20Consulta">noticiascinformatica@gmail.com</a>
                </address>
                <strong>Declaración de privacidad:</strong>
                <br /><a href="{{ url('/sobreNosotros') }}">Leeme.</a>
            </div>
        </div>
    </div>



<!-- modo nocturno script -->
<script src="../modoNoc.js"></script>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>