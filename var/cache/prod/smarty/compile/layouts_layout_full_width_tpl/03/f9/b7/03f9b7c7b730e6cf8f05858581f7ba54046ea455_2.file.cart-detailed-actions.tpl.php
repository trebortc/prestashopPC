<?php
/* Smarty version 3.1.32, created on 2018-07-30 09:48:36
  from 'C:\xampp\htdocs\prestashopcompu\themes\classic\templates\checkout\_partials\cart-detailed-actions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b5ec2d49de154_96358267',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03f9b7c7b730e6cf8f05858581f7ba54046ea455' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashopcompu\\themes\\classic\\templates\\checkout\\_partials\\cart-detailed-actions.tpl',
      1 => 1532408136,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b5ec2d49de154_96358267 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_142529015b5ec2d49d7ef6_85403215', 'cart_detailed_actions');
?>

<?php }
/* {block 'cart_detailed_actions'} */
class Block_142529015b5ec2d49d7ef6_85403215 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_detailed_actions' => 
  array (
    0 => 'Block_142529015b5ec2d49d7ef6_85403215',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="checkout cart-detailed-actions card-block">
    <?php if ($_smarty_tpl->tpl_vars['cart']->value['minimalPurchaseRequired']) {?>
      <div class="alert alert-warning" role="alert">
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['minimalPurchaseRequired'], ENT_QUOTES, 'UTF-8');?>

      </div>
      <div class="text-sm-center">
        <button type="button" class="btn btn-primary disabled" disabled><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Proceed to checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</button>
      </div>
    <?php } elseif (empty($_smarty_tpl->tpl_vars['cart']->value['products'])) {?>
      <div class="text-sm-center">
        <button type="button" class="btn btn-primary disabled" disabled><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Proceed to checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</button>
      </div>
    <?php } else { ?>
      <div class="text-sm-center">
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['order'], ENT_QUOTES, 'UTF-8');?>
" class="btn btn-primary"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Proceed to checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayExpressCheckout'),$_smarty_tpl ) );?>

      </div>
    <?php }?>
  </div>
<?php
}
}
/* {/block 'cart_detailed_actions'} */
}
