{include 'templates/header.tpl'}
{include 'templates/nav.tpl'}
{include 'templates/filtros.tpl'}
<br><br>
<div class="container">
    <div class="row justify-content-md-center">
        {foreach from = $listausuarios item=esteusuario}
          <div class="col gy-2">        
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">{$esteusuario->usuario}</h5>
                {if $esteusuario->numeroadministrador == 1 }
                    <p class="card-text">Usuario Administrador</p>
                {else}
                    <p class="card-text">Usuario Regular</p>
                {/if}
                <BR>
                    <a href="editarusuario/{$esteusuario->id}" class="btn btn-outline-success">Editar</a>
                    <a href="borrarusuario/{$esteusuario->id}" class="btn btn-outline-danger">Eliminar</a>
              </div>
            </div>
          </div>
        {/foreach}
    </div>
</div>
{include 'templates/footer.tpl'}