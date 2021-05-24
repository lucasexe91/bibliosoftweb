<?php
/* Smarty version 3.1.39, created on 2021-05-24 08:33:17
  from 'C:\xampp\htdocs\bibliosoftweb\templates\navNoLogueado.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60ab48ad659db4_69230418',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17b6f01565a395536ca635f8c2b5071927608a92' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bibliosoftweb\\templates\\navNoLogueado.tpl',
      1 => 1621836875,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60ab48ad659db4_69230418 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-success">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="images/Logo (2).png" alt="" width="30" height="24" class="d-inline-block align-text-top"> Bibliosoft</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login">Iniciar sesión</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="registro">Registrarse</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Buscar Libro" aria-label="Search">
            <button class="btn btn-outline-light" type="submit">Buscar</button>
          </form>
        </div>
      </div>
</nav><?php }
}
