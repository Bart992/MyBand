<?php
/* Smarty version 3.1.30, created on 2017-06-19 09:07:07
  from "D:\Bewijzenmap\p1.4\proj\website myband\views\nieuws.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5947943b27e680_17186049',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd15256d511fc1c6474d6ce4216554566977639f7' => 
    array (
      0 => 'D:\\Bewijzenmap\\p1.4\\proj\\website myband\\views\\nieuws.tpl',
      1 => 1497863222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5947943b27e680_17186049 (Smarty_Internal_Template $_smarty_tpl) {
?>
<body background="images/background.jpg">

  <div class="nieuws-title">
    <h1>Nieuws</h1>
  </div>

  <div class="nieuws">
    <div class="nieuws-wrap">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['news_list']->value, 'news');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
?>
    <div class="nieuws-item">
    <div class="nieuws-image" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['news']->value['images'];?>
');"></div>
    <div class="nieuws-content">



  <a href="#artikel<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
">
  <?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>

  </a>
    </div>
  </div>
  <div class="lightbox short-animate" id="artikel<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
">
  <div class="lightbox-content">
    <div class="lightbox-image" style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['news']->value['images'];?>
');"></div>
    <div class="lightbox-content-text">
      <span style="display: inline-block; margin-top: 25px"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['news']->value['date'];?>
</span>
      <p><h1><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</h1></p>
      <p><?php echo $_smarty_tpl->tpl_vars['news']->value['content'];?>
</p>
    </div>
  </div>
</div>
<div id="lightbox-controls" class="short-animate">
  <a id="close-lightbox" class="long-animate" href="#!"></a>
</div>

  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </div>
  </div>








  <div class="paginas-wrap">
    <p id="pagenumber">Pagina <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</p>
    <?php if ($_smarty_tpl->tpl_vars['page']->value > 1) {?>
      <span id="paginas-links">
        <a href="index.php?page=nieuws&pagina=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
">Vorige</a>
      </span>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['page']->value < 2) {?>
      <span id="paginas-rechts">
        <a href="index.php?page=nieuws&pagina=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
">Volgende</a>
      </span>
    <?php }?>
  </div>




</body>
<?php }
}
