{literal}
    
     {if isset($username) && $username }
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
                              <button type="button" onclick="borrarcomentario({$comentario->id_comentario})" class="btn btn-outline-danger">Eliminar comentario</button>
                          {/if}
                          {/if}
                        {/foreach}
                    {/if}
                    </ol>
{/literal}


