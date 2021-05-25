{include 'templates/header.tpl'}
{include 'templates/nav.tpl'}
{include 'templates/filtros.tpl'}
<br><br>
<div class="container">
    <div class="row justify-content-md-center">
        {foreach from = $listalibros item=libro}
          <div class="col">        
            <div class="card" style="width: 18rem;">
              <img class="w-80 p-3" src="{$libro->imagen}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">{$libro->nombre}</h5>
                <a href="verlibro/{$libro->id_libro}" class="btn btn-outline-success">Ver libro</a>
              </div>
            </div>
          </div>
        {/foreach}
        {if isset($admin) && $admin }
          {if $admin == 1 }
            <a href="crearlibronuevo" class="btn btn-outline-success">Crear libro!</a>
        {/if}
        {/if}
    </div>
</div>
{include 'templates/footer.tpl'}