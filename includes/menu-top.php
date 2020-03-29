<nav class="navbar navbar-expand-lg color-header bg-light">
      <div class="container-fluid">

        <button type="button" id="sidebarCollapse" class="navbar-btn">
          <span></span>
          <span></span>
          <span></span>
        </button>
        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-align-justify"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php 
        if(is_user_logged_in()):
        ?>

          <ul class="nav navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link text-white" href="<?php echo get_site_url(); ?>/mi-cuenta/edit-account">Editar Cuenta</a>
            </li>
            <li class="nav-item">
               <a class="nav-link text-white" href="<?php echo get_site_url(); ?>/mi-cuenta/customer-logout/?_wpnonce=6916a17560">Salir</a>
            </li>
          </ul>

        <?php else: ?>



 

          <ul class="nav navbar-nav ml-auto">
          <li class="nav-item">
               <a class="nav-link text-white" href="<?php echo get_site_url(); ?>"><i class="fa fa-home"></i> Ir al home</a>
            </li>
            <li class="nav-item">
               <a class="nav-link text-white" href="<?php echo get_site_url(); ?>/mi-cuenta/"><i class="fa fa-lo"></i> Acceder</a>
            </li>
          </ul>


        <?php endif; ?>
        </div>
      </div>
    </nav>