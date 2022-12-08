<nav class="navbar navbar-expand-lg py-0 bg-light">
  <div class="container-fluid nav-container">
    <a class="navbar-brand nav-title" href="<?php echo site_url(); ?>/index.php">Cocina De Molina</a>
    <button class="navbar-toggler ham-menu" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon ham-menu__icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link nav-item" aria-current="page" href="<?php echo site_url(); ?>/recipes">Recipes</a>
        </li>
        <li class="nav-item">
            <a class="nav-link nav-item" aria-current="page" href="<?php echo site_url(); ?>/admin/recipes">Admin</a>
        </li>
      </ul>
      
      <form class="d-flex" action="<?php echo site_url(); ?>/search" method="GET">
        <input class="form-control me-2 search-input" type="text" name="search" id="search" placeholder="">
        <button class="btn btn-outline-success search-button" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>