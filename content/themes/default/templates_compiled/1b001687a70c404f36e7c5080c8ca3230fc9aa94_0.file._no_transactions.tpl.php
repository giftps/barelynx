<?php
/* Smarty version 4.3.4, created on 2024-07-15 21:22:42
  from 'C:\xampp7\htdocs\bareX\content\themes\default\templates\_no_transactions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66959322088a51_66764305',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b001687a70c404f36e7c5080c8ca3230fc9aa94' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\bareX\\content\\themes\\default\\templates\\_no_transactions.tpl',
      1 => 1685404429,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
  ),
),false)) {
function content_66959322088a51_66764305 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- no transaction -->
<div class="text-center text-muted">
  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"transaction",'class'=>"mb20",'width'=>"56px",'height'=>"56px"), 0, false);
?>
  <div class="text-md">
    <span class="no-data"><?php echo __("Looks like you don't have any transaction yet");?>
</span>
  </div>
</div>
<!-- no transaction --><?php }
}
