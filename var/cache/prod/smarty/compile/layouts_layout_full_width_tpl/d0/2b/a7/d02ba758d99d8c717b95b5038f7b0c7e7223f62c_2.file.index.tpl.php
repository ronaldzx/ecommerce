<?php
/* Smarty version 3.1.33, created on 2020-04-26 16:01:20
  from '/home2/tuquidel/public_html/ecommerce/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ea5f6a0450944_50751741',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd02ba758d99d8c717b95b5038f7b0c7e7223f62c' => 
    array (
      0 => '/home2/tuquidel/public_html/ecommerce/themes/classic/templates/index.tpl',
      1 => 1587040546,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea5f6a0450944_50751741 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16903720015ea5f6a0449370_00537964', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_20276263705ea5f6a044a4f4_64226777 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_18087338655ea5f6a044cd89_58221050 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_3201198095ea5f6a044bea6_66707483 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18087338655ea5f6a044cd89_58221050', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_16903720015ea5f6a0449370_00537964 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_16903720015ea5f6a0449370_00537964',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_20276263705ea5f6a044a4f4_64226777',
  ),
  'page_content' => 
  array (
    0 => 'Block_3201198095ea5f6a044bea6_66707483',
  ),
  'hook_home' => 
  array (
    0 => 'Block_18087338655ea5f6a044cd89_58221050',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20276263705ea5f6a044a4f4_64226777', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3201198095ea5f6a044bea6_66707483', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
