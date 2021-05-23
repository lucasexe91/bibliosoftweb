<?php
/* Smarty version 3.1.39, created on 2021-05-23 22:20:50
  from 'C:\xampp\htdocs\bibliosoftweb\templates\tarjetas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60aab922bc93e9_08924116',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e97550235b3ba7685e84993684163735475aea49' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bibliosoftweb\\templates\\tarjetas.tpl',
      1 => 1621801247,
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
function content_60aab922bc93e9_08924116 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/navNoLogueado.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <div class="row justify-content-md-center">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listalibros']->value, 'libro');
$_smarty_tpl->tpl_vars['libro']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['libro']->value) {
$_smarty_tpl->tpl_vars['libro']->do_else = false;
?>
          <div class="col">        
            <div class="card" style="width: 18rem;">
              <img class="w-80 p-3" src="<?php echo $_smarty_tpl->tpl_vars['libro']->value->imagen;?>
" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['libro']->value->nombre;?>
</h5>
                <a href="#" class="btn btn-outline-success">Ver libro</a>
              </div>
            </div>
          </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
