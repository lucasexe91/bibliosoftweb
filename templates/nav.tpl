<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-success">
      <div class="container-fluid">
        <a class="navbar-brand" href="home"><img src="images/Logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top"> Bibliosoft</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          {if isset($username) && $username }
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout">Cerrar sesión</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">{$username}</a>
            </li>
          </ul>
          {else}
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login">Iniciar sesión</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="registro">Registrarse</a>
            </li>
          </ul>
          {/if}
          <form action="buscartitulo" method="POST" class="d-flex">
            <input name="titulo" class="form-control me-2" type="search" placeholder="Buscar por titulo" aria-label="Search">
            <button class="btn btn-outline-light" type="submit">Buscar</button>
          </form>
        </div>
      </div>
</nav>