<?php
use League\Plates\Engine;
require 'vendor/autoload.php';
$templates = new Engine('./partials');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;1,200&family=Road+Rage&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css"/>

    <title>Xpresa</title>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GY2D25YGPT"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-GY2D25YGPT');
    </script>
  </head>
  <body>
  <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fondo-ladrillo">
            <div class="container">
              <a class="navbar-brand" href="https://xpresa.iexe.edu.mx">
                  <img src="assets/img/logo_xpresa_blanco.png" alt="">
                </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                  <a class="nav-link" href="#murales-xpresa">Murales</a>
                </li>               
              <li class="nav-item">
                <a class="nav-link" href="#dinamica-xpresa">Din??mica</a>
              </li>
              <li class="nav-item active">
                  <a class="nav-link" href="cholula.php#galeria">Galer??a <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <a href="https://iexe.edu.mx" target="_blank"><button type="button" class="btn btn-primary el-azul d-none d-md-block">IEXE Universidad</button></a>
            </form>
          </div>
      </div>
        </nav>
      </header>
      <?=$this->section('content')?>
<section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6"><p class="copyright">?? 2022 IEXE. Todos los derechos reservados.</p></div>
                <div class="col-md-4 offset-md-4 legales col-sm-5 offset-sm-1"><a href="privacidad.php">Aviso de Privacidad</a></div>
            </div>
        </div>
    </section>

    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.3.2.min.js" integrity="sha256-Ap4KLoCf1rXb52q+i3p0k2vjBsmownyBTE1EqlRiMwA=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="assets/js/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
    <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        lightbox.option({
          'resizeDuration': 100,
          'wrapAround': true,
          'albumLabel': "Imagen %1 de %2",
          'fadeDuration': 400,
          'wrapAround': false
        })
    </script>
    <script>
        function enviarFormulario(parent, silent = false, strict = false){
                const forma = parent.closest('form');
                var elementos = forma.getElementsByTagName("input");
                var idForm = forma.getAttribute('id');
                var nombre = elementos.namedItem('nombre').value;
                var mail = encodeURIComponent(elementos.namedItem('email').value);
                var telefono = encodeURIComponent(elementos.namedItem('telefono').value);
                var programa = elementos.namedItem('programa').value;
                var origen = forma.dataset.origen;

                console.log(nombre);
                console.log(mail);
                console.log(telefono);
                console.log(programa);
                
                var url = "https://api.redisoft.dev/Leads/web";
                var xhttp = new XMLHttpRequest();
                xhttp.open("POST", url);
                xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhttp.onload = function(resp){
                    console.log(xhttp.response);
                    if(xhttp.response == 'duplicated'){
                      Swal.fire({
                        title: '??Duplicado!',
                        text: 'Tus datos ya se encuentran registrados en nuestro sistema',
                        icon: 'warning',
                        toast: true,
                        timer: 6000,
                        timerProgressBar: true,
                        confirmButtonColor: "green",
                        confirmButtonText: 'Entendido'
                      });
                      
                        console.log("est?? duplicado");
                    }else {
                      Swal.fire({
                        icon: 'success',
                        title: 'Datos registrados con ??xito',
                        toast: true,
                        position: 'bottom-end',
                        showConfirmButton: false,
                        timer: 6000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                          toast.addEventListener('mouseenter', Swal.stopTimer)
                          toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                      });
                      console.log("se guard??");
                    }

                }
                var data = "nombre="+ nombre +"&correo="+ mail +"&telefono="+ telefono +"&programa="+ programa +"&referencia="+ window.location.href +"#"+ idForm +"&charifaz="+ navigator.userAgent +"&adicional=origen:%20"+ origen;
                
                xhttp.send(data);
                return console.log("esperando mensaje")
            }
    </script>
        
    <script>
        $('.row.artists').slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
$('.row.de-murales').slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
    </script>
  </body>
</html>