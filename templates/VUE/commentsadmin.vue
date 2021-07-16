{literal}
    <div id="comentario">
                  <div>
                        <div v-for= "comentario in comentarios">
                        {{comentario.comentario}}
                        <button v-on:click="borrarcomentario(comentario.id_comentario)" class="btn btn-outline-danger">Eliminar comentario</button>
                        </div>
                  </div>
      </div>
{/literal}

