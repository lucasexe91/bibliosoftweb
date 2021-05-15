<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliosoft</title>
    <link rel="icon" type="img" href="images/Logo (2).ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>
<body>
    <!--NAV-->
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-success">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="images/Logo (2).png" alt="" width="30" height="24" class="d-inline-block align-text-top"> Bibliosoft</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Iniciar sesión</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Registrarse</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-light" type="submit">Buscar</button>
          </form>
        </div>
      </div>
    </nav>
      <br>
      <!--Filtros-->
      <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link disabled" aria-current="page" href="#">Filtros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Ordenar por nombre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Mostrar en oferta</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Categorías</a>
          <ul class="dropdown-menu">
          {foreach from = $arraycategoria item = categorias}
            <li><a class="dropdown-item" href="#">{$categoria->arraycategoria}</a></li>
            {/foreach}
          </ul>
        </li>
      </ul>
      <br>
      <!--Section-->
      <div class="container">
        <div class="row justify-content-md-center">
        {foreach from = $arraylibro item=libros}
          <div class="col">        
            <div class="card" style="width: 18rem;">
              <img class="w-80 p-3" src={$libros->imagen} class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">{$libros->nombre}</h5>
                <a href="#" class="btn btn-outline-success">Ver libro</a>
              </div>
            </div>
          </div>
        {/foreach}
        </div>
      </div>

      <!--Scripts-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
</body>
</html>