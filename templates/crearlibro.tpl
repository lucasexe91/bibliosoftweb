{include 'templates/header.tpl'}
{include 'templates/nav.tpl'}
<div class="container">
<div class="row justify-content-md-center">
    <div class="col"></div>
    <div class="col-6">
        <form action="guardarlibronuevo" method="POST">
            <br>
            <br>
            <div class="form-floating mb-3">
                <input type="titulo" class="form-control" id="floatingInput" placeholder="Titulo" name="nombre">
                <label for="floatingInput">Titulo</label>
            </div>
            <div class="form-floating mb-3">
                <input type="autor" class="form-control" id="floatingInput" placeholder="Autor" name="autor">
                <label for="floatingInput">Autor</label>
            </div>
            <div class="form-floating mb-3">
                <select class="form-select" aria-label="Default select example" name="categoria">
                    {foreach from = $listacategorias item = categoria}
                        <option value="{$categoria->id_categoria}">{$categoria->nombre}</option>
                    {/foreach}
                </select>
            </div>
            <div class="form-floating mb-3">
                <input type="descripcion" class="form-control" id="floatingInput" placeholder="Descripción"
                    name="descripcion">
                <label for="floatingInput">Descripción</label>
            </div>
            <div class="form-floating mb-3">
                <input type="imagen" class="form-control" id="floatingInput" placeholder="Imágen" name="imagen">
                <label for="floatingInput">URL de imagen</label>
            </div>
            <a href="home" class="btn btn-outline-danger">Cancelar</a>
            <input class="btn btn-outline-success" type="submit">
        </form>
    </div>
    <div class="col"></div>
</div>
</div>
{include 'templates/footer.tpl'}