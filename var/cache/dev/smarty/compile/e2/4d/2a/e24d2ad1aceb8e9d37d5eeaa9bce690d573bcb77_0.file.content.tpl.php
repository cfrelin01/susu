<?php
/* Smarty version 3.1.39, created on 2021-11-08 16:49:57
  from 'C:\wamp64\www\susu\admin595d0numu\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_618947252d2c25_82939605',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e24d2ad1aceb8e9d37d5eeaa9bce690d573bcb77' => 
    array (
      0 => 'C:\\wamp64\\www\\susu\\admin595d0numu\\themes\\default\\template\\content.tpl',
      1 => 1631130315,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_618947252d2c25_82939605 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
