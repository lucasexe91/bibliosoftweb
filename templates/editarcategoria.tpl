{include 'templates/header.tpl'}
{include 'templates/nav.tpl'}
<div class="container">
<div class="row justify-content-md-center">
    <div class="col"></div>
    <div class="col-6">
        <form action="editarcategoria" method="POST">
            <br>
            <br>
            <div class="form-floating mb-3">
                <input type="titulo" class="form-control" id="floatingInput" placeholder="nombre de categoria nueva" name="nombre">
                <label for="floatingInput">nombre de categoria nueva</label>
            </div>
            <a href="administrarCategorias" class="btn btn-outline-danger">Cancelar</a>
            <input class="btn btn-outline-success" type="submit">
        </form>
    </div>
    <div class="col"></div>
</div>
</div>
{include 'templates/footer.tpl'}