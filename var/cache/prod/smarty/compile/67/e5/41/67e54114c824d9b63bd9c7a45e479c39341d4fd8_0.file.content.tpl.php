<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-01 21:29:39
  from 'C:\xampp\htdocs\mystore\admin874aevmn7\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_603d3293cf2e21_40960247',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67e54114c824d9b63bd9c7a45e479c39341d4fd8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mystore\\admin874aevmn7\\themes\\default\\template\\content.tpl',
      1 => 1613657793,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_603d3293cf2e21_40960247 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
