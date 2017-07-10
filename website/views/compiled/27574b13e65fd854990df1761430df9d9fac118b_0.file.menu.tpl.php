<?php
/* Smarty version 3.1.30, created on 2017-06-23 10:06:10
  from "D:\Bewijzenmap\p1.4\proj\website myband\views\menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594ce812e83139_89831088',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27574b13e65fd854990df1761430df9d9fac118b' => 
    array (
      0 => 'D:\\Bewijzenmap\\p1.4\\proj\\website myband\\views\\menu.tpl',
      1 => 1498204996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_594ce812e83139_89831088 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="nav">
  <div class="container-header">
    <div class="logo">
      <a href="./home"><h1> VR <img src="images/46.png" style="height: 30px"> FANS </h1></a>
    </div>
    <ul class="topnav" id="myTopnav">
        <li><a href="./home">Home</a></li>
        <li><a href="./nieuws">Nieuws</a></li>
        <li><a href="./over">Over</a></li>
        <li><a href="./races">Races</a></li>
        <li><a href="./foto">Foto's</a></li>
    </ul>
  <li class="icon">
    <span style="font-size:30px;cursor:pointer; z-index:9;" onclick="openNav()"><i class="fa fa-bars" aria-hidden="true"></i></span>
  </li>
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <li><a href="./home">Home</a></li>
    <li><a href="./nieuws">Nieuws</a></li>
    <li><a href="./over">Over</a></li>
    <li><a href="./races">Races</a></li>
    <li><a href="./foto">Foto's</a></li>
  </div>


</div>
</div>
<?php }
}
