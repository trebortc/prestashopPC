<?php
/* Smarty version 3.1.32, created on 2018-08-04 14:49:17
  from 'C:\xampp\htdocs\prestashopcompu\themes\classic\templates\checkout\checkout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b65a0cdc56b95_72372935',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '344e27d8ad41b1472a116a08653d6ce65f2f2870' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashopcompu\\themes\\classic\\templates\\checkout\\checkout.tpl',
      1 => 1532408136,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/head.tpl' => 1,
    'file:checkout/_partials/header.tpl' => 1,
    'file:_partials/notifications.tpl' => 1,
    'file:checkout/_partials/cart-summary.tpl' => 1,
    'file:checkout/_partials/footer.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_5b65a0cdc56b95_72372935 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">

  <head>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10718726835b65a0cdc2afb5_78701436', 'head');
?>

  </head>

  <body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['body_classes'] )), ENT_QUOTES, 'UTF-8');?>
">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20920049225b65a0cdc3ac87_80916958', 'hook_after_body_opening_tag');
?>


    <header id="header">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21026908495b65a0cdc3f150_40637926', 'header');
?>

    </header>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3821006615b65a0cdc40481_81461628', 'notifications');
?>


    <section id="wrapper">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperTop"),$_smarty_tpl ) );?>

      <div class="container">

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_365829255b65a0cdc4b6a9_51980635', 'content');
?>

      </div>
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperBottom"),$_smarty_tpl ) );?>

    </section>

    <footer id="footer">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4139456145b65a0cdc52a81_84000816', 'footer');
?>

    </footer>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4100703875b65a0cdc53e29_71384215', 'javascript_bottom');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3041537435b65a0cdc55a48_91814722', 'hook_before_body_closing_tag');
?>


  </body>

</html>
<?php }
/* {block 'head'} */
class Block_10718726835b65a0cdc2afb5_78701436 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_10718726835b65a0cdc2afb5_78701436',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'head'} */
/* {block 'hook_after_body_opening_tag'} */
class Block_20920049225b65a0cdc3ac87_80916958 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_after_body_opening_tag' => 
  array (
    0 => 'Block_20920049225b65a0cdc3ac87_80916958',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_after_body_opening_tag'} */
/* {block 'header'} */
class Block_21026908495b65a0cdc3f150_40637926 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_21026908495b65a0cdc3f150_40637926',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'header'} */
/* {block 'notifications'} */
class Block_3821006615b65a0cdc40481_81461628 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_3821006615b65a0cdc40481_81461628',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'notifications'} */
/* {block 'cart_summary'} */
class Block_5161036625b65a0cdc4c262_64791847 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('file'=>'checkout/checkout-process.tpl','ui'=>$_smarty_tpl->tpl_vars['checkout_process']->value),$_smarty_tpl ) );?>

              <?php
}
}
/* {/block 'cart_summary'} */
/* {block 'cart_summary'} */
class Block_21189301975b65a0cdc4f727_59168807 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-summary.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
              <?php
}
}
/* {/block 'cart_summary'} */
/* {block 'content'} */
class Block_365829255b65a0cdc4b6a9_51980635 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_365829255b65a0cdc4b6a9_51980635',
  ),
  'cart_summary' => 
  array (
    0 => 'Block_5161036625b65a0cdc4c262_64791847',
    1 => 'Block_21189301975b65a0cdc4f727_59168807',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <section id="content">
          <div class="row">
            <div class="col-md-8">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5161036625b65a0cdc4c262_64791847', 'cart_summary', $this->tplIndex);
?>

            </div>
            <div class="col-md-4">

              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21189301975b65a0cdc4f727_59168807', 'cart_summary', $this->tplIndex);
?>


              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

            </div>
          </div>
        </section>
      <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_4139456145b65a0cdc52a81_84000816 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_4139456145b65a0cdc52a81_84000816',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'footer'} */
/* {block 'javascript_bottom'} */
class Block_4100703875b65a0cdc53e29_71384215 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
    0 => 'Block_4100703875b65a0cdc53e29_71384215',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, false);
?>
    <?php
}
}
/* {/block 'javascript_bottom'} */
/* {block 'hook_before_body_closing_tag'} */
class Block_3041537435b65a0cdc55a48_91814722 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_before_body_closing_tag' => 
  array (
    0 => 'Block_3041537435b65a0cdc55a48_91814722',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_before_body_closing_tag'} */
}
