{include 'templates/header.tpl'}
{include 'templates/nav.tpl'}
<div class="container">
<div class="row justify-content-md-center">
    <div class="col"></div>
    <div class="col-6">
        <form action="guardarcambioscategoria/{$datoscategoria->id_categoria}" method="POST">
            <br>
            <br>
            <div class="form-floating mb-3">
                <input type="Titulo" class="form-control" id="floatingInput" placeholder="{$datoscategoria->nombre}" name="nombre">
                <label for="floatingInput">{$datoscategoria->nombre}</label>
            </div>
            <a href="administrarCategorias" class="btn btn-outline-danger">Cancelar</a>
            <input class="btn btn-outline-success" type="submit">
        </form>
    </div>
    <div class="col"></div>
</div>
</div>
{include 'templates/footer.tpl'}