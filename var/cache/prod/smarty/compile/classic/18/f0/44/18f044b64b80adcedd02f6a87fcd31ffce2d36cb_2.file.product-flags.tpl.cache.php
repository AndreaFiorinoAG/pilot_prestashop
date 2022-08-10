<?php
/* Smarty version 3.1.43, created on 2022-08-09 14:46:59
  from 'C:\wamp64\www\prestashop_prod\themes\classic\templates\catalog\_partials\product-flags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62f265531a67d8_88239966',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18f044b64b80adcedd02f6a87fcd31ffce2d36cb' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop_prod\\themes\\classic\\templates\\catalog\\_partials\\product-flags.tpl',
      1 => 1659957222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62f265531a67d8_88239966 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '172301615362f2655319a590_82522357';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_148325026362f2655319d625_47302917', 'product_flags');
?>

<?php }
/* {block 'product_flags'} */
class Block_148325026362f2655319d625_47302917 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_flags' => 
  array (
    0 => 'Block_148325026362f2655319d625_47302917',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <ul class="product-flags js-product-flags">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
            <li class="product-flag <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php
}
}
/* {/block 'product_flags'} */
}
