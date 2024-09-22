<?php
/* Smarty version 4.3.4, created on 2024-09-22 16:16:11
  from '/Applications/XAMPP/xamppfiles/htdocs/barelynx/content/themes/default/templates/_announcements.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66f042cb294332_15951919',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e54b6d6dd75d1dd621e21d82d4640aa5a1b99b6a' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/barelynx/content/themes/default/templates/_announcements.tpl',
      1 => 1726760779,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f042cb294332_15951919 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['announcements']->value, 'announcement');
$_smarty_tpl->tpl_vars['announcement']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['announcement']->value) {
$_smarty_tpl->tpl_vars['announcement']->do_else = false;
?>
  <div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['announcement']->value['type'];?>
 text-with-list">
    <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
      <button type="button" class="btn-close float-end js_announcment-remover" data-id="<?php echo $_smarty_tpl->tpl_vars['announcement']->value['announcement_id'];?>
"></button>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['announcement']->value['title']) {?><div class="title"><?php echo $_smarty_tpl->tpl_vars['announcement']->value['title'];?>
</div><?php }?>
    <?php echo $_smarty_tpl->tpl_vars['announcement']->value['code'];?>

  </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
