<?php
/* Smarty version 3.1.33, created on 2020-04-16 19:47:57
  from '/home/aayurshoppy/public_html/admin019om8crn/themes/default/template/controllers/orders/_print_pdf_icon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e98691559cbf8_43232225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca18e638edceb72208cb54a5ffc1311751584ce0' => 
    array (
      0 => '/home/aayurshoppy/public_html/admin019om8crn/themes/default/template/controllers/orders/_print_pdf_icon.tpl',
      1 => 1587018584,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e98691559cbf8_43232225 (Smarty_Internal_Template $_smarty_tpl) {
?>
<span class="btn-group-action">
	<span class="btn-group">
	<?php if (Configuration::get('PS_INVOICE') && $_smarty_tpl->tpl_vars['order']->value->invoice_number) {?>
		<a class="btn btn-default _blank" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf',true,array(),array('submitAction'=>'generateInvoicePDF','id_order'=>$_smarty_tpl->tpl_vars['order']->value->id)),'html','UTF-8' ));?>
">
			<i class="icon-file-text"></i>
		</a>
	<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['order']->value->delivery_number) {?>
		<a class="btn btn-default _blank" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf',true,array(),array('submitAction'=>'generateDeliverySlipPDF','id_order'=>$_smarty_tpl->tpl_vars['order']->value->id)),'html','UTF-8' ));?>
">
			<i class="icon-truck"></i>
		</a>
	<?php }?>
	</span>
</span>
<?php }
}
