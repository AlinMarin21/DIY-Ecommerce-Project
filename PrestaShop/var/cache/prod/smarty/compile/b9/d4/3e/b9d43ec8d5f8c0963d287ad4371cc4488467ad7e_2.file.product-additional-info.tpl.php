<?php
/* Smarty version 3.1.43, created on 2022-12-11 17:56:28
  from 'E:\Alin\Xampp\htdocs\PrestaShop\themes\classic\templates\catalog\_partials\product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6395fdac632b61_48646718',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9d43ec8d5f8c0963d287ad4371cc4488467ad7e' => 
    array (
      0 => 'E:\\Alin\\Xampp\\htdocs\\PrestaShop\\themes\\classic\\templates\\catalog\\_partials\\product-additional-info.tpl',
      1 => 1658334665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6395fdac632b61_48646718 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info js-product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
