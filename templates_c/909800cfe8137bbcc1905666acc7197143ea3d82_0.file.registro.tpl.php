<?php
/* Smarty version 3.1.39, created on 2021-05-24 09:14:57
  from 'C:\xampp\htdocs\bibliosoftweb\templates\registro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60ab52711139e9_11073927',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '909800cfe8137bbcc1905666acc7197143ea3d82' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bibliosoftweb\\templates\\registro.tpl',
      1 => 1621836875,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/navNoLogueado.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_60ab52711139e9_11073927 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/navNoLogueado.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
