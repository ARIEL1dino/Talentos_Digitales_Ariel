<!-- parte de la barra de navegación -->
    <nav class="navbar navbar-expand-lg  ">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo base_url('principal')?>">
<!-- Imagen de perrito de la página-->
          <img src="<?php echo base_url('assets/img/perritos.jpg')?>" alt="Logotipo_perritos" class="d-inline-block align-text-top logo_perro">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto">
            <li class="nav-item"><a class="nav-link" href='principal'>Principal</a></li>
            <li class="nav-item"><a class="nav-link" href='<?php echo base_url('quienes_somos')?>'>Quiénes Somos</a></li>
            <li class="nav-item"><a class="nav-link" href='<?php echo base_url('acerca_de')?>'>Acerca de</a></li>
            <li class="nav-item"><a class="nav-link" href='<?php echo base_url('registro')?>'>Registrarse </a></li>
            <li class="nav-item"><a class="nav-link" href='<?php echo base_url('login')?>'>Loguearse </a></li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
            <button class="btn btn-outline-success" type="submit">Buscar</button>
          </form>
        </div>
      </div>
    </nav>
    <!-- final barra de navegación -->