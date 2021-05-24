{include 'templates/header.tpl'}
{include 'templates/navNoLogueado.tpl'}
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
    </div>
</div>
{include 'templates/footer.tpl'}