<?php
/*
Template Name: Pagina Sobre Nosotros
*/

get_header();
?>
<!-- CONTENIDO INICIO -->
<style>
    .menu-nosotros a{
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
            <h1 class="text-center text-white subpage-title">Sobre Nosotros</h1>
          </div>
        </div>
      </div>
    </div>
  </section>



<!--==========================
   Section  2
  ============================-->

<section>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 my-5">
          <h2 class="section-subheading text-muted mt-5"><strong class="azul">Nuestro objetivo</strong> es mantener al día los <strong class="negro">sistemas de información</strong> de cada uno de  <strong class="naranja">nuestros clientes.</strong></h2>
          <p>  Econnect busca combinar servicios de computadoras (IT) e impresores multifuncionales y brindar excelentes planes de mantenimiento que provean a  nuestros clientes suscritos y garantiza las visitas mensuales de prevención. </p>
      </div>
      <div class="col-md-6">
        <img src="<?php echo get_template_directory_uri(); ?>/images/sobre-nosotros.jpg" class="img-fluid">
      </div>
    </div>
  </div>
</section>


<!--==========================
   Section  3 PARA MOBIL
  ============================-->

<section class="mb-5 d-block d-lg-none" style="border-top: 7px solid orange">

    <div class="container-fluid mt-5">
      <div class="row">

        <div class="col-sm-6 pt-3">
              <div class="card border-0 sub-card-sobre-nosotros" style="">
                         <img class="card-img-top card-nostros-sub" src="<?php echo get_template_directory_uri(); ?>/images/filosofia.png" alt="" width="120px" height="auto">
                 <div class="card-body">
                      <h5 class="card-title text-center card-title-servicio">Filosofía</h5>
                     <p class="card-text text-alto">  Cumplir con todas las necesidades de nuestros clientes desde resolver problemas hasta diseño de infraestructuras de informática, implementación y mantenimiento. </p>
                </div>
              </div>
        </div>
        
        <div class="col-sm-6 pt-3">
               <div class="card border-0 sub-card-sobre-nosotros" style="">
                         <img class="card-img-top card-nostros-sub" src="<?php echo get_template_directory_uri(); ?>/images/mision.png" alt="" width="120px" height="auto">
                 <div class="card-body">
                      <h5 class="card-title text-center card-title-servicio">Misión</h5>
                     <p class="card-text text-alto">Lograr, a través de un servicio completo, que todos nuestros clientes maximicen el uso de la tecnología. </p>
                </div>
              </div>
        </div>
	
	  </div>


      <div class="row">
        <div class="col-sm-6 pt-3">
               <div class="card border-0 sub-card-sobre-nosotros" style="">
                         <img class="card-img-top card-nostros-sub" src="<?php echo get_template_directory_uri(); ?>/images/vision.png" alt="" width="120px" height="auto">
                 <div class="card-body">
                      <h5 class="card-title text-center card-title-servicio">Visión</h5>
                     <p class="card-text text-alto">Asegurar que nuestros clientes sientan la confianza y nuestro apoyo en todos los retos tecnológicos que sus empresas puedan presentar. </p>
                </div>
              </div>
        </div>

        <div class="col-sm-6 pt-3">
              <div class="card border-0 sub-card-sobre-nosotros" style="">
                         <img class="card-img-top card-nostros-sub" src="<?php echo get_template_directory_uri(); ?>/images/valores.png" alt="" width="120px" height="auto">
                 <div class="card-body">
                      <h5 class="card-title text-center card-title-servicio">Valores</h5>
                      <div class="text-alto">
                      <ul>
                        <li>• Confiabilidad</li>
                        <li>• Honestidad</li>
                        <li>• Pasión</li>
                      </ul>
                      </div>
                </div>
              </div>
        </div>

       </div>
        



      <div class="row justify-content-center my-5">
     
        <div class="col-md-6 col-12">
          <h4 class="text-center">Realizamos diagnóstico <strong class="azul">GRATIS</strong></h4>
          <p class="text-center">¡Solicite su Cotización de servicio hoy!</p>
        </div>

        <div class="col-md-6 col-12 text-center">
           <a class="btn btn-info boton2 text-center" href="#">Solicitar Cotización</a>
        </div>
      </div>
</div>
  
</section>



<!--==========================
   Section  4 PARA PC
  ============================-->

<section class="mb-5 d-lg-block d-none" style="border-top: 7px solid orange">

    <div class="container-fluid mt-5">
      <div class="row">

        <div class="col-md-3">
              <div class="card border-0 sub-card-sobre-nosotros" style="">
                         <img class="card-img-top card-nostros-sub" src="<?php echo get_template_directory_uri(); ?>/images/filosofia.png" alt="" width="120px" height="auto">
                 <div class="card-body">
                      <h5 class="card-title text-center card-title-servicio">Filosofía</h5>
                     <p class="card-text text-alto">  Cumplir con todas las necesidades de nuestros clientes desde resolver problemas hasta diseño de infraestructuras de informática, implementación y mantenimiento. </p>
                </div>
              </div>
        </div>
        
        <div class="col-md-3">
               <div class="card border-0 sub-card-sobre-nosotros" style="">
                         <img class="card-img-top card-nostros-sub" src="<?php echo get_template_directory_uri(); ?>/images/mision.png" alt="" width="120px" height="auto">
                 <div class="card-body">
                      <h5 class="card-title text-center card-title-servicio">Misión</h5>
                     <p class="card-text text-alto">Lograr, a través de un servicio completo, que todos nuestros clientes maximicen el uso de la tecnología. </p>
                </div>
              </div>
        </div>
	
	  


        <div class="col-md-3">
               <div class="card border-0 sub-card-sobre-nosotros" style="">
                         <img class="card-img-top card-nostros-sub" src="<?php echo get_template_directory_uri(); ?>/images/vision.png" alt="" width="120px" height="auto">
                 <div class="card-body">
                      <h5 class="card-title text-center card-title-servicio">Visión</h5>
                     <p class="card-text text-alto">Asegurar que nuestros clientes sientan la confianza y nuestro apoyo en todos los retos tecnológicos que sus empresas puedan presentar. </p>
                </div>
              </div>
        </div>

        <div class="col-md-3">
              <div class="card border-0 sub-card-sobre-nosotros" style="">
                         <img class="card-img-top card-nostros-sub" src="<?php echo get_template_directory_uri(); ?>/images/valores.png" alt="" width="120px" height="auto">
                 <div class="card-body">
                      <h5 class="card-title text-center card-title-servicio">Valores</h5>
                      <div class="text-alto">
                      <ul>
                        <li>• Confiabilidad</li>
                        <li>• Honestidad</li>
                        <li>• Pasión</li>
                      </ul>
                      </div>
                </div>
              </div>
        </div>

       </div>
        



      <div class="row justify-content-center my-5">
     
        <div class="col-md-4 col-12">
          <h4 class="text-center">Realizamos diagnóstico <strong class="azul">GRATIS</strong></h4>
          <p class="text-center">¡Solicite su Cotización de servicio hoy!</p>
        </div>

        <div class="col-md-3 col-12 text-center">
           <a class="btn btn-info boton2 text-center" href="#">Solicitar Cotización</a>
        </div>
      </div>
</div>
  
</section>

<!--==========================
   Section  5
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