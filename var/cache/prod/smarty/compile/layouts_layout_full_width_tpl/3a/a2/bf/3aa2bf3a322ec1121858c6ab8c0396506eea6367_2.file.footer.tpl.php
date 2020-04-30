<?php
/* Smarty version 3.1.33, created on 2020-04-26 16:04:30
  from '/home2/tuquidel/public_html/ecommerce/themes/classic/templates/checkout/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ea5f75e66da21_22854626',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3aa2bf3a322ec1121858c6ab8c0396506eea6367' => 
    array (
      0 => '/home2/tuquidel/public_html/ecommerce/themes/classic/templates/checkout/_partials/footer.tpl',
      1 => 1587040546,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea5f75e66da21_22854626 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12901268595ea5f75e6682c3_92436184', 'footer');
?>

<?php }
/* {block 'footer'} */
class Block_12901268595ea5f75e6682c3_92436184 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_12901268595ea5f75e6682c3_92436184',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="text-sm-center">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop™','%year%'=>date('Y'),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

</div>
<?php
}
}
/* {/block 'footer'} */
}
