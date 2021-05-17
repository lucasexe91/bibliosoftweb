<div class="container">
    <div class="row justify-content-md-center">
        {foreach from = $arraylibro item=libros}
          <div class="col">        
            <div class="card" style="width: 18rem;">
              <img class="w-80 p-3" src={$libros->imagen} class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">{$libros->nombre}</h5>
                <a href="#" class="btn btn-outline-success">Ver libro</a>
                
                <a href="#" class="btn btn-outline-success">Editar libro</a>
                
                <a href="#" class="btn btn-outline-danger">Eliminar libro</a>
              </div>
            </div>
          </div>
        {/foreach}
    </div>
</div>