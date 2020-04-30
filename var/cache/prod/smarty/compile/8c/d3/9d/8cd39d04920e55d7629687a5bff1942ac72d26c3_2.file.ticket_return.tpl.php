<?php
/* Smarty version 3.1.33, created on 2020-04-27 10:35:44
  from '/home2/tuquidel/public_html/ecommerce/modules/mercadopago/views/templates/hook/seven/ticket_return.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ea6fbd01e2392_74514136',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8cd39d04920e55d7629687a5bff1942ac72d26c3' => 
    array (
      0 => '/home2/tuquidel/public_html/ecommerce/modules/mercadopago/views/templates/hook/seven/ticket_return.tpl',
      1 => 1587878757,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea6fbd01e2392_74514136 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['ticket_url']->value != null) {?>
    <div class="row">
        <div class="col-md-12">
            <div class="mp-ticket-return">

                <h2 class="ticket-return-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Thank you for your purchase! We are awaiting the payment.','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</h2>

                <div class="row mp-ticket-frame">
                    <div class="col-md-12 mp-hg-100">
                        <iframe src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ticket_url']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" id="ticket-frame" name="ticket-frame">
                            <div class="lightbox" id="text">
                                <div class="box">
                                    <div class="content">
                                        <div class="processing">
                                            <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Processing...','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </iframe>
                    </div>

                    <div class="col-md-12">
                        <a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ticket_url']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" target="_blank" class="btn btn-primary">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Print ticket','mod'=>'mercadopago'),$_smarty_tpl ) );?>

                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
<?php }
}
}
