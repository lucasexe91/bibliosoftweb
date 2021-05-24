<?php
/* Smarty version 3.1.39, created on 2021-05-24 06:20:03
  from 'C:\xampp\htdocs\bibliosoftweb\templates\filtros.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60ab2973f34a43_79629599',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cfa86a06537f119ddf895a947fcd4c9a8c7d832a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bibliosoftweb\\templates\\filtros.tpl',
      1 => 1621829794,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60ab2973f34a43_79629599 (Smarty_Internal_Template $_smarty_tpl) {
?><ul class="nav justify-content-center">
    <li class="nav-item">
        <a class="nav-link disabled" aria-current="page" href="#">Filtros</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Ordenar por nombre</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Mostrar en oferta</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Categorías</a>
        <ul class="dropdown-menu">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listacategorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
                <li><a class="dropdown-item" href="#"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
</a></li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </li>
</ul><?php }
}
