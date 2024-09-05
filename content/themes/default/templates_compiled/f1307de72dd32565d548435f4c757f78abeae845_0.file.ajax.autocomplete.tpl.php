<?php
/* Smarty version 4.3.4, created on 2024-08-03 10:13:20
  from 'C:\xampp7\htdocs\bareX\content\themes\default\templates\ajax.autocomplete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66ae02c08cede5_77856779',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1307de72dd32565d548435f4c757f78abeae845' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\bareX\\content\\themes\\default\\templates\\ajax.autocomplete.tpl',
      1 => 1647975780,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ae02c08cede5_77856779 (Smarty_Internal_Template $_smarty_tpl) {
?><ul>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, '_user');
$_smarty_tpl->tpl_vars['_user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
$_smarty_tpl->tpl_vars['_user']->do_else = false;
?>
    <li>
      <div class="data-container clickable small <?php if ($_smarty_tpl->tpl_vars['type']->value == 'tags') {?>js_tag-add<?php } else { ?>js_autocomplete-add<?php }?>" data-uid="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_id'];?>
" data-name="<?php if ($_smarty_tpl->tpl_vars['system']->value['show_usernames_enabled']) {
echo $_smarty_tpl->tpl_vars['_user']->value['user_name'];
} else {
echo $_smarty_tpl->tpl_vars['_user']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['_user']->value['user_lastname'];
}?>">
        <div class="data-avatar">
          <img class="data-avatar" src="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_picture'];?>
" alt="">
        </div>
        <div class="data-content">
          <div><strong><?php if ($_smarty_tpl->tpl_vars['system']->value['show_usernames_enabled']) {
echo $_smarty_tpl->tpl_vars['_user']->value['user_name'];
} else {
echo $_smarty_tpl->tpl_vars['_user']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['_user']->value['user_lastname'];
}?></strong></div>
        </div>
      </div>
    </li>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul><?php }
}
