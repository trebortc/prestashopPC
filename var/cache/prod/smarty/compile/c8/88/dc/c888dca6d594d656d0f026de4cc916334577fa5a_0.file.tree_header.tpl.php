<?php
/* Smarty version 3.1.32, created on 2018-08-06 04:37:11
  from 'C:\xampp\htdocs\prestashopcompu\admin458iojgqj\themes\default\template\helpers\tree\tree_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b67b4578272f6_30749282',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c888dca6d594d656d0f026de4cc916334577fa5a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashopcompu\\admin458iojgqj\\themes\\default\\template\\helpers\\tree\\tree_header.tpl',
      1 => 1532408130,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b67b4578272f6_30749282 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl ) );
}?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {
echo $_smarty_tpl->tpl_vars['toolbar']->value;
}?>
</div>
<?php }
}
