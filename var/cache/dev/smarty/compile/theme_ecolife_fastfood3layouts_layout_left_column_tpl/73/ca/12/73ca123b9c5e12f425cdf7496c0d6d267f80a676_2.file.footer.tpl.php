<?php
/* Smarty version 3.1.39, created on 2021-11-02 22:29:52
  from 'C:\wamp64\www\susu\themes\theme_ecolife_fastfood3\templates\_partials\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6181add0ac2834_39872675',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73ca123b9c5e12f425cdf7496c0d6d267f80a676' => 
    array (
      0 => 'C:\\wamp64\\www\\susu\\themes\\theme_ecolife_fastfood3\\templates\\_partials\\footer.tpl',
      1 => 1633611503,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6181add0ac2834_39872675 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="footer-container">
	<div class="footer_top">
		<div class="container">
		    <div class="row">
			   <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11601282216181add0aaba98_52443552', 'hook_footer');
?>

			</div>
		</div>
	</div>
	<div class="footer_bottom">
		<div class="container">
			<div class="row">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2777046996181add0ab7257_56648698', 'hook_footer_after');
?>

			</div>
		</div>
	</div>
</div>
<?php }
/* {block 'hook_footer'} */
class Block_11601282216181add0aaba98_52443552 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_11601282216181add0aaba98_52443552',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

			    <?php
}
}
/* {/block 'hook_footer'} */
/* {block 'hook_footer_after'} */
class Block_2777046996181add0ab7257_56648698 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_2777046996181add0ab7257_56648698',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>

				<?php
}
}
/* {/block 'hook_footer_after'} */
}
