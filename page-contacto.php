<?php
/*
Template Name: Pagina contacto
*/

get_header();
?>
<!-- CONTENIDO INICIO -->

<style>
    .menu-contacto a{
    color: #0071bc !important;
    }
	@media (max-width:480px){
		.mt-5{
			margin-top:0px !important;
		}
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
            <h1 class="text-center text-white title-contacto">Contacto</h1>
          </div>
        </div>
      </div>
    </div>
  </section>



<!--==========================
   Section  2
  ============================-->

<section class="mt-5 mb-5" style="border-bottom: 7px solid orange">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-7 my-5">
          <h3 class="">¡Solicite su cotización de servicio hoy!</h3>
          <div style="border-top: 5px solid orange; width: 35%; margin-left: 7%;"></div>
          <ul>
            <li class="pt-2"><a href="tel:7872739555"><i class="fa fa-phone icons-contac pr-1"></i>Teléfono: 787-273-9555</a></li>
            <li class="pt-2"><i class="fa fa-map-marker icons-contac pr-1"></i> Dirección - 1142 Ave. F.D. Roosevelt San Juan, PR 00920</li>
            <li class="pt-2"><i class="fa fa-clock-o icons-contac pr-1"></i> Horario operacional   8:00 AM - 5:00 PM</li>
          </ul>
      </div>
      <div class="col-md-4">
        <img src="<?php echo get_template_directory_uri(); ?>/images/sub-contacto.jpg" class="sub-contact-img">
      </div>
    </div>
  </div>
</section>





<!--==========================
   Section  3
  ============================-->

<section class="mt-5">
  <div class="container">
    <div class="row justify-content-center">
       <div class="col-md-10">
         <h5>Llene el siguiente formulario, nuestros representantes se comunicarán con usted.</h5>
       </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-6">
		  <script type="text/javascript" src="https://form.jotform.com/jsform/200574614932858"></script>
      </div>
    </div>
  </div>
</section>


<!--==========================
   Section  4
  ============================-->

<section class="page-section" id="services" style="border-top: 7px solid orange">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="pb-5">Algunos de Nuestros Clientes</h2>
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

    <div class="row text-center pt-4">
      <div class="col-md-12">
        <a class="btn btn-info btn-contacto" href="#">Testimonios</a>
        
      </div>
      
    </div>

  </div>
  </section>



<!-- CONTENIDO FIN -->
<?php 
get_footer();
?>