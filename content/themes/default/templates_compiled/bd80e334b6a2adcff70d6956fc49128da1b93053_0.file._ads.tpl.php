<?php
/* Smarty version 4.3.4, created on 2024-06-13 12:18:37
  from 'C:\xampp7\htdocs\bare\content\themes\default\templates\_ads.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_666ae39dbbb6f6_74568252',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd80e334b6a2adcff70d6956fc49128da1b93053' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\bare\\content\\themes\\default\\templates\\_ads.tpl',
      1 => 1685455565,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666ae39dbbb6f6_74568252 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['_master']->value) {?>

  <?php if ($_smarty_tpl->tpl_vars['_ads']->value && !in_array($_smarty_tpl->tpl_vars['page']->value,array("static","settings","admin"))) {?>
    <div class="<?php if ($_smarty_tpl->tpl_vars['system']->value['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?> mtb20">
      <!-- ads -->
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_ads']->value, 'ads_unit');
$_smarty_tpl->tpl_vars['ads_unit']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ads_unit']->value) {
$_smarty_tpl->tpl_vars['ads_unit']->do_else = false;
?>
        <div class="card">
          <div class="card-header bg-transparent">
            <i class="fa fa-bullhorn fa-fw mr5 yellow"></i><?php echo __("Sponsored");?>

          </div>
          <div class="card-body"><?php echo $_smarty_tpl->tpl_vars['ads_unit']->value['code'];?>
</div>
        </div>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <!-- ads -->
    </div>
  <?php }?>

<?php } else { ?>

  <?php if ($_smarty_tpl->tpl_vars['ads']->value) {?>
    <!-- ads -->
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ads']->value, 'ads_unit');
$_smarty_tpl->tpl_vars['ads_unit']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ads_unit']->value) {
$_smarty_tpl->tpl_vars['ads_unit']->do_else = false;
?>
      <div class="card">
        <div class="card-header bg-transparent">
          <i class="fa fa-bullhorn fa-fw mr5 yellow"></i><?php echo __("Sponsored");?>

        </div>
        <div class="card-body"><?php echo $_smarty_tpl->tpl_vars['ads_unit']->value['code'];?>
</div>
      </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <!-- ads -->
  <?php }?>

<?php }
}
}
