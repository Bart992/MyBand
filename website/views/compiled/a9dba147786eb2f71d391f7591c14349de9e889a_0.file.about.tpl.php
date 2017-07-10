<?php
/* Smarty version 3.1.30, created on 2017-05-31 10:23:16
  from "D:\Bewijzenmap\p1.4\bap\bovi\views\about.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592e99943a7f17_70309160',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9dba147786eb2f71d391f7591c14349de9e889a' => 
    array (
      0 => 'D:\\Bewijzenmap\\p1.4\\bap\\bovi\\views\\about.tpl',
      1 => 1496226193,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_592e99943a7f17_70309160 (Smarty_Internal_Template $_smarty_tpl) {
?>
<content class="wrap">

  <section>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['about_list']->value, 'x');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['x']->value) {
?>
          <?php echo $_smarty_tpl->tpl_vars['x']->value['id'];?>

          <?php echo $_smarty_tpl->tpl_vars['x']->value['content'];?>
<p>

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>



  </section>

</content>
<?php }
}
