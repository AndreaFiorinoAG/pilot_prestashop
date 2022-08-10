<?php
/* Smarty version 3.1.43, created on 2022-08-09 14:45:47
  from 'C:\wamp64\www\prestashop_prod\modules\cronjobs\views\templates\admin\configure.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62f2650b5bef71_67065166',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '414406f8cb60e2dedce2d705f0b5221e4b7f8e07' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop_prod\\modules\\cronjobs\\views\\templates\\admin\\configure.tpl',
      1 => 1660052688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62f2650b5bef71_67065166 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel">
    <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'What does this module do?','mod'=>'cronjobs'),$_smarty_tpl ) );?>
</h3>
    <p>
        <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value ));?>
/logo.png" class="pull-left" id="cronjobs-logo" />
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Originally, cron is a Unix system tool that provides time-based job scheduling: you can create many cron jobs, which are then run periodically at fixed times, dates, or intervals.','mod'=>'cronjobs'),$_smarty_tpl ) );?>

        <br/>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This module provides you with a cron-like tool: you can create jobs which will call a given set of secure URLs to your PrestaShop store, thus triggering updates and other automated tasks.','mod'=>'cronjobs'),$_smarty_tpl ) );?>

    </p>
</div>
<?php }
}
