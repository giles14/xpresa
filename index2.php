<?php
require 'vendor/autoload.php';
$templates = new League\Plates\Engine('/home/xpresaiexeedu/public_html/partials');
echo $templates->render('header');
?>
    <header>
        <!-- <nav class="navbar navbar-expand-lg navbar-light fondo-ladrillo">
            <div class="container">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" href="#">Proyecto <span class="sr-only"></span></a>
                    <a class="nav-link" href="#">Dinámica</a>
                    <a class="nav-link" href="#">Artistas</a>
                </div>
                </div>
                <button type="button" class="btn btn-primary el-azul">IEXE Universidad</button>
            </div>
          </nav> -->
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
                  <a class="nav-link" href="#dinamica-xpresa">Dinámica</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#proyecto-xpresa">Proyecto <span class="sr-only">(current)</span></a>
                  </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
                <button type="button" class="btn btn-primary el-azul d-none d-md-block">IEXE Universidad</button>
              </form>
            </div>
        </div>
          </nav>
      </header>
      <section id="slider-principal">
          <div class="container">
              <div class="row">
                  <div class="col-md-12 my-2 my-lg-0">
                        <!-- <img src="assets/img/video.png" class="img-fluid mx-auto d-block" alt=""> -->
                        <video width="100%" height="100%" controls poster="assets/img/video-pre-1.webp">
                            <source src="assets/video/video.m4v" type="video/mp4">
                           Tu Navegador no admite Video en HTML 5
                          </video>
                  </div>
              </div>
          </div>
      </section>
      <section id="proyecto-xpresa">
        <div class="container">
            <div class="row">
                <img style="visibility: hidden;" src="assets/img/xpresa.png" class="mx-auto d-block el-titulo img-fluid" alt="">
            </div>
            <div class="row">
                <div class="col-md-8 offset-md-2">
                      <p class="contenido">Xpresa, es un movimiento en donde pintamos de colores nuestro mapa público, tomando espacios urbanos para resignificar su propósito. Visitamos cuatro ciudades
                          del país identificando problemáticas no resueltas, para brindar soluciones por medio de las políticas públicas y concientizar a través del arte; colaboramos con cuatro
                          referentes mundiales del arte público para contribuir en la sociedad transmitiendo un mensaje a través de murales.
                      </p>
                </div>
            </div>
        </div>
    </section>
      <!-- <section id="murales-xpresa">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                    <img src="assets/img/Murales_Xpresa.png" alt="" class="mx-auto d-block img-fluid img-titulo">
                </div>
                  
              </div> 
              <div class="row de-murales">
                    <div class="col-md-3">
                        
                        <a href="cholula.html"><div class="tag-mural">
                            
                        </div></a>
                        <p class="region-artista text-center">Cholula, Puebla</p>
                    </div>
                    <div class="col-md-3 ">
                        
                        <div class="tag-mural-2">
                            <img src="" alt="" class="sello-foto">
                        </div>
                        <p class="region-artista text-center">Puerto Vallarta, Jalisco</p>
                    </div>
                    <div class="col-md-3">
                        
                        <div class="tag-mural-3">
                            <img src="" alt="" class="sello-foto">
                        </div>
                        <p class="region-artista text-center">Córdoba, Veracruz</p>
                    </div>
                    <div class="col-md-3">
                        
                        <div class="tag-mural-4">
                            <img src="" alt="" class="sello-foto">
                        </div>
                        <p class="region-artista text-center">Coyoacán, CDMX</p>
                    </div>
                </div>
          </div>
      </section> -->
      <? $templates->insert('murales-xpresa')?>
      <section id="ubicacion-murales">
        <div class="container">
            <div id="carouselContent" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-12">
                                <img id="img-ubicacion-murales" src="assets/img/Ubicacion_murales.png" alt="" class="mx-auto d-block img-fluid img-titulo">
                            </div>
                          </div>
                          <div id="in-map" class="row">
                              
                            <div class="col-md-8 offset-md-2">
                                <div class="mapas">
                                    <div class="mapa"><iframe
                                        width="720"
                                        height="481"
                                        style="border:0"
                                        loading="lazy"
                                        allowfullscreen
                                        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyC6KwiDd1Uxuo9l7clbobNoOftFqPqHsAM
                                            &q=19.046784,-98.254282">
                            </iframe>
                            <style>
                                iframe {
                                    max-width: 100%;
                                    height: 480px;
                                }
                            </style></div>
                                    <div class="ubicacion">
                                        <h2 class="la-ciudad">PUEBLA - CHOLULA</h2>
                                        <p class="texto-mapa">Te encontrarás entre el mole y los camotes. La ciudad que se pinta a través del barroco y sus avenidas, en una cuna entre el Popocatepetl y el Iztaccíhuatl se ubica este afamado lugar. Dirígete a ​​Antiguo Camino Real a Cholula 4802, Puebla, Pue. y ahí nos encontrarás.</p>
                                    </div>
                                </div>
                            </div>
                            
                            </div>
                    </div>
                    <div class="carousel-item">
                        
                    <div class="row">
                    <div class="col-md-12">
                        <img id="img-ubicacion-murales" src="assets/img/Ubicacion_murales.png" alt="" class="mx-auto d-block img-fluid img-titulo">
                    </div>
                  </div>
                  <div id="in-map" class="row">
                      
                    <div class="col-md-8 offset-md-2">
                        <div class="mapas">
                            <div class="mapa"><iframe
                                width="720"
                                height="481"
                                style="border:0"
                                loading="lazy"
                                allowfullscreen
                                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyC6KwiDd1Uxuo9l7clbobNoOftFqPqHsAM
                                    &q=jalisco">
                    </iframe>
                            <style>
                                iframe {
                                    max-width: 100%;
                                    height: 480px;
                                }
                            </style>
                    </div>
                            <div class="ubicacion">
                                <h2 class="la-ciudad">PRÓXIMAMENTE</h2>
                                <p class="texto-mapa">Si te imaginas en la playa, o viendo delfines, o en una fiesta prendida por la noche. La ciudad que te puede hacer enamorar entre sus distintas arenas se encuentra aquí.</p>
                            </div>
                        </div>
                    </div>
                    
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselContent" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselContent" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>
        </div>
        </div>
        <style>
            .carousel-item.active,
    .carousel-item-next,
    .carousel-item-prev{
        display:block;
    }
        </style>

      </section>
      <section id="dinamica-xpresa">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="assets/img/Dinamica_Xpresa.png" alt="" class="mx-auto d-block img-fluid img-titulo">
                            <img src="assets/img/spray-azul.png" class="spray-azul" alt="">
                        </div>
                    </div>
                    <img src="" alt="" class="mx-auto d-block">
                    <p class="texto">
                      1. Ingresa a <a href="https://xpresa.iexe.edu.mx">xpresa.iexe.edu.mx</a>  para acceder a los mapas virtuales que te mostrarán los marcadores de las ciudades donde se encontrarán los murales. 
                    </p>
                    <p class="texto">
                      2. Ubica los murales, visítalos y tómate una foto o vídeo donde aparezcas tú. 
                    </p>
                    <p class="texto">3. Comparte la foto o vídeo en tus redes sociales usando los hashtahgs #XPRESAIEXE e #IEXEUNIVERSIDAD </p>
                    <p class="texto">4. Regístrate en <a href="https://xpresa.iexe.edu.mx">xpresa.iexe.edu.mx</a>  y sigue nuestras redes sociales para ganar una playera conmemorativa y participar por una beca para estudiar en IEXE Universidad. Tienes del 2 al 27 de febrero para participar. </p>
                    <p class="texto">Los ganadores serán anunciados el día 28 de febrero, a través de <a href="https://xpresa.iexe.edu.mx">xpresa.iexe.edu.mx</a>  y nuestras redes sociales.</p>
                    <div class="redes-sociales">
                        <div class="img-social"><a target="_blank" href="https://www.facebook.com/IEXE.Universidad"><img src="assets/img/Icon_FB-XpresaPurple.png" alt=""></a></div>
                        <div class="img-social"><a target="_blank" href="https://www.instagram.com/iexe_universidad"><img src="assets/img/social-ig.png" alt=""></a></div>
                        <div class="img-social"><a target="_blank" href="https://twitter.com/IEXE_Uni"><img src="assets/img/IconTW-XpresaPurple.png" alt=""></a></div>
                        <div class="img-social"><a target="_blank" href="https://www.youtube.com/channel/UCz2KnWwPWPbQ4GTYuqqAGqQ"><img src="assets/img/IconYT-XpresaPurple.png" alt=""></a></div>
                        <div class="img-social"><a target="_blank" href="https://www.tiktok.com/@iexeuniversidad"><img src="assets/img/social-tiktok.png" alt=""></a></div>
                        <div class="img-social"><a target="_blank" href="https://open.spotify.com/show/0UL42ohKAgBn2Sdse3VV5J?si=e58acc608b1b43b7"><img src="assets/img/social-spotify.png" alt=""></a></div>
                    </div>
                </div>
                <div class="col-md-4 offset-md-1">
                  <div class="formulario">
                      <div class="cabecera">
                          <h1 class="interes"> Completa el registro y participa</h1>
                      </div>
                      <div class="cuerpo">
                          <form id="interes" method="POST" action="">
                              <div class="form-group">
                                <label for="nombre">Nombre completo*</label>
                                <input type="text" placeholder="Ingresa aquí tu nombre" class="form-control" name="nombre" id="nombre" >
                              </div>
                              <div class="form-group">
                                  <label for="correo">Correo electrónico*</label>
                                  <input type="email" placeholder="Ingresa aquí tu correo electrónico" name="email" class="form-control" id="exampleInputEmail1">
                              </div>
                              <div class="form-group">
                                  <label for="telefono">Teléfono móvil*</label>
                                  <input type="tel" placeholder="Ingresa aquí tu teléfono móvil" class="form-control" name="telefono" id="telefono">
                              </div>
                              <div class="form-group">
                                  <p class="text-formulario">¿Eres Alumno de IEXE?</p>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">Si</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">No</label>
                              </div>
                              <div class="col-12 text-center">
                              <input id="hiddenPrograma" name="hiddenPrograma" type="hidden" value="SINA">
                                  <button type="button" class="btn btn-primario mt-3 boton-registro">ENVIAR REGISTRO</button>
                              </div>
                            </form>
                      </div>
  
                  </div>
                </div>
            </div>
        </div>
    </section>
    
      <!-- <section id="artistas">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <img src="assets/img/Artistas_Xpresa.png" alt="" class="mx-auto d-block img-fluid img-titulo">
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-3">
                       <p class="nombre-artista text-center">Yestseronack</p> 
                      <div class="tag-foto">
                            <img src="" alt="" class="sello-foto">
                      </div>
                      <p class="region-artista text-center">Yestseronack</p>
                  </div>
                  <div class="col-md-3 ">
                       <p class="nombre-artista text-center">Yestseronack</p>
                      <div class="tag-foto-2">
                            <img src="" alt="" class="sello-foto">
                      </div>
                      <p class="region-artista text-center"></p>
                  </div>
                  <div class="col-md-3">
                      <p class="nombre-artista text-center">Yestseronack</p>
                      <div class="tag-foto-3">
                            <img src="" alt="" class="sello-foto">
                      </div>
                      <p class="region-artista text-center"></p>
                  </div>
                  <div class="col-md-3">
                      <p class="nombre-artista text-center">Yestseronack</p>
                      <div class="tag-foto-4">
                            <img src="" alt="" class="sello-foto">
                      </div>
                      <p class="region-artista text-center"></p>
                  </div>
              </div>
          </div>
      </section> -->
      <section id="artistas-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img src="assets/img/Artistas_Xpresa.png" alt="" class="mx-auto d-block img-fluid img-titulo">
                </div>
            </div>
            <div class="row artists">
                <div class="col-md-3 col-xs-12 col-sm-12">
                    <!-- <p class="nombre-artista text-center">Yestseronack</p> -->
                    <a href="cholula.php#acerca-autor"><div class="tag-foto-a">
                          <img src="" alt="" class="sello-foto">
                    </div></a>
                    <p class="region-artista text-center">Yestseronack</p>
                </div>
                <div class="col-md-3 col-xs-12 col-sm-12">
                    <!-- <p class="nombre-artista text-center">Yestseronack</p> -->
                    <div class="tag-foto-2-a">
                          <img src="" alt="" class="sello-foto">
                    </div>
                    <p class="region-artista text-center"></p>
                </div>
                <div class="col-md-3 col-xs-12 col-sm-12">
                    <!-- <p class="nombre-artista text-center">Yestseronack</p> -->
                    <div class="tag-foto-3-a">
                          <img src="" alt="" class="sello-foto">
                    </div>
                    <p class="region-artista text-center"></p>
                </div>
                <div class="col-md-3 col-xs-12 col-sm-12">
                    <!-- <p class="nombre-artista text-center">Yestseronack</p> -->
                    <div class="tag-foto-4-a">
                          <img src="" alt="" class="sello-foto">
                    </div>
                    <p class="region-artista text-center"></p>
                </div>
                
            </div>
        </div>
    </section>
      
      
    <section id="detras-de-camaras">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img src="assets/img/capitulo1_titulo_xpresa.webp" alt="" class="img-fluid mx-auto d-block el-titulo">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <video width="100%" height="100%" controls poster="assets/img/video-pre-2.webp">
                        <source src="assets/video/02-Trailer_Xpresa_HOME.m4v" type="video/mp4">
                      Your browser does not support the video tag.
                      </video>

                </div>

            </div>
        </div>
    </section>
    <!-- <section id="capitulos-miniserie">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img src="assets/img/Capitulos_miniserie.png" alt="" class="img-fluid mx-auto d-block el-titulo">
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                        <img src="assets/img/detras_de_camaras.png" alt="" class="img-fluid">
                        <p class="capitulo-miniserie text-center">Cholula, Puebla</p>
                </div>
                <div class="col-md-5 offset-md-2">
                    <img src="assets/img/detras_de_camaras.png" alt="" class="img-fluid">
                    <p class="capitulo-miniserie text-center">Puerto Vallarta, Jalisco</p>
                </div>
            </div>
        </div>
    </section> -->
<?php echo $templates->render('footer'); ?>