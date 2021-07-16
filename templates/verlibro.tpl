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
            {if isset($username) && $username}
              <div class="col">
                  <ol class="list-group list-group-numbered">
              {if isset($admin) && $admin }
                {if $admin == 1 }
                  {include 'templates/VUE/commentsadmin.vue'}
                {/if}
              {else}
              {include 'templates/VUE/comments.vue'} <!-- vue de comentarios-->
              {/if}
              </ol>
                {include 'templates/formcomentar.tpl'}
              </div>
            {/if}
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script> <!--script del Vue-->
  <script src="js/js.js"></script>
{include 'templates/footer.tpl'}