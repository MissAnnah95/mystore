<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-01 21:13:50
  from 'C:\xampp\htdocs\mystore\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_603d2ede3bde58_35725568',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75f52204a3ba71fbaf2f8ef9f5b22e0807f98190' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mystore\\themes\\classic\\templates\\index.tpl',
      1 => 1613657793,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_603d2ede3bde58_35725568 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1086724028603d2ede3b6ab8_87187490', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_1366175487603d2ede3b7bc8_58738034 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_1939451254603d2ede3ba452_24680865 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_906088148603d2ede3b9392_57250593 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1939451254603d2ede3ba452_24680865', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1086724028603d2ede3b6ab8_87187490 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_1086724028603d2ede3b6ab8_87187490',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1366175487603d2ede3b7bc8_58738034',
  ),
  'page_content' => 
  array (
    0 => 'Block_906088148603d2ede3b9392_57250593',
  ),
  'hook_home' => 
  array (
    0 => 'Block_1939451254603d2ede3ba452_24680865',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1366175487603d2ede3b7bc8_58738034', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_906088148603d2ede3b9392_57250593', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
