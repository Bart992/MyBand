<?php
/* Smarty version 3.1.30, created on 2017-05-31 10:38:33
  from "D:\Bewijzenmap\p1.4\bap\bovi\views\articles.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592e9d29da2893_15955331',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f704a8ec4f67fc7618726c4e1317069f7ba2299' => 
    array (
      0 => 'D:\\Bewijzenmap\\p1.4\\bap\\bovi\\views\\articles.tpl',
      1 => 1496227111,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_592e9d29da2893_15955331 (Smarty_Internal_Template $_smarty_tpl) {
?>
<content class="wrap">

<section>

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article_list']->value, 'one_article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['one_article']->value) {
?>
        <article>
        <h1> <?php echo $_smarty_tpl->tpl_vars['one_article']->value['title'];?>
 </h1>
        <content> <?php echo $_smarty_tpl->tpl_vars['one_article']->value['content'];?>
 </content>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['one_article']->value['image'];?>
">
        </article>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>



</section>

</content>
<?php }
}
