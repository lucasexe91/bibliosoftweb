{include 'templates/header.tpl'}
{include 'templates/nav.tpl'}
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
                {if isset($admin) && $admin }
                  {if $admin == 1 }
                    <a href="editarlibro/{$unlibro->id_libro}" class="btn btn-outline-success">Editar</a>
                    <a href="borrarLibro/{$unlibro->id_libro}" class="btn btn-outline-danger">Eliminar</a>
                {/if}
                {/if}
                <a href="" class="btn btn-outline-success">Volver</a>
              </div>
            </div>
          </div>
                <div class="col">
                    <ol class="list-group list-group-numbered">
                    {if isset($listacomentarios)}
                        {foreach from = $listacomentarios item=comentario}
                          <li class="list-group-item d-flex justify-content-between align-items-start">
                          <div class="ms-2 me-auto">
                            <div class="fw-bold">
                              {foreach from = $listausuarios item=usuario}
                                {if {$usuario->id} == {$comentario->usuario} }
                                  {$usuario->usuario}
                                {/if}
                              {/foreach}
                            </div>
                            {$comentario->comentario}
                          </div>
                          <span class="badge bg-primary rounded-pill">{$comentario->calificacion}</span>
                          </li>
                          {if isset($admin) && $admin }
                            {if $admin == 1 }
                              <a href="/api/borrarcomentario/{$comentario->id_comentario}" class="btn btn-outline-danger">Eliminar comentario</a>
                          {/if}
                          {/if}
                        {/foreach}
                    {/if}
                    </ol>
                    <br>
                    <div class="container border border-sucess rounded">
                    <form action="/api/comentar/{$unlibro->id_libro}/{$username}" method="POST">
                        <br>
                        <legend>
                          Deja tu Comentario y calificación!
                        </legend>
                        <br>
                        <div class="form-group">
                          <label>Escribe tu comentario aqui</label>
                          <textarea type="comentario" rows="3" class="form-control" id="floatingInput" placeholder="comentario" name="comentario"></textarea>
                        </div>
                        <br>
                        <div class="form-group">
                        <label>
                            Calificación
                        </label>
                          <select class="form-select" aria-label="Default select example" name="calificacion">
                              <option value="1">1</option>
                              <option value="1">2</option>
                              <option value="1">3</option>
                              <option value="1">4</option>
                              <option value="1">5</option>
                          </select>
                        </div>
                        <br>
                        <div class="form-group">
                          <input class="btn btn-outline-success" type="submit">
                        </div>
                    </form>
                    <br>
                    </div>
                </div>
    </div>
  </div>
{include 'templates/footer.tpl'}