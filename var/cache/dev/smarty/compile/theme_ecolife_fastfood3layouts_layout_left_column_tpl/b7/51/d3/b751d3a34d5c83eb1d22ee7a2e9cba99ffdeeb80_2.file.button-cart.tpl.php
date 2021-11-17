<?php
/* Smarty version 3.1.39, created on 2021-11-02 22:30:06
  from 'C:\wamp64\www\susu\themes\theme_ecolife_fastfood3\templates\catalog\_partials\customize\button-cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6181adde6dded4_62741167',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b751d3a34d5c83eb1d22ee7a2e9cba99ffdeeb80' => 
    array (
      0 => 'C:\\wamp64\\www\\susu\\themes\\theme_ecolife_fastfood3\\templates\\catalog\\_partials\\customize\\button-cart.tpl',
      1 => 1633611503,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6181adde6dded4_62741167 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {
if (($_smarty_tpl->tpl_vars['product']->value['quantity'] > 0 || $_smarty_tpl->tpl_vars['product']->value['allow_oosp'])) {?>
<div class="product-add-to-cart">	
 <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" class="add-to-cart-or-refresh">
   <input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
   <input type="hidden" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="product_page_product_id">
   <input type="hidden" name="qty" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
">
   <button class="button ajax_add_to_cart_button add-to-cart btn-default" data-button-action="add-to-cart" type="submit" >
  		 <i class="fa fa-shopping-cart"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

   </button>
 </form>
</div>
<?php } else { ?>
	<span class="ajax_add_to_cart_button disabled" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Out of stock','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
" ><i class="fa fa-shopping-cart"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
<?php }
}?> <?php }
}
