<?php
/* Smarty version 4.3.4, created on 2024-09-09 20:34:48
  from 'C:\xampp\htdocs\barelynx\content\themes\default\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66df5be8508797_14311313',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2eddc9b5a6b771ff01f641fb8949254c548d9819' => 
    array (
      0 => 'C:\\xampp\\htdocs\\barelynx\\content\\themes\\default\\templates\\index.tpl',
      1 => 1725755398,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index.landing.tpl' => 1,
    'file:index.newsfeed.tpl' => 1,
  ),
),false)) {
function content_66df5be8508797_14311313 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['user']->value->_logged_in && !$_smarty_tpl->tpl_vars['system']->value['newsfeed_public']) {?>
  <?php $_smarty_tpl->_subTemplateRender('file:index.landing.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} else { ?>
  <?php $_smarty_tpl->_subTemplateRender('file:index.newsfeed.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
}
