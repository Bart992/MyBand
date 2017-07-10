<?php
/* Smarty version 3.1.30, created on 2017-06-20 08:10:32
  from "D:\Bewijzenmap\p1.4\proj\website myband\views\races.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5948d878302325_15247984',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5e2b9ffcc57c04644287425f9fe37ef12babacc' => 
    array (
      0 => 'D:\\Bewijzenmap\\p1.4\\proj\\website myband\\views\\races.tpl',
      1 => 1497946228,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5948d878302325_15247984 (Smarty_Internal_Template $_smarty_tpl) {
?>
<body background="images/background.jpg">
  <div class="races-title">
    <h1>Races</h1>
  </div>
  <div class="races">
    <div class="races-wrap">


      <h1>Circuits</h1>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['races_list']->value, 'races');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['races']->value) {
?>
      <div class="races-item">
      <div class="races-image" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['races']->value['images'];?>
');"></div>
      <div class="races-content">
      <a href="#artikel<?php echo $_smarty_tpl->tpl_vars['races']->value['id'];?>
">
      <?php echo $_smarty_tpl->tpl_vars['races']->value['title'];?>

    </a>
      </div>
    </div>

    <div class="lightbox short-animate" id="artikel<?php echo $_smarty_tpl->tpl_vars['races']->value['id'];?>
">
    <div class="lightbox-content">
      <div class="lightbox-image" style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['races']->value['images'];?>
');"></div>
      <div class="lightbox-content-text">
        <span style="display: inline-block; margin-top: 25px"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['races']->value['date'];?>
</span>
        <p><h1><?php echo $_smarty_tpl->tpl_vars['races']->value['title'];?>
</h1></p>
        <p><?php echo $_smarty_tpl->tpl_vars['races']->value['content'];?>
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

</body>
<?php }
}
