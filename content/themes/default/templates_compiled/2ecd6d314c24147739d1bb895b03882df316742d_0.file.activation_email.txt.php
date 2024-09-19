<?php
/* Smarty version 4.3.4, created on 2024-06-09 19:13:10
  from 'C:\xampp7\htdocs\Script\content\themes\default\templates\emails\activation_email.txt' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6665fec6a8d0d3_75171095',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ecd6d314c24147739d1bb895b03882df316742d' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\Script\\content\\themes\\default\\templates\\emails\\activation_email.txt',
      1 => 1693736737,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6665fec6a8d0d3_75171095 (Smarty_Internal_Template $_smarty_tpl) {
echo __("Hi");?>
 <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
,

<?php echo __("To complete the activation process, please follow this link");?>
:
<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/activation/<?php echo $_smarty_tpl->tpl_vars['email_verification_code']->value;?>


<?php echo __("Activiation Code");?>
: <?php echo $_smarty_tpl->tpl_vars['email_verification_code']->value;?>


<?php echo __("Welcome to");?>
 <?php echo __($_smarty_tpl->tpl_vars['system']->value['system_title']);?>


<?php echo __($_smarty_tpl->tpl_vars['system']->value['system_title']);?>
 <?php echo __("Team");
}
}
