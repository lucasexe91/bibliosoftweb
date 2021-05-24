{include 'templates/header.tpl'}
{include 'templates/navNoLogueado.tpl'}
<br><br>    
    <div class="container">
    <div class="row justify-content-md-center">
          <div class="col">        
            <div class="card" style="width: 18rem;">
              <img class="w-80 p-3" src="{$unlibro->imagen}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">{$unlibro->nombre}</h5>
                <p class="card-text">{$unlibro->autor}</p>
                <p class="card-text">{$unacategoria->nombre}</p>
                <p class="card-text">{$unlibro->descripcion}</p>
                <a href="" class="btn btn-outline-success">Volver</a>
              </div>
            </div>
          </div>
    </div>
  </div>
{include 'templates/footer.tpl'}