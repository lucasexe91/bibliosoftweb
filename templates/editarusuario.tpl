{include 'templates/header.tpl'}
{include 'templates/nav.tpl'}
<div class="container">
<div class="row justify-content-md-center">
    <div class="col"></div>
    <div class="col-6">
        <form action="guardarcambiosusuario/{$esteusuario->id}" method="POST">
            <br>
            <br>
            <div class="form-floating mb-3">
                <input type="usuario" class="form-control" id="floatingInput" placeholder="{$esteusuario->usuario}" name="usuario">
                <label for="floatingInput">{$esteusuario->usuario}</label>
            </div>
            <div class="form-floating mb-3">
                <input type="admin" class="form-control" id="floatingInput" placeholder="{$esteusuario->numeroadministrador}" name="admin">
                <label for="floatingInput">{$esteusuario->numeroadministrador}</label>
            </div>
            <a href="administrarusuarios" class="btn btn-outline-danger">Cancelar</a>
            <input class="btn btn-outline-success" type="submit">
        </form>
    </div>
    <div class="col"></div>
</div>
</div>
{include 'templates/footer.tpl'}