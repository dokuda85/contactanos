<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/contactos.css')}}">
    <link rel = "preconnect" href = "https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Hello, world!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
        <a class="navbar-brand" href="#"><img src="{{asset('img/logo1.png')}}" class="logo-brand" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <ion-icon name="menu-outline"></ion-icon>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#" id="home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" id="productos">Productos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" id="exporta">Exporta con Nosotros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" id="nosotros">Sobre Nosotros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" id="contactanos">Contactanos</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Inicar Sesión</button>
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Registrarse</button>
          </form>
        </div>
      </div>
    </nav>
    <section>
    <div class="container">
  <div class="row">
    <div class="col">
          <img src="{{asset('img/img2.png')}}" class="img-thumbnail" alt="...">
    </div>
    <div class="col">
    <div class="col col-lg-2">
          <div id="after_submit"></div>
            <div class="formulario">      
              <h1>Contactanos</h1>
                  <form action="{{route('store')}}" method="post">       
                        @csrf
                        <p>
                          <label for="nombre" class="colocar_nombre">Nombre
                            <span class="obligatorio">*</span>
                          </label>
                            <input type="text" name="nombre" id="nombre" required="obligatorio" placeholder="Escribe tu nombre">
                        </p>
                      
                        <p>
                          <label for="email" class="colocar_email">Email
                            <span class="obligatorio">*</span>
                          </label>
                            <input type="email" name="email" id="email" required="obligatorio" placeholder="Escribe tu Email">
                        </p>
                    
                        <p>
                          <label for="telefone" class="colocar_telefono">Teléfono
                          </label>
                            <input type="tel" name="telefono" id="telefono" placeholder="Escribe tu teléfono">
                        </p>    
                        <p>
                          <label for="mensaje" class="colocar_mensaje">Mensaje
                            <span class="obligatorio">*</span>
                          </label>                     
                        <textarea name="mensaje" class="mensaje" id="mensaje" required="obligatorio" placeholder="Deja aquí tu comentario..."></textarea> 
                        </p>                    
                        <button type="submit" name="enviar_formulario" id="enviar"><p>Enviar</p></button>
                        <p class="aviso">
                          <span class="obligatorio"> * </span>los campos son obligatorios.</p>                             
                  </form>
            </div>  
          </div>
    </div>
  </div>
    </section>
    <section id="footer" class="bg-dark">
      <div class="container">
        <img src="{{asset('img/logo1.png')}}" alt="logo" class="logo-brand">
        <ul class="list-inline">
          <li class="list-inline-item footer-menu"><a href="#">Home</a></li>
          <li class="list-inline-item footer-menu"><a href="#">Portfolio</a></li>
          <li class="list-inline-item footer-menu"><a href="#">About us</a></li>
          <li class="list-inline-item footer-menu"><a href="#">Pricing</a></li>
          <li class="list-inline-item footer-menu"><a href="#">Contact</a></li>
        </ul>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
          <li class="list-inline-item"><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
          <li class="list-inline-item"><a href="#"><ion-icon name="logo-youtube"></ion-icon></a></li>
          <li class="list-inline-item"><a href="#"><ion-icon name="logo-dribbble"></ion-icon></a></li>
          <li class="list-inline-item"><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
        </ul>
        <small>©2019 All Rights reserved Created by Ever C. F.| Misael M. G.|Rodrigo M. A.</small>
      </div>
    </section>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>