<?php
/* Smarty version 3.1.39, created on 2021-11-02 22:30:11
  from 'C:\wamp64\www\susu\themes\theme_ecolife_fastfood3\templates\catalog\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6181ade3066ce5_60981058',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f1c38176d6880e50a286530e553beee64e40fc6' => 
    array (
      0 => 'C:\\wamp64\\www\\susu\\themes\\theme_ecolife_fastfood3\\templates\\catalog\\product.tpl',
      1 => 1633611503,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-cover-thumbnails.tpl' => 1,
    'file:catalog/_partials/product-prices.tpl' => 1,
    'file:catalog/_partials/product-customization.tpl' => 1,
    'file:catalog/_partials/product-variants.tpl' => 1,
    'file:catalog/_partials/miniatures/pack-product.tpl' => 1,
    'file:catalog/_partials/product-discounts.tpl' => 1,
    'file:catalog/_partials/product-add-to-cart.tpl' => 1,
    'file:catalog/_partials/product-additional-info.tpl' => 1,
    'file:catalog/_partials/product-details.tpl' => 1,
    'file:catalog/_partials/product-images-modal.tpl' => 1,
  ),
),false)) {
function content_6181ade3066ce5_60981058 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14756852246181ade2e056b2_31250104', 'head_seo');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8467812246181ade2e0fd84_85482889', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6465083896181ade2e44710_47078975', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'head_seo'} */
class Block_14756852246181ade2e056b2_31250104 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_14756852246181ade2e056b2_31250104',
  ),
);
public $prepend = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['canonical_url'], ENT_QUOTES, 'UTF-8');?>
">
<?php
}
}
/* {/block 'head_seo'} */
/* {block 'head'} */
class Block_8467812246181ade2e0fd84_85482889 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_8467812246181ade2e0fd84_85482889',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <meta property="og:type" content="product">
  <meta property="og:url" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="og:site_name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="og:description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="og:image" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="product:pretax_price:amount" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_tax_exc'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="product:pretax_price:currency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="product:price:amount" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="product:price:currency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
  <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['weight'])) && ($_smarty_tpl->tpl_vars['product']->value['weight'] != 0)) {?>
  <meta property="product:weight:value" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['weight'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="product:weight:units" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['weight_unit'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }
}
}
/* {/block 'head'} */
/* {block 'product_cover_thumbnails'} */
class Block_15610037766181ade2e56181_26975272 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
              <?php
}
}
/* {/block 'product_cover_thumbnails'} */
/* {block 'page_content'} */
class Block_1720556226181ade2e538d8_29023427 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15610037766181ade2e56181_26975272', 'product_cover_thumbnails', $this->tplIndex);
?>
           
            <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_21268765416181ade2e506f4_54177090 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <section class="page-content" id="content">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1720556226181ade2e538d8_29023427', 'page_content', $this->tplIndex);
?>

          </section>
        <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_title'} */
class Block_11765308376181ade2e6c502_38585585 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_6526321966181ade2e6a357_57413264 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					  <h1 class="h1 namne_details" itemprop="name"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11765308376181ade2e6c502_38585585', 'page_title', $this->tplIndex);
?>
</h1>
					<?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_20650503166181ade2e68196_70337601 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6526321966181ade2e6a357_57413264', 'page_header', $this->tplIndex);
?>

				<?php
}
}
/* {/block 'page_header_container'} */
/* {block 'product_prices'} */
class Block_21324636196181ade2e82d12_27828653 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			  <?php
}
}
/* {/block 'product_prices'} */
/* {block 'product_description_short'} */
class Block_6424419346181ade2e87d58_61782285 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				  <div id="product-description-short-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="product-description-short" itemprop="description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
				<?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_customization'} */
class Block_6632978936181ade2e975e1_82428016 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/product-customization.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('customizations'=>$_smarty_tpl->tpl_vars['product']->value['customizations']), 0, false);
?>
				  <?php
}
}
/* {/block 'product_customization'} */
/* {block 'product_variants'} */
class Block_6615834116181ade2eae5c4_44972850 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-variants.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
					  <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_miniature'} */
class Block_14885606066181ade2ec8cd9_27442680 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/pack-product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_pack']->value), 0, true);
?>
							  <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_pack'} */
class Block_12382400386181ade2eb4892_93861053 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<?php if ($_smarty_tpl->tpl_vars['packItems']->value) {?>
						  <section class="product-pack">
							<p class="h4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This pack contains','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packItems']->value, 'product_pack');
$_smarty_tpl->tpl_vars['product_pack']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_pack']->value) {
$_smarty_tpl->tpl_vars['product_pack']->do_else = false;
?>
							  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14885606066181ade2ec8cd9_27442680', 'product_miniature', $this->tplIndex);
?>

							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</section>
						<?php }?>
					  <?php
}
}
/* {/block 'product_pack'} */
/* {block 'product_discounts'} */
class Block_3238960586181ade2eda246_07132555 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-discounts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
					  <?php
}
}
/* {/block 'product_discounts'} */
/* {block 'product_add_to_cart'} */
class Block_10632038256181ade2ee4a82_73308936 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-add-to-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
					  <?php
}
}
/* {/block 'product_add_to_cart'} */
/* {block 'product_additional_info'} */
class Block_18132499316181ade2ee9886_12562597 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-additional-info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
					  <?php
}
}
/* {/block 'product_additional_info'} */
/* {block 'product_refresh'} */
class Block_5440999526181ade2eeebc6_46386377 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'product_refresh'} */
/* {block 'product_buy'} */
class Block_10490732036181ade2ea2478_28371589 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" id="add-to-cart-or-refresh">
					  <input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
					  <input type="hidden" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" id="product_page_product_id">
					  <input type="hidden" name="id_customization" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
" id="product_customization_id">

					  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6615834116181ade2eae5c4_44972850', 'product_variants', $this->tplIndex);
?>


					  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12382400386181ade2eb4892_93861053', 'product_pack', $this->tplIndex);
?>


					  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3238960586181ade2eda246_07132555', 'product_discounts', $this->tplIndex);
?>


					  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10632038256181ade2ee4a82_73308936', 'product_add_to_cart', $this->tplIndex);
?>


					  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18132499316181ade2ee9886_12562597', 'product_additional_info', $this->tplIndex);
?>


					  					  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5440999526181ade2eeebc6_46386377', 'product_refresh', $this->tplIndex);
?>

					</form>
				  <?php
}
}
/* {/block 'product_buy'} */
/* {block 'hook_display_reassurance'} */
class Block_2629344866181ade2ef3411_95611540 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

				<?php
}
}
/* {/block 'hook_display_reassurance'} */
/* {block 'product_description'} */
class Block_67941316181ade2f3ba98_48367232 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                     <div class="product-description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</div>
                   <?php
}
}
/* {/block 'product_description'} */
/* {block 'product_details'} */
class Block_15197468776181ade30001e3_21073769 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                   <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-details.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                 <?php
}
}
/* {/block 'product_details'} */
/* {block 'product_attachments'} */
class Block_16274891566181ade3006ba9_47926413 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                   <?php if ($_smarty_tpl->tpl_vars['product']->value['attachments']) {?>
                    <div class="tab-pane fade in" id="attachments" role="tabpanel">
                       <section class="product-attachments">
                         <p class="h5 text-uppercase"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</p>
                         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['attachments'], 'attachment');
$_smarty_tpl->tpl_vars['attachment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['attachment']->value) {
$_smarty_tpl->tpl_vars['attachment']->do_else = false;
?>
                           <div class="attachment">
                             <h4><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'attachment','params'=>array('id_attachment'=>$_smarty_tpl->tpl_vars['attachment']->value['id_attachment'])),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></h4>
                             <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value['description'], ENT_QUOTES, 'UTF-8');?>
</p
                             <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'attachment','params'=>array('id_attachment'=>$_smarty_tpl->tpl_vars['attachment']->value['id_attachment'])),$_smarty_tpl ) );?>
">
                               <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
 (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value['file_size_formatted'], ENT_QUOTES, 'UTF-8');?>
)
                             </a>
                           </div>
                         <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                       </section>
                     </div>
                   <?php }?>
                 <?php
}
}
/* {/block 'product_attachments'} */
/* {block 'product_tabs'} */
class Block_14069962456181ade2ef82d1_78961111 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="tabs <?php if ($_smarty_tpl->tpl_vars['postheme']->value['product_infotab'] == 1) {?>tabs-left<?php } elseif ($_smarty_tpl->tpl_vars['postheme']->value['product_infotab'] == 2) {?> tabs-right <?php }?>">  
                <ul class="nav nav-tabs" role="tablist">
                  <?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?>
                    <li class="nav-item">
                       <a
                         class="nav-link<?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?> active<?php }?>"
                         data-toggle="tab"
                         href="#description"
                         role="tab"
                         aria-controls="description"
                         <?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?> aria-selected="true"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Description','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a>
                    </li>
                  <?php }?>
                  <li class="nav-item">
                    <a
                      class="nav-link<?php if (!$_smarty_tpl->tpl_vars['product']->value['description']) {?> active<?php }?>"
                      data-toggle="tab"
                      href="#product-details"
                      role="tab"
                      aria-controls="product-details"
                      <?php if (!$_smarty_tpl->tpl_vars['product']->value['description']) {?> aria-selected="true"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Details','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a>
                  </li>
				  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'ProductTab'),$_smarty_tpl ) );?>

                  <?php if ($_smarty_tpl->tpl_vars['product']->value['attachments']) {?>
                    <li class="nav-item">
                      <a
                        class="nav-link"
                        data-toggle="tab"
                        href="#attachments"
                        role="tab"
                        aria-controls="attachments"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Attachments','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a>
                    </li>
                  <?php }?>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['extraContent'], 'extra', false, 'extraKey');
$_smarty_tpl->tpl_vars['extra']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['extraKey']->value => $_smarty_tpl->tpl_vars['extra']->value) {
$_smarty_tpl->tpl_vars['extra']->do_else = false;
?>
                    <li class="nav-item">
                      <a
                        class="nav-link"
                        data-toggle="tab"
                        href="#extra-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
"
                        role="tab"
                        aria-controls="extra-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a>
                    </li>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>

                <div class="tab-content" id="tab-content">
                 <div class="tab-pane fade in<?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?> active<?php }?>" id="description" role="tabpanel">
                   <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_67941316181ade2f3ba98_48367232', 'product_description', $this->tplIndex);
?>

                 </div>

                 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15197468776181ade30001e3_21073769', 'product_details', $this->tplIndex);
?>

				<div class="tab-pane fade in" id="idTab5">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'ProductTabContent'),$_smarty_tpl ) );?>

				</div>	
                 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16274891566181ade3006ba9_47926413', 'product_attachments', $this->tplIndex);
?>


                 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['extraContent'], 'extra', false, 'extraKey');
$_smarty_tpl->tpl_vars['extra']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['extraKey']->value => $_smarty_tpl->tpl_vars['extra']->value) {
$_smarty_tpl->tpl_vars['extra']->do_else = false;
?>
                 <div class="tab-pane fade in <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra']->value['attr']['class'], ENT_QUOTES, 'UTF-8');?>
" id="extra-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
" role="tabpanel" <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['extra']->value['attr'], 'val', false, 'key');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['val']->value, ENT_QUOTES, 'UTF-8');?>
"<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>>
                   <?php echo $_smarty_tpl->tpl_vars['extra']->value['content'];?>

                 </div>
                 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>  
            </div>
          <?php
}
}
/* {/block 'product_tabs'} */
/* {block 'product_images_modal'} */
class Block_5097558916181ade3058190_48217792 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-images-modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'product_images_modal'} */
/* {block 'page_footer'} */
class Block_14157406066181ade3060761_75391705 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_7337490526181ade305e8e9_41360758 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14157406066181ade3060761_75391705', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_6465083896181ade2e44710_47078975 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6465083896181ade2e44710_47078975',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_21268765416181ade2e506f4_54177090',
  ),
  'page_content' => 
  array (
    0 => 'Block_1720556226181ade2e538d8_29023427',
  ),
  'product_cover_thumbnails' => 
  array (
    0 => 'Block_15610037766181ade2e56181_26975272',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_20650503166181ade2e68196_70337601',
  ),
  'page_header' => 
  array (
    0 => 'Block_6526321966181ade2e6a357_57413264',
  ),
  'page_title' => 
  array (
    0 => 'Block_11765308376181ade2e6c502_38585585',
  ),
  'product_prices' => 
  array (
    0 => 'Block_21324636196181ade2e82d12_27828653',
  ),
  'product_description_short' => 
  array (
    0 => 'Block_6424419346181ade2e87d58_61782285',
  ),
  'product_customization' => 
  array (
    0 => 'Block_6632978936181ade2e975e1_82428016',
  ),
  'product_buy' => 
  array (
    0 => 'Block_10490732036181ade2ea2478_28371589',
  ),
  'product_variants' => 
  array (
    0 => 'Block_6615834116181ade2eae5c4_44972850',
  ),
  'product_pack' => 
  array (
    0 => 'Block_12382400386181ade2eb4892_93861053',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_14885606066181ade2ec8cd9_27442680',
  ),
  'product_discounts' => 
  array (
    0 => 'Block_3238960586181ade2eda246_07132555',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_10632038256181ade2ee4a82_73308936',
  ),
  'product_additional_info' => 
  array (
    0 => 'Block_18132499316181ade2ee9886_12562597',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_5440999526181ade2eeebc6_46386377',
  ),
  'hook_display_reassurance' => 
  array (
    0 => 'Block_2629344866181ade2ef3411_95611540',
  ),
  'product_tabs' => 
  array (
    0 => 'Block_14069962456181ade2ef82d1_78961111',
  ),
  'product_description' => 
  array (
    0 => 'Block_67941316181ade2f3ba98_48367232',
  ),
  'product_details' => 
  array (
    0 => 'Block_15197468776181ade30001e3_21073769',
  ),
  'product_attachments' => 
  array (
    0 => 'Block_16274891566181ade3006ba9_47926413',
  ),
  'product_images_modal' => 
  array (
    0 => 'Block_5097558916181ade3058190_48217792',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_7337490526181ade305e8e9_41360758',
  ),
  'page_footer' => 
  array (
    0 => 'Block_14157406066181ade3060761_75391705',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main" itemscope itemtype="https://schema.org/Product">
    <meta itemprop="url" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
">

    <div class="row">
      <div class="<?php if ($_smarty_tpl->tpl_vars['postheme']->value['product_thumbnail'] == 0) {?>col-md-6 <?php } else { ?> col-md-6 <?php }?>">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21268765416181ade2e506f4_54177090', 'page_content_container', $this->tplIndex);
?>

        </div>
        <div class="<?php if ($_smarty_tpl->tpl_vars['postheme']->value['product_thumbnail'] == 0) {?>col-md-6 <?php } else { ?> col-md-6 <?php }?>">
			<div class="content_info">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20650503166181ade2e68196_70337601', 'page_header_container', $this->tplIndex);
?>

				<p class="reference"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reference','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
:<span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['reference'], ENT_QUOTES, 'UTF-8');?>
</span></p>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'DisplayReviewsProduct'),$_smarty_tpl ) );?>

			  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21324636196181ade2e82d12_27828653', 'product_prices', $this->tplIndex);
?>


			  <div class="product-information">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6424419346181ade2e87d58_61782285', 'product_description_short', $this->tplIndex);
?>


				<?php if ($_smarty_tpl->tpl_vars['product']->value['is_customizable'] && count($_smarty_tpl->tpl_vars['product']->value['customizations']['fields'])) {?>
				  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6632978936181ade2e975e1_82428016', 'product_customization', $this->tplIndex);
?>

				<?php }?>

				<div class="product-actions">
				  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10490732036181ade2ea2478_28371589', 'product_buy', $this->tplIndex);
?>


				</div>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2629344866181ade2ef3411_95611540', 'hook_display_reassurance', $this->tplIndex);
?>
 
			</div>
		  </div>
      </div>
    </div>
	<div class="row">
		<div class="col-xs-12">
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14069962456181ade2ef82d1_78961111', 'product_tabs', $this->tplIndex);
?>

		</div>
	</div>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5097558916181ade3058190_48217792', 'product_images_modal', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7337490526181ade305e8e9_41360758', 'page_footer_container', $this->tplIndex);
?>

	<?php echo '<script'; ?>
>
	
	<?php echo '</script'; ?>
>
  </section>

<?php
}
}
/* {/block 'content'} */
}
