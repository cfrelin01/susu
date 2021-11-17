<?php
/* Smarty version 3.1.39, created on 2021-11-02 22:29:05
  from 'C:\wamp64\www\susu\themes\theme_ecolife_fastfood3\templates\_partials\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6181ada17de3b5_04571427',
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
function content_6181ada17de3b5_04571427 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="footer-container">
	<div class="footer_top">
		<div class="container">
		    <div class="row">
			   <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6967387766181ada17cfdc3_70783236', 'hook_footer');
?>

			</div>
		</div>
	</div>
	<div class="footer_bottom">
		<div class="container">
			<div class="row">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16201475636181ada17d7bb1_70701025', 'hook_footer_after');
?>

			</div>
		</div>
	</div>
</div>
<?php }
/* {block 'hook_footer'} */
class Block_6967387766181ada17cfdc3_70783236 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_6967387766181ada17cfdc3_70783236',
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
class Block_16201475636181ada17d7bb1_70701025 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_16201475636181ada17d7bb1_70701025',
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
