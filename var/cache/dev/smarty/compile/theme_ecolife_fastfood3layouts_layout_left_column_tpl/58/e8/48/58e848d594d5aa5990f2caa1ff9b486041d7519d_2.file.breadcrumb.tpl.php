<?php
/* Smarty version 3.1.39, created on 2021-11-02 22:29:51
  from 'C:\wamp64\www\susu\themes\theme_ecolife_fastfood3\templates\_partials\breadcrumb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6181adcfe04412_23086954',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58e848d594d5aa5990f2caa1ff9b486041d7519d' => 
    array (
      0 => 'C:\\wamp64\\www\\susu\\themes\\theme_ecolife_fastfood3\\templates\\_partials\\breadcrumb.tpl',
      1 => 1633611503,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6181adcfe04412_23086954 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="breadcrumb_container " data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['count'], ENT_QUOTES, 'UTF-8');?>
">
	<div class="container">
		<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'category') {?>
			<?php if ($_smarty_tpl->tpl_vars['category']->value['name']) {?>
			<div class="name_category"><h2><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h2></div>
			<?php }?>
		<?php }?>
		<nav data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['count'], ENT_QUOTES, 'UTF-8');?>
" class="breadcrumb">
		  <ol itemscope itemtype="http://schema.org/BreadcrumbList">
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4673537436181adcfde0187_25166891', 'breadcrumb');
?>

		  </ol>
		</nav>
	</div>
</div>

<?php }
/* {block 'breadcrumb_item'} */
class Block_16267685536181adcfde6f62_06323717 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				  <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
					<a itemprop="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
					  <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
					</a>
					<meta itemprop="position" content="<?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
">
				  </li>
				<?php
}
}
/* {/block 'breadcrumb_item'} */
/* {block 'breadcrumb'} */
class Block_4673537436181adcfde0187_25166891 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_4673537436181adcfde0187_25166891',
  ),
  'breadcrumb_item' => 
  array (
    0 => 'Block_16267685536181adcfde6f62_06323717',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumb']->value['links'], 'path', false, NULL, 'breadcrumb', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['path']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['path']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']++;
?>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16267685536181adcfde6f62_06323717', 'breadcrumb_item', $this->tplIndex);
?>

			  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php
}
}
/* {/block 'breadcrumb'} */
}
