<?php
require 'vendor/autoload.php';
$templates = new League\Plates\Engine('/home/xpresaiexeedu/public_html/partials');
echo $templates->render('header');
?>
<?php $this->start('murales-xpresa') ?>
<section id="murales-xpresa">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                  <img src="assets/img/Murales_Xpresa.png" alt="" class="mx-auto d-block img-fluid img-titulo">
              </div>
                
            </div> 
            <div class="row de-murales">
                  <div class="col-md-3">
                      
                      <a href="cholula.php"><div class="tag-mural-a">
                          
                      </div></a>
                      <p class="region-artista text-center">Cholula, Puebla</p>
                  </div>
                  <div class="col-md-3 ">
                      
                      <div class="tag-mural-2-a">
                          <img src="" alt="" class="sello-foto">
                      </div>
                      <p class="region-artista text-center">Puerto Vallarta, Jalisco</p>
                  </div>
                  <div class="col-md-3">
                      
                      <div class="tag-mural-3-a">
                          <img src="" alt="" class="sello-foto">
                      </div>
                      <p class="region-artista text-center">Córdoba, Veracruz</p>
                  </div>
                  <div class="col-md-3">
                      
                      <div class="tag-mural-4-a">
                          <img src="" alt="" class="sello-foto">
                      </div>
                      <p class="region-artista text-center">Coyoacán, CDMX</p>
                  </div>
              </div>
        </div>
    </section>
    <?php $this->stop() ?>