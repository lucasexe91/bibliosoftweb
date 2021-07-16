<form>
                        <br>
                        <legend>
                          Deja tu Comentario y calificación!
                        </legend>
                        <label id="idlibro">{$unlibro->id_libro}</label>
                        <label id="username">{$username}</label>
                        <br>
                        <div class="form-group">
                          <label>Escribe tu comentario aqui</label>
                          <textarea id="nuevocomentario" type="comentario" rows="3" class="form-control" id="floatingInput" placeholder="comentario" name="comentario"></textarea>
                        </div>
                        <br>
                        <div class="form-group">
                        <label>
                            Calificación
                        </label>
                          <select id="nota" class="form-select" >
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                          </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <button type="button" class="btn btn-outline-success" id="comentarbtn">Comentar</button>
                        </div>
</form>
