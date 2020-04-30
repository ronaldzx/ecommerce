<?php
/* Smarty version 3.1.33, created on 2020-04-26 16:02:04
  from '/home2/tuquidel/public_html/ecommerce/themes/classic/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ea5f6cc675b84_31730745',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a577836df3217b18148badddcd79e2b80d47dd5' => 
    array (
      0 => '/home2/tuquidel/public_html/ecommerce/themes/classic/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1587040546,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea5f6cc675b84_31730745 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
