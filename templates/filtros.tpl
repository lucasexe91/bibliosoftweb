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
            {foreach from = $listacategorias item = categoria}
                <li><a class="dropdown-item" href="#">{$categoria->nombre}</a></li>
            {/foreach}
        </ul>
    </li>
</ul>