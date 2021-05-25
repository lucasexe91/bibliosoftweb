{include 'templates/header.tpl'}
{include 'templates/nav.tpl'}
<br><br> 
    <div class="container-sm">
        <div class="row">
            <div class="col">
            </div>
            <div class="col-6">
                <form action="verify" method="POST">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nombre de usuario</label>
                      <input type="email" name="username"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                      <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    {if $error}
                        <div class="alert alert-danger" role="alert">
                    {$error}
                        </div>
                    {/if}
                    <input type="submit" class="btn btn-outline-success">
                </form>
            </div>
            <div class="col">
            </div>
        </div>
    </div>
{include 'templates/footer.tpl'}