<?php
/*
Template Name: Pagina Servicios
*/

get_header();
?>
<!-- CONTENIDO INICIO -->

<style>
    .menu-servicios a{
    color: #0071bc !important;
    }
    
@media(max-width: 991px){
    .menu-servicios a{
    color: #ffba3b !important;
    }
}
</style>

 <!--==========================
   Section  1
  ============================-->

  <section class="sub-internas">
    <div style="">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center text-white subpage-title">Servicios</h1>
          </div>
        </div>
      </div>
    </div>
  </section>



<!--==========================
   Section  3 PARA PC
  ============================-->
  <section class=" my-5" id="">

     <div class="col-lg-12 text-center my-5">
          <h2 class="section-subheading text-muted"><strong class="azul">Proteja</strong> sus Equipos y <br><strong class="negro">Maximice su</strong>  <strong class="naranja">Inversión</strong></h2>
        </div>

    <div class="container">
      <div class="row">

        <div class="col-md-4 mb-5">
              <div class="card border-0 sub-card-servicio pb-4" style="">
                         <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/images/icons-planes-proteccion.png" alt="" width="120px" height="auto">
                 <div class="card-body">
                      <h5 class="card-title text-center card-title-servicio">Planes de Protección de Equipos</h5>
                     <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                     quis nostrud exercitation ullamco. </p>
                </div>
              </div>
        </div>
        
        <div class="col-md-4 mb-5">
               <div class="card border-0 sub-card-servicio pb-4" style="">
                         <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/images/icons-diagnosticos.png" alt="" width="120px" height="auto">
                 <div class="card-body">
                      <h5 class="card-title text-center card-title-servicio">Diagnóstico de Computadoras</h5>
                     <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                     quis nostrud exercitation ullamco. </p>
                </div>
              </div>
        </div>
        
        <div class="col-md-4 mb-5">
               <div class="card border-0 sub-card-servicio pb-4" style="">
                         <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/images/icons-inversion.png" alt="" width="120px" height="auto">
                 <div class="card-body">
                      <h5 class="card-title text-center card-title-servicio">Maximización de Inversión de Equipos</h5>
                     <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                     quis nostrud exercitation ullamco. </p>
                </div>
              </div>
        </div>

      </div>

      <div class="row justify-content-center">

        <div class="col-md-4 mb-5">
              <div class="card border-0 sub-card-servicio pb-4" style="">
                         <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/images/icons-planes-proteccion.png" alt="" width="120px" height="auto">
                 <div class="card-body">
                      <h5 class="card-title text-center card-title-servicio">Análisis de Redes</h5>
                     <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                     quis nostrud exercitation ullamco. </p>
                </div>
              </div>
        </div>
        
        <div class="col-md-4 mb-5">
               <div class="card border-0 sub-card-servicio pb-4" style="">
                         <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/images/icons-diagnosticos.png" alt="" width="120px" height="auto">
                 <div class="card-body">
                      <h5 class="card-title text-center card-title-servicio">Diagnóstico de Computadoras</h5>
                     <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                     quis nostrud exercitation ullamco. </p>
                </div>
              </div>
        </div>

      </div>


      <div class="row justify-content-center">
        <div class="col-md-5">
          <h4 class="text-center">Realizamos diagnóstico <strong class="azul">GRATIS</strong></h4>
          <p class="text-center">¡Solicite su Cotización de servicio hoy!</p>
        </div>

        <div class="col-md-3 text-center">
           <a class="btn btn-info boton2" href="#">Solicitar Cotización</a>
        </div>
      </div>

  
</div>
</section>

<!--==========================
   Section  3
  ============================-->
<section class="page-section" id="services" style="border-top: 7px solid orange">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="pb-5">Algunos de Nuestros Clientes</h1>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-4 pt-md-2 pt-5">
          <span class="fa-stack fa-4x">
            <img src="<?php echo get_template_directory_uri(); ?>/images/icons-planes-proteccion.png" class="img-responsive" width="120" height="auto">
          </span>
        </div>
        <div class="col-md-4 pt-md-2 pt-5">
          <span class="fa-stack fa-4x">
            <img src="<?php echo get_template_directory_uri(); ?>/images/icons-diagnosticos.png" class="img-responsive" width="120" height="auto">
          </span>
        </div>
        <div class="col-md-4 pt-md-2 pt-5">
          <span class="fa-stack fa-4x">
            <img src="<?php echo get_template_directory_uri(); ?>/images/icons-inversion.png" class="img-responsive" width="120" height="auto">
          </span>
        </div>
    </div>
  </section>





<!-- CONTENIDO FIN -->
<?php 
get_footer();
?>