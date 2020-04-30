<?php
/* Smarty version 3.1.33, created on 2020-04-26 16:04:54
  from 'module:mercadopagoviewstemplates' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ea5f77651d278_62667251',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07be23420d40c031b9dc25aa9c01f117a3f915af' => 
    array (
      0 => 'module:mercadopagoviewstemplates',
      1 => 1587878757,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea5f77651d278_62667251 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form id="mp_standard_checkout" class="mp-checkout-form" method="post" action="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['redirect']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
    <div class="row mp-frame-checkout-seven">

        <?php if (count($_smarty_tpl->tpl_vars['credit']->value) != 0) {?>
        <div class="col-xs-12 col-md-12 col-12">
            <div class="frame-tarjetas">
                <p class="mp-subtitle-standard-checkout">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Credit card','mod'=>'mercadopago'),$_smarty_tpl ) );?>

                    <span class="mp-badge-checkout">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Up to','mod'=>'mercadopago'),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['installments']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'installments','mod'=>'mercadopago'),$_smarty_tpl ) );?>

                    </span>
                </p>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['credit']->value, 'tarjeta');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tarjeta']->value) {
?>
                <img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tarjeta']->value['image'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="img-fluid mp-img-tarjetas" />
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
        <?php }?>

        <?php if (count($_smarty_tpl->tpl_vars['debit']->value) != 0) {?>
        <div class="col-xs-12 col-lg-6 col-md-6 col-12">
            <div class="frame-tarjetas">
                <p class="mp-subtitle-standard-checkout"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Debit card','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</p>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['debit']->value, 'tarjeta');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tarjeta']->value) {
?>
                <img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tarjeta']->value['image'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="img-fluid mp-img-tarjetas" />
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
        <?php }?>

        <?php if (count($_smarty_tpl->tpl_vars['ticket']->value) != 0) {?>
        <div class="col-xs-12 col-lg-6 col-md-6 col-12">
            <div class="frame-tarjetas">
                <p class="submp-title-checkout"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wire transfer','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</p>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ticket']->value, 'tarjeta');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tarjeta']->value) {
?>
                <img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tarjeta']->value['image'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="img-fluid mp-img-tarjetas" />
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['modal']->value != true && $_smarty_tpl->tpl_vars['preference']->value == '') {?>
        <div class="col-md-12 mp-pt-20">
            <div class="mp-redirect-frame">
                <img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
views/img/redirect_checkout.png" class="img-fluid" />
                <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'We take you to our site to complete the payment','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</p>
            </div>
        </div>
        <?php }?>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['modal']->value == true && $_smarty_tpl->tpl_vars['preference']->value != '') {?>
        <?php echo '<script'; ?>
 src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['modal_link']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" data-public-key="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['public_key']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" data-preference-id="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['preference']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo '</script'; ?>
>
    <?php }?>
</form>

<?php if ($_smarty_tpl->tpl_vars['count']->value == 0) {?>
    <style>
        .mp-frame-checkout-seven {
            padding: 0px;
        }
    </style>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['modal']->value == true && $_smarty_tpl->tpl_vars['preference']->value != '') {
echo '<script'; ?>
>
    var mercadopago_button = document.querySelector('.mercadopago-button');
    mercadopago_button.style.display = 'none';
    document.forms['mp_standard_checkout'].onsubmit = function () { 
        mercadopago_button.click();
        return false;
    }
<?php echo '</script'; ?>
>
<?php }
}
}
