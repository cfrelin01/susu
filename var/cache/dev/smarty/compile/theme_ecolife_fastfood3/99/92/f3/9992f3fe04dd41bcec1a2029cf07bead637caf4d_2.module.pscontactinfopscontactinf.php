<?php
/* Smarty version 3.1.39, created on 2021-11-02 22:29:02
  from 'module:pscontactinfopscontactinf' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6181ad9e124182_72829654',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9992f3fe04dd41bcec1a2029cf07bead637caf4d' => 
    array (
      0 => 'module:pscontactinfopscontactinf',
      1 => 1633611503,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6181ad9e124182_72829654 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin C:\wamp64\www\susu/themes/theme_ecolife_fastfood3/modules/ps_contactinfo/ps_contactinfo.tpl --><?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']) {?>
<div id="_desktop_contact_link">
  <div class="contact-link">
	<div class="phone">
		<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Call us:','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</p>
		<a href="tel:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_infos']->value['phone'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_infos']->value['phone'], ENT_QUOTES, 'UTF-8');?>
</a>
	</div>
  </div>
</div>
<?php }?><!-- end C:\wamp64\www\susu/themes/theme_ecolife_fastfood3/modules/ps_contactinfo/ps_contactinfo.tpl --><?php }
}
