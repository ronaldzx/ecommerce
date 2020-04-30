<?php
/* Smarty version 3.1.33, created on 2020-04-27 09:23:51
  from '/home2/tuquidel/public_html/ecommerce/admin904sznie1/themes/default/template/controllers/addresses/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ea6eaf72d7329_02936688',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f18c38b2a69cb0ea8b18443561e78b44ee920eaa' => 
    array (
      0 => '/home2/tuquidel/public_html/ecommerce/admin904sznie1/themes/default/template/controllers/addresses/helpers/list/list_header.tpl',
      1 => 1587040546,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea6eaf72d7329_02936688 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13469210355ea6eaf72c8be2_05123928', 'override_header');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'override_header'} */
class Block_13469210355ea6eaf72c8be2_05123928 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_header' => 
  array (
    0 => 'Block_13469210355ea6eaf72c8be2_05123928',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['submit_form_ajax']->value) {?>
	<?php echo '<script'; ?>
 type="text/javascript">
		parent.getSummary();
		parent.$.fancybox.close();
	<?php echo '</script'; ?>
>
<?php }
}
}
/* {/block 'override_header'} */
}
