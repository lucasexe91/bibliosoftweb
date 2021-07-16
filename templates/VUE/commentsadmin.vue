{literal}
    <div id="comentario">
                        <div v-for= "comentario in comentarios">
                        <div v-if= "comentario.comentario === ''"></div>
                        <div v-else>
                              {{comentario.comentario}}
                              <button v-on:click="borrarcomentario(comentario.id_comentario)" class="btn btn-outline-danger">Eliminar comentario</button>
                        </div>
                  </div>
      </div>
{/literal}

