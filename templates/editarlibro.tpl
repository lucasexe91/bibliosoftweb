<form action="">
      <div class="container">
        <div class="row justify-content-md-center">
              <div class="col">        
                <div class="card" style="width: 18rem;">
                  <img class="w-80 p-3" src="images/Logo (2).png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Nombre de libro</h5>
                    <p class="card-text">Autor</p>
                    <p class="card-text">Categoría</p>
                    <p class="card-text">Descripción</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="form-floating mb-3">
                  <input type="titulo" class="form-control" id="floatingInput" placeholder="Titulo">
                  <label for="floatingInput">Titulo</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="autor" class="form-control" id="floatingInput" placeholder="Autor">
                  <label for="floatingInput">Autor</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="categoria" class="form-control" id="floatingInput" placeholder="Categoría">
                  <label for="floatingInput">Categoría</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="descripcion" class="form-control" id="floatingInput" placeholder="Descripción">
                  <label for="floatingInput">Descripción</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="imagen" class="form-control" id="floatingInput" placeholder="Imágen">
                  <label for="floatingInput">Imágen</label>
                </div>
                <a href="#" class="btn btn-outline-danger">Cancelar</a>
                <button class="btn btn-outline-success" type="submit">Guardar libro</button>
              </div>
        </div>
      </div>
    </form>