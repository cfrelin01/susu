<?php
/* Smarty version 3.1.39, created on 2021-11-02 22:30:06
  from 'C:\wamp64\www\susu\modules\posrotatorimg\rotator.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6181adde2a1b56_50582145',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47f1eee36150bddd1eeaa834ee2dbedee4dcdfa3' => 
    array (
      0 => 'C:\\wamp64\\www\\susu\\modules\\posrotatorimg\\rotator.tpl',
      1 => 1633611501,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6181adde2a1b56_50582145 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['rotator_img']->value))) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rotator_img']->value, 'image', false, NULL, 'thumbnails', array (
));
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
		  <?php $_smarty_tpl->_assignInScope('imageIds', ((string)$_smarty_tpl->tpl_vars['product']->value['id_product'])."-".((string)$_smarty_tpl->tpl_vars['image']->value['id_image']));?>
          <img class="img-responsive second-image <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class_name']->value, ENT_QUOTES, 'UTF-8');?>
 lazyload" 
		  <?php if ((isset($_smarty_tpl->tpl_vars['imagesize']->value))) {?>
			src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['imageIds']->value,$_smarty_tpl->tpl_vars['imagesize']->value),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" 
		  <?php } else { ?>
			src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['imageIds']->value,'home_default'),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
		  <?php }?>
		  alt="" itemprop="image"  />
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>		<?php }
}
