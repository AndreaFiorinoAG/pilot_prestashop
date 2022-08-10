<?php
/* Smarty version 3.1.43, created on 2022-08-09 14:46:59
  from 'C:\wamp64\www\prestashop_prod\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62f2655345a2b1_77275910',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54ce43432065357c1af562e8152ae2b8a2a8d298' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop_prod\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1659957223,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62f2655345a2b1_77275910 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\wamp64\\www\\prestashop_prod\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\54\\ce\\43\\54ce43432065357c1af562e8152ae2b8a2a8d298_2.file.helpers.tpl.php',
    'uid' => '54ce43432065357c1af562e8152ae2b8a2a8d298',
    'call_name' => 'smarty_template_function_renderLogo_166267312862f26553437fb1_10073710',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_166267312862f26553437fb1_10073710 */
if (!function_exists('smarty_template_function_renderLogo_166267312862f26553437fb1_10073710')) {
function smarty_template_function_renderLogo_166267312862f26553437fb1_10073710(Smarty_Internal_Template $_smarty_tpl,$params) {
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
/*/ smarty_template_function_renderLogo_166267312862f26553437fb1_10073710 */
}
