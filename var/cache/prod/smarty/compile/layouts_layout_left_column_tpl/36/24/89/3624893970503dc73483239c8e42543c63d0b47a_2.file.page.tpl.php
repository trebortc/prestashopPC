<?php
/* Smarty version 3.1.32, created on 2018-07-30 09:49:11
  from 'C:\xampp\htdocs\prestashopcompu\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b5ec2f7e97d31_09457581',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3624893970503dc73483239c8e42543c63d0b47a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashopcompu\\themes\\classic\\templates\\page.tpl',
      1 => 1532408136,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b5ec2f7e97d31_09457581 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9821164015b5ec2f7e8eca2_32150034', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_14851253825b5ec2f7e90561_38737211 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_16544809825b5ec2f7e8f8f3_98942128 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14851253825b5ec2f7e90561_38737211', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_10636387985b5ec2f7e94af0_85446418 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_17545171125b5ec2f7e95527_00626111 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_17260098915b5ec2f7e94383_44882412 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10636387985b5ec2f7e94af0_85446418', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17545171125b5ec2f7e95527_00626111', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_467429855b5ec2f7e96ba4_11408938 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_13678484455b5ec2f7e96457_93998049 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_467429855b5ec2f7e96ba4_11408938', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_9821164015b5ec2f7e8eca2_32150034 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9821164015b5ec2f7e8eca2_32150034',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_16544809825b5ec2f7e8f8f3_98942128',
  ),
  'page_title' => 
  array (
    0 => 'Block_14851253825b5ec2f7e90561_38737211',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_17260098915b5ec2f7e94383_44882412',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_10636387985b5ec2f7e94af0_85446418',
  ),
  'page_content' => 
  array (
    0 => 'Block_17545171125b5ec2f7e95527_00626111',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_13678484455b5ec2f7e96457_93998049',
  ),
  'page_footer' => 
  array (
    0 => 'Block_467429855b5ec2f7e96ba4_11408938',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16544809825b5ec2f7e8f8f3_98942128', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17260098915b5ec2f7e94383_44882412', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13678484455b5ec2f7e96457_93998049', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
