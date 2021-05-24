<?php
/* Smarty version 3.1.39, created on 2021-05-24 09:14:53
  from 'C:\xampp\htdocs\bibliosoftweb\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60ab526d30d816_63835140',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b6c8f171a41506bc15e23e3d37f29b1b02017e5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bibliosoftweb\\templates\\login.tpl',
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
function content_60ab526d30d816_63835140 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <button type="submit" class="btn btn-outline-success">Ingresar</button>
                </form>
            </div>
            <div class="col">
            </div>
        </div>
    </div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
