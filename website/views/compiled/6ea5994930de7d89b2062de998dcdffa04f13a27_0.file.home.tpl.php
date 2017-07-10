<?php
/* Smarty version 3.1.30, created on 2017-06-21 08:24:21
  from "D:\Bewijzenmap\p1.4\proj\website myband\views\home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594a2d353ed3b1_02961047',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ea5994930de7d89b2062de998dcdffa04f13a27' => 
    array (
      0 => 'D:\\Bewijzenmap\\p1.4\\proj\\website myband\\views\\home.tpl',
      1 => 1498033459,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_594a2d353ed3b1_02961047 (Smarty_Internal_Template $_smarty_tpl) {
?>
<body background="images/background.jpg">
<div class="jumbotron">
   <div id="black">
  <div class="video">
   <video autoplay muted loop >
      <source src="video/videoplayback.mp4" type="video/mp4">
   </video>
   <div class="container">
     <h1>Welkom Op VR46FANS</h1>
     <p>De Website Voor Alle Valentino Rossi Fans.</p>
   </div>
 </div>
  </div>
</div>


 <div class="neighborhood-guides" style="margin-bottom: 100px">
   <h1>Foto's</h1>
   <div class="wrapperfoto">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['image_list']->value, 'image');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?>
   <a href="./foto"><div class="thumbnail" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['image']->value['images'];?>
');"></div></a>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

 </div>
 </div>


<div class="news">
  <div class="news-wrap">
  <h1>Nieuws</h1>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['news_list']->value, 'news');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
?>
  <div class="news-item">
  <div class="news-image" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['news']->value['images'];?>
');"></div>
  <div class="content">
  <a href="./nieuws"><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</a>
  </div>
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
