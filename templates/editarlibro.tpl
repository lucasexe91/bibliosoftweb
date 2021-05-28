{include 'templates/header.tpl'}
{include 'templates/nav.tpl'}
      <div class="container">
        <div class="row justify-content-md-center">
              <div class="col">
              <br>       
                <div class="card" style="width: 18rem;">
                  <img class="w-80 p-3" src="{$unlibro->imagen}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">{$unlibro->nombre}</h5>
                    <p class="card-text">{$unlibro->autor}</p>
                    <p class="card-text">{$estacategoria->nombre}</p>
                    <p class="card-text">{$unlibro->descripcion}</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <form action="guardarlibro/{$unlibro->id_libro}" method="POST">
                <br>
                <br>
                <div class="form-floating mb-3">
                  <input type="titulo" class="form-control" id="floatingInput" placeholder="Titulo" name="nombre">
                  <label for="floatingInput" >Titulo</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="autor" class="form-control" id="floatingInput" placeholder="Autor" name="autor">
                  <label for="floatingInput" >Autor}</label>
                </div>
                <div class="form-floating mb-3">
                  <select class="form-select" aria-label="Default select example" name="categoria">
                    {foreach from = $listacategorias item = categoria}
                      <option value="{$categoria->id_categoria}">{$categoria->nombre}</option>
                    {/foreach}
                  </select>
                </div>
                <div class="form-floating mb-3">
                  <input type="descripcion" class="form-control" id="floatingInput" placeholder="Descripción" name="descripcion">
                  <label for="floatingInput" >Descripción</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="imagen" class="form-control" id="floatingInput" placeholder="Imágen" name="imagen">
                  <label for="floatingInput" >URL de imagen</label>
                </div>
                <a href="verlibro/{$unlibro->id_libro}" class="btn btn-outline-danger">Cancelar</a>
                <input class="btn btn-outline-success" type="submit">
                </form>
              </div>
        </div>
      </div>
{include 'templates/footer.tpl'}