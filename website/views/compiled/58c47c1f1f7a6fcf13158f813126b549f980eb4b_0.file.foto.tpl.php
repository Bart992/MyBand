<?php
/* Smarty version 3.1.30, created on 2017-06-14 14:35:33
  from "D:\Bewijzenmap\p1.4\proj\website myband\views\foto.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594149b54d90e3_74606277',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58c47c1f1f7a6fcf13158f813126b549f980eb4b' => 
    array (
      0 => 'D:\\Bewijzenmap\\p1.4\\proj\\website myband\\views\\foto.tpl',
      1 => 1497450929,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_594149b54d90e3_74606277 (Smarty_Internal_Template $_smarty_tpl) {
?>
<body background="images/background.jpg">

  <div class="foto-title">
    <h1>Foto's</h1>
  </div>

    <div class="foto-wrapper" style="margin-bottom: 100px">
    <div class="wrapperfoto">
 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['image_list']->value, 'image');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?>
    <div class="thumbnail" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['image']->value['images'];?>
');"></div>
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
        <a href="index.php?page=foto&pagina=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
">Vorige</a>
      </span>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['page']->value < $_smarty_tpl->tpl_vars['number_of_pages']->value) {?>
      <span id="paginas-rechts">
        <a href="index.php?page=foto&pagina=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
">Volgende</a>
      </span>
    <?php }?>
  </div>



</body>
<?php }
}
