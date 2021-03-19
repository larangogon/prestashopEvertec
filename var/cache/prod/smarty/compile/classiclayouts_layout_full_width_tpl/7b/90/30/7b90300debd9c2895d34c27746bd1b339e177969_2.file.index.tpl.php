<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-19 12:38:50
  from 'C:\laragon\www\prestashopEvertec\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6054e1aa08e838_37577735',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b90300debd9c2895d34c27746bd1b339e177969' => 
    array (
      0 => 'C:\\laragon\\www\\prestashopEvertec\\themes\\classic\\templates\\index.tpl',
      1 => 1616173795,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6054e1aa08e838_37577735 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_373949736054e1aa08c0e6_42849741', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_14591913896054e1aa08c710_46135082 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_5868964326054e1aa08d490_72527055 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_11251340396054e1aa08cf81_00842582 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5868964326054e1aa08d490_72527055', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_373949736054e1aa08c0e6_42849741 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_373949736054e1aa08c0e6_42849741',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_14591913896054e1aa08c710_46135082',
  ),
  'page_content' => 
  array (
    0 => 'Block_11251340396054e1aa08cf81_00842582',
  ),
  'hook_home' => 
  array (
    0 => 'Block_5868964326054e1aa08d490_72527055',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14591913896054e1aa08c710_46135082', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11251340396054e1aa08cf81_00842582', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
