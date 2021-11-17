<?php
/* Smarty version 3.1.39, created on 2021-11-02 22:29:52
  from 'module:blocktagsblocktags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6181add064d5f6_62271826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49c6dc2b3af965ab09c656efa30fcf7964769ffd' => 
    array (
      0 => 'module:blocktagsblocktags.tpl',
      1 => 1633611501,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6181add064d5f6_62271826 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin C:\wamp64\www\susu/modules/blocktags/blocktags.tpl -->
<!-- Block tags module -->
<div id="tags_block">
	<h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'tags','mod'=>'blocktags'),$_smarty_tpl ) );?>
</h2>
	<ul  class="tags_block">
		<?php if ((isset($_smarty_tpl->tpl_vars['tags']->value))) {?> 
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tags']->value, 'tag', false, NULL, 'myLoop', array (
  'last' => true,
  'first' => true,
  'index' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['total'];
?>
				<li>
				<a href="<?php ob_start();
echo htmlspecialchars(urlencode($_smarty_tpl->tpl_vars['tag']->value['name']), ENT_QUOTES, 'UTF-8');
$_prefixVariable1=ob_get_clean();
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink('search',true,NULL,"tag=".$_prefixVariable1),'html' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'More about','mod'=>'blocktags'),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tag']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value['class'], ENT_QUOTES, 'UTF-8');?>
 <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last'] : null)) {?>last_item<?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['first'] : null)) {?>first_item<?php } else { ?>item<?php }?>"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tag']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a>
				</li>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php } else { ?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No tags have been specified yet.','mod'=>'blocktags'),$_smarty_tpl ) );?>

		<?php }?>
	</ul>
</div>
<!-- /Block tags module -->
<!-- end C:\wamp64\www\susu/modules/blocktags/blocktags.tpl --><?php }
}
