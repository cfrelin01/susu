<?php
/* Smarty version 3.1.39, created on 2021-11-02 22:29:01
  from 'module:pscustomersigninpscustome' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6181ad9d81c0f6_51732616',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5f8f570180f74d1dbdd1a1d2af0445e90a6650c' => 
    array (
      0 => 'module:pscustomersigninpscustome',
      1 => 1633611503,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6181ad9d81c0f6_51732616 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin C:\wamp64\www\susu/themes/theme_ecolife_fastfood3/modules/ps_customersignin/ps_customersignin.tpl --><div id="_desktop_user_info">
	<div class="user-info-block selector-block">
		<div class="currency-selector localiz_block dropdown js-dropdown">
			<button data-toggle="dropdown" class=" btn-unstyle hidden-md-down">
			  <span class="expand-more"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Setting','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</span>
			  <i class="material-icons">expand_more</i>
			</button>
			<button data-toggle="dropdown" class=" btn-unstyle hidden-lg-up">
				<i class="ion-ios-contact"></i>
			</button>
			<ul class="dropdown-menu">
			<li>
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="dropdown-item"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</a>
			</li>
			<li>
			<li>
				<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',true),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
?action=show" class="dropdown-item" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a>
			</li>
			<li>
				<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
				  <a
					class="logout dropdown-item"
					href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logout_url']->value, ENT_QUOTES, 'UTF-8');?>
"
					rel="nofollow"
				  >
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign out','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

				  </a>

				<?php } else { ?>
				  <a
					href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"
					title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in to your customer account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
"
					rel="nofollow" class="dropdown-item"
				  >
					<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
				  </a>
			  </li>
			<?php }?>
			</ul>
		</div>
	</div>
	
</div>
<!-- end C:\wamp64\www\susu/themes/theme_ecolife_fastfood3/modules/ps_customersignin/ps_customersignin.tpl --><?php }
}
