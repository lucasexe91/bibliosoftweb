{include 'templates/header.tpl'}
{include 'templates/nav.tpl'}
{include 'templates/filtros.tpl'}
<br><br>
<div class="container">
    <div class="row justify-content-md-center">
        {foreach from = $listacategorias item=categoria}
          <div class="col">        
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">{$categoria->nombre}</h5>
                    <a href="editarcategoria/{$categoria->id_categoria}" class="btn btn-outline-success">Editar</a>
                    <a href="borrarcategoria/{$categoria->id_categoria}" class="btn btn-outline-danger">Eliminar</a>
              </div>
            </div>
          </div>
        {/foreach}
    </div>
    <br>
    <a href="agregarcategoria" class="btn btn-outline-success">Agregar una categoria</a>
</div>
{include 'templates/footer.tpl'}