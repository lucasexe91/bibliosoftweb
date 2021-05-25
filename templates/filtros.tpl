<ul class="nav justify-content-center">
    <li class="nav-item">
        <a class="nav-link disabled" aria-current="page" href="#">Filtro por categoria</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Categorías</a>
        <ul class="dropdown-menu">
            {foreach from = $listacategorias item = categoria}
                <li><a class="dropdown-item" href="filtrado/{$categoria->id_categoria}">{$categoria->nombre}</a></li>
            {/foreach}
            {if isset($admin) && $admin }
                {if $admin == 1 }
                    <li><a class="dropdown-item" href="administrarCategorias">Administrar Categorias</a></li>
              {/if}
            {/if}
        </ul>
    </li>
</ul>