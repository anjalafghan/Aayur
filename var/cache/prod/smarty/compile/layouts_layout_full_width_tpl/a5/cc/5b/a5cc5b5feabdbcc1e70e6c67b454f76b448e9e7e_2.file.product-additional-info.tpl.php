<?php
/* Smarty version 3.1.33, created on 2020-04-16 15:05:23
  from '/home/aayurshoppy/public_html/themes/classic/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e9826db28cd71_62524808',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5cc5b5feabdbcc1e70e6c67b454f76b448e9e7e' => 
    array (
      0 => '/home/aayurshoppy/public_html/themes/classic/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1587018587,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e9826db28cd71_62524808 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
