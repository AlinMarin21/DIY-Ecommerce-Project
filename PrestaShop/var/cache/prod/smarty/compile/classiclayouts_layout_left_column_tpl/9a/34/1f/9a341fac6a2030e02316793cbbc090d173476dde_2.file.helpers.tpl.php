<?php
/* Smarty version 3.1.43, created on 2022-11-12 10:21:04
  from 'E:\Alin\Xampp\htdocs\PrestaShop\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_636f5770c2b355_58428691',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a341fac6a2030e02316793cbbc090d173476dde' => 
    array (
      0 => 'E:\\Alin\\Xampp\\htdocs\\PrestaShop\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1658334665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636f5770c2b355_58428691 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'E:\\Alin\\Xampp\\htdocs\\PrestaShop\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_left_column_tpl\\9a\\34\\1f\\9a341fac6a2030e02316793cbbc090d173476dde_2.file.helpers.tpl.php',
    'uid' => '9a341fac6a2030e02316793cbbc090d173476dde',
    'call_name' => 'smarty_template_function_renderLogo_2006071441636f5770c15332_60632500',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_2006071441636f5770c15332_60632500 */
if (!function_exists('smarty_template_function_renderLogo_2006071441636f5770c15332_60632500')) {
function smarty_template_function_renderLogo_2006071441636f5770c15332_60632500(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_2006071441636f5770c15332_60632500 */
}
