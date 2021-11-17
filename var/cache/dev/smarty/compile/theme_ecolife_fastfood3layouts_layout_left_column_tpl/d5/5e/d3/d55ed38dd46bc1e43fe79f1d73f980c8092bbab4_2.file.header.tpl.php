<?php
/* Smarty version 3.1.39, created on 2021-11-02 22:29:51
  from 'C:\wamp64\www\susu\themes\theme_ecolife_fastfood3\templates\_partials\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6181adcf798d85_39580512',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd55ed38dd46bc1e43fe79f1d73f980c8092bbab4' => 
    array (
      0 => 'C:\\wamp64\\www\\susu\\themes\\theme_ecolife_fastfood3\\templates\\_partials\\header.tpl',
      1 => 1633613616,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6181adcf798d85_39580512 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18446998586181adcf758ce8_56033722', 'header_banner');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15196911766181adcf760582_95989894', 'header_nav');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12659797676181adcf7736e2_32719238', 'header_top');
?>

<?php }
/* {block 'header_banner'} */
class Block_18446998586181adcf758ce8_56033722 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_banner' => 
  array (
    0 => 'Block_18446998586181adcf758ce8_56033722',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="header-banner">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBanner'),$_smarty_tpl ) );?>

</div>
<?php
}
}
/* {/block 'header_banner'} */
/* {block 'header_nav'} */
class Block_15196911766181adcf760582_95989894 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_15196911766181adcf760582_95989894',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<nav class="header-nav">
	<div class="container">
		<div class="hidden-md-down">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav'),$_smarty_tpl ) );?>

		</div>
	</div>
	<div class="container">
		<div class="hidden-lg-up  mobile">
			<div class="row row-mobile">
				<div class="col-mobile col-md-4 col-xs-4">
					<div class="float-xs-left" id="menu-icon">
						<i class="ion-android-menu"></i>
					</div>
					<div id="mobile_top_menu_wrapper" class="row hidden-lg-up" style="display:none;">
						<div class="top-header-mobile">	
							<div id="_mobile_stores_link"></div>		
							<div id="_mobile_contact_link"></div>
							<div id="_mobile_compare"></div>
							<div id="_mobile_wishtlist"></div>
						</div>			
						<div class="menu-close"> 
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'menu','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
 <i class="material-icons float-xs-right">arrow_back</i>
						</div>
						<div class="menu-tabs">							
							<div class="js-top-menu-bottom">												
								<div id="_mobile_megamenu"></div>							
							</div>
							
						</div>
					 </div>
				</div>
				<div class="col-mobile col-md-4 col-xs-4 mobile-center">
					<div class="top-logo" id="_mobile_logo"></div>
				</div>
				<div class="col-mobile col-md-4 col-xs-4 mobile-right">
					<div id="_mobile_cart_block"></div>
					<div id="_mobile_user_info"></div>
				</div>
			</div>
			<div id="_mobile_search_category"></div>
		</div>
	</div>
</nav>
<?php
}
}
/* {/block 'header_nav'} */
/* {block 'header_top'} */
class Block_12659797676181adcf7736e2_32719238 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_12659797676181adcf7736e2_32719238',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="header-top hidden-md-down">
	<div class="container">
		<div class="row">
			<div class="col col-left col-md-5">
			<span>Cuisine itinérante & de partage</span>
			</div>
			<div class="col col-center col-md-2" id="_desktop_logo">
				<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
				<img class="logo img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
				</a>
				<?php } else { ?>
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
				<img class="logo img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
				</a>
				<?php }?>
			</div>
			<div class=" col col-right col-md-5 position-static"> 	
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop'),$_smarty_tpl ) );?>

			</div>
		</div>
	</div>

</div>
<div class="header-bottom hidden-md-down">
	<div class="container">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaymegamenu'),$_smarty_tpl ) );?>

	</div>
</div>
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'header_top'} */
}
