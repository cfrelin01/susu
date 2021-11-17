<?php
/* Smarty version 3.1.39, created on 2021-11-02 22:30:02
  from 'C:\wamp64\www\susu\themes\theme_ecolife_fastfood3\templates\catalog\_partials\products-top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6181adda3c4c91_50364310',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '471c4d13d6f8720a3cf3050a8577e047f1b5b193' => 
    array (
      0 => 'C:\\wamp64\\www\\susu\\themes\\theme_ecolife_fastfood3\\templates\\catalog\\_partials\\products-top.tpl',
      1 => 1633611503,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/sort-orders.tpl' => 1,
  ),
),false)) {
function content_6181adda3c4c91_50364310 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="js-product-list-top" class=" products-selection">
<div class="row">
  <div class="col-md-6 total-products">
    <ul class="display">
		<li id="grid"> <i class="fa fa-th show_grid"></i></li>
		<li id="list"> <i class="fa fa-list show_list"></i></li>
	</ul>
    <?php if ($_smarty_tpl->tpl_vars['listing']->value['pagination']['total_items'] > 1) {?>
      <p class="hidden-sm-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are %product_count% products.','d'=>'Shop.Theme.Catalog','sprintf'=>array('%product_count%'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']['total_items'])),$_smarty_tpl ) );?>
</p>
    <?php } elseif ($_smarty_tpl->tpl_vars['listing']->value['pagination']['total_items'] > 0) {?>
      <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There is 1 product.','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
    <?php }?>
  </div>
  <div class="col-md-6">
    <div class="row sort-by-row">

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6449729596181adda3a89e8_93992206', 'sort_by');
?>


      <?php if (!empty($_smarty_tpl->tpl_vars['listing']->value['rendered_facets'])) {?>
        <div class="col-sm-6 col-xs-4 hidden-md-up filter-button">
          <button id="search_filter_toggler" class="btn btn-secondary" href="#search_filters_wrapper">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

          </button>
        </div>
      <?php }?>
    </div>
  </div>

</div>
</div>
<?php }
/* {block 'sort_by'} */
class Block_6449729596181adda3a89e8_93992206 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sort_by' => 
  array (
    0 => 'Block_6449729596181adda3a89e8_93992206',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/sort-orders.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sort_orders'=>$_smarty_tpl->tpl_vars['listing']->value['sort_orders']), 0, false);
?>
      <?php
}
}
/* {/block 'sort_by'} */
}
