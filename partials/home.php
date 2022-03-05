<?php $this->layout('layout') ?>

      <section id="slider-principal">
          <div class="container">
              <div class="row">
                  <div class="col-md-12 my-2 my-lg-0">
                        <!-- <img src="assets/img/video.png" class="img-fluid mx-auto d-block" alt=""> -->
                        <!-- <video width="100%" height="100%" controls poster="assets/img/video-pre-1.webp">
                            <source src="assets/video/video.m4v" type="video/mp4">
                           Tu Navegador no admite Video en HTML 5
                          </video> -->
                          <div class="videoWrapper">
                            <iframe width="100%" src=" https://www.youtube.com/embed/LZRCU-2pgmQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
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
      <?=$this->insert('murales-xpresa')?>
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
                                            &q=Josefa+Ortiz+de+Domínguez+200+vallarta">
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
                                    &q=20.6117138,-105.2336114">
                    </iframe>
                            <style>
                                iframe {
                                    max-width: 100%;
                                    height: 480px;
                                }
                            </style>
                    </div>
                            <div class="ubicacion">
                                <h2 class="la-ciudad">Puerto Vallarta, Jalisco</h2>
                                <p class="texto-mapa">Si te imaginas en la playa, o viendo delfines, o en una fiesta prendida por la noche. La ciudad que te puede hacer enamorar entre sus distintas arenas será esta. Dirígete a 200 Josefa Ortiz de Domínguez Col. centro y ahí nos encontraremos.</p>
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
      <?=$this->insert('dinamica') ?>
    
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
                    <a href="cholula.php#acerca-autor">
                        <div class="tag-foto-a">
                          <img src="" alt="" class="sello-foto">
                        </div>
                    </a>
                    <p class="region-artista text-center">Yestseronack</p>
                </div>
                <div class="col-md-3 col-xs-12 col-sm-12">
                    <a href="vallarta.php#acerca-autor">
                        <div class="tag-foto-2-a">
                            <!-- <img src="" alt="" class="sello-foto"> -->
                        </div>
                    </a>
                    <p class="region-artista text-center">Liz Rashell</p>
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
                    <!-- <video width="100%" height="100%" controls poster="assets/img/video-pre-2.webp">
                        <source src="assets/video/02-Trailer_Xpresa_HOME.m4v" type="video/mp4">
                      Your browser does not support the video tag.
                      </video> -->
                      <div class="videoWrapper">
                            <iframe width="100%" src="https://www.youtube.com/embed/QQ4b05sNmg4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      </div>
                </div>

            </div>
        </div>
    </section>