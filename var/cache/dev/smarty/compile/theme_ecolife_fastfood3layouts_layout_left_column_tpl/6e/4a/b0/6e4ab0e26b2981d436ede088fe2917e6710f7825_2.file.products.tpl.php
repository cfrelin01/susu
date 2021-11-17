<?php
/* Smarty version 3.1.39, created on 2021-11-02 22:30:02
  from 'C:\wamp64\www\susu\themes\theme_ecolife_fastfood3\templates\catalog\_partials\products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6181adda7437a2_16820936',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e4ab0e26b2981d436ede088fe2917e6710f7825' => 
    array (
      0 => 'C:\\wamp64\\www\\susu\\themes\\theme_ecolife_fastfood3\\templates\\catalog\\_partials\\products.tpl',
      1 => 1633611503,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
    'file:_partials/pagination.tpl' => 1,
  ),
),false)) {
function content_6181adda7437a2_16820936 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="js-product-list" data-cate="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['postheme']->value['cate_product_per_row'], ENT_QUOTES, 'UTF-8');?>
" data-type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['postheme']->value['grid_type'], ENT_QUOTES, 'UTF-8');?>
" data-list="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['postheme']->value['cate_default_display'], ENT_QUOTES, 'UTF-8');?>
">
   <div class="row product_content grid <?php if ((isset($_COOKIE['show_list']))) {?>list <?php }?>">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listing']->value['products'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6803641086181adda721c86_09195486', 'product_miniature');
?>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14593816376181adda7399c4_58349043', 'pagination');
?>

</div>
<?php }
/* {block 'product_miniature'} */
class Block_6803641086181adda721c86_09195486 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature' => 
  array (
    0 => 'Block_6803641086181adda721c86_09195486',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	  	<div class="item-product <?php if ($_smarty_tpl->tpl_vars['postheme']->value['cate_product_per_row'] == 1) {?>product_per_3 col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 <?php } elseif ($_smarty_tpl->tpl_vars['postheme']->value['cate_product_per_row'] == 2) {?>product_per_4 col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3<?php } elseif ($_smarty_tpl->tpl_vars['postheme']->value['cate_product_per_row'] == 3) {?>product_per_5 col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3<?php }?>">
			<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
		</div>
      <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'pagination'} */
class Block_14593816376181adda7399c4_58349043 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination' => 
  array (
    0 => 'Block_14593816376181adda7399c4_58349043',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:_partials/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']), 0, false);
?>
  <?php
}
}
/* {/block 'pagination'} */
}
