<?php
/* Smarty version 4.3.4, created on 2024-09-22 16:16:11
  from '/Applications/XAMPP/xamppfiles/htdocs/barelynx/content/themes/default/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66f042cb0602b6_34347032',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cac5eb6938837ce25403a0e29eba93696b2bfa4c' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/barelynx/content/themes/default/templates/index.tpl',
      1 => 1726760779,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index.landing.tpl' => 1,
    'file:index.newsfeed.tpl' => 1,
  ),
),false)) {
function content_66f042cb0602b6_34347032 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['user']->value->_logged_in && !$_smarty_tpl->tpl_vars['system']->value['newsfeed_public']) {?>
  <?php $_smarty_tpl->_subTemplateRender('file:index.landing.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} else { ?>
  <?php $_smarty_tpl->_subTemplateRender('file:index.newsfeed.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
}
