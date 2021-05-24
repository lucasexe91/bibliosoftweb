{include 'templates/header.tpl'}
{include 'templates/navNoLogueado.tpl'}
<br><br>
<div class="container-sm">
<div class="row">
    <div class="col">
    </div>
    <div class="col-6">
        <form>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nombre de usuario</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Contraseña</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
              ¿Administrador?
              </label>
            </div>
            <br>
            <button type="submit" class="btn btn-outline-success">Registrarse</button>
        </form>
    </div>
    <div class="col">
    </div>
</div>
</div>
{include 'templates/footer.tpl'}