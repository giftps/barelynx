<?php
/* Smarty version 4.3.4, created on 2024-07-29 20:42:47
  from 'C:\xampp7\htdocs\bareX\content\themes\default\templates\settings.addresses.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66a7fec7272710_75641411',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '291aa40100796c14ba26f6528a5f3e06a63770d7' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\bareX\\content\\themes\\default\\templates\\settings.addresses.tpl',
      1 => 1688841235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
    'file:_addresses.tpl' => 1,
  ),
),false)) {
function content_66a7fec7272710_75641411 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card-header with-icon">
  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"map",'class'=>"main-icon mr15",'width'=>"24px",'height'=>"24px"), 0, false);
?>
  <?php echo __("Your Addresses");?>

</div>
<div class="card-body">
  <?php $_smarty_tpl->_subTemplateRender('file:_addresses.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div><?php }
}
