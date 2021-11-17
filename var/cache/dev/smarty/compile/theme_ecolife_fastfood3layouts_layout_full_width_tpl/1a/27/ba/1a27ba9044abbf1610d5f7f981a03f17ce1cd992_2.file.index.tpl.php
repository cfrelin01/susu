<?php
/* Smarty version 3.1.39, created on 2021-11-02 22:28:59
  from 'C:\wamp64\www\susu\themes\theme_ecolife_fastfood3\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6181ad9b4a4ea7_34236486',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a27ba9044abbf1610d5f7f981a03f17ce1cd992' => 
    array (
      0 => 'C:\\wamp64\\www\\susu\\themes\\theme_ecolife_fastfood3\\templates\\index.tpl',
      1 => 1633611503,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6181ad9b4a4ea7_34236486 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7765004206181ad9b47cac5_59053440', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_6917581086181ad9b483499_83697097 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_2405797896181ad9b495192_40379397 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_11852603606181ad9b48ef23_98514275 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2405797896181ad9b495192_40379397', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_7765004206181ad9b47cac5_59053440 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_7765004206181ad9b47cac5_59053440',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_6917581086181ad9b483499_83697097',
  ),
  'page_content' => 
  array (
    0 => 'Block_11852603606181ad9b48ef23_98514275',
  ),
  'hook_home' => 
  array (
    0 => 'Block_2405797896181ad9b495192_40379397',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6917581086181ad9b483499_83697097', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11852603606181ad9b48ef23_98514275', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
