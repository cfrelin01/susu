<?php
/* Smarty version 3.1.39, created on 2021-11-02 22:30:15
  from 'C:\wamp64\www\susu\themes\theme_ecolife_fastfood3\templates\catalog\_partials\product-images-modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6181ade745c8e5_08525344',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b53a3bead3323375848225062e4344c8259fd49' => 
    array (
      0 => 'C:\\wamp64\\www\\susu\\themes\\theme_ecolife_fastfood3\\templates\\catalog\\_partials\\product-images-modal.tpl',
      1 => 1633611503,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6181ade745c8e5_08525344 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="modal fade js-product-images-modal" id="product-modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <?php $_smarty_tpl->_assignInScope('imagesCount', count($_smarty_tpl->tpl_vars['product']->value['images']));?>
		 <div class="view-products">
			<figure>
			  <img class="js-modal-product-cover product-cover-modal" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['width'], ENT_QUOTES, 'UTF-8');?>
" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" itemprop="image">
			  <figcaption class="image-caption">
			  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10159416206181ade743e717_07138733', 'product_description_short');
?>

			</figcaption>
			</figure>
		</div>
        <aside id="thumbnails_modal">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7345344186181ade7444a62_13679907', 'product_images');
?>

        </aside>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

 <?php echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function() {
	  $('#product-modal #thumbnails_modal').slick({
	   slidesToShow: 1,
	   slidesToScroll: 1,
	   asNavFor: '.slider-for',
	   dots: true,
	   focusOnSelect: true
	 });
	
});
<?php echo '</script'; ?>
><?php }
/* {block 'product_description_short'} */
class Block_10159416206181ade743e717_07138733 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_description_short' => 
  array (
    0 => 'Block_10159416206181ade743e717_07138733',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<div id="product-description-short" itemprop="description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
			  <?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_images'} */
class Block_7345344186181ade7444a62_13679907 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_images' => 
  array (
    0 => 'Block_7345344186181ade7444a62_13679907',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
			  <div class="thumb-container">
				<img data-image-large-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['large']['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumb js-modal-thumb" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['medium']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['medium']['width'], ENT_QUOTES, 'UTF-8');?>
" itemprop="image">
			  </div>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <?php
}
}
/* {/block 'product_images'} */
}
