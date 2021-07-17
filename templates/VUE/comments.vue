{literal}
    <div id="comentario">
            <div v-for= "comentario in comentarios">
            <div v-if= "comentario.comentario === ''"></div>
                  <div v-else>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                              <div class="ms-2 me-auto">
                                    <div class="fw-bold">
                                          {{comentario.usuario}}
                                    </div>
                              {{comentario.comentario}}
                              </div>
                              <span class="badge bg-primary rounded-pill">{{comentario.calificacion}}</span>
                        </li>
                  </div>
            </div>
      </div>
{/literal}


