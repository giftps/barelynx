<?php
/* Smarty version 4.3.4, created on 2024-06-09 19:15:00
  from 'C:\xampp7\htdocs\Script\content\themes\default\templates\_header.search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6665ff345cc9e8_18334156',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f080d16556685534dcbee13d2b94c56a546e19ec' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\Script\\content\\themes\\default\\templates\\_header.search.tpl',
      1 => 1692630040,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
    'file:ajax.search.tpl' => 1,
  ),
),false)) {
function content_6665ff345cc9e8_18334156 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="search-wrapper d-none d-md-block">
  <form>
    <input id="search-input" type="text" class="form-control" placeholder='<?php echo __("Search");?>
' autocomplete="off">
    <div class="search-input-icon">
      <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"header-search",'class'=>"header-icon",'width'=>"20px",'height'=>"20px"), 0, false);
?>
    </div>
    <div id="search-results" class="dropdown-menu dropdown-widget dropdown-search js_dropdown-keepopen">
      <div class="dropdown-widget-header">
        <span class="title"><?php echo __("Search Results");?>
</span>
      </div>
      <div class="dropdown-widget-body">
        <div class="loader loader_small ptb10"></div>
      </div>
      <a class="dropdown-widget-footer" id="search-results-all" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/search/"><?php echo __("See All Results");?>
</a>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['user']->value->_data['search_log']) {?>
      <div id="search-history" class="dropdown-menu dropdown-widget dropdown-search js_dropdown-keepopen">
        <div class="dropdown-widget-header">
          <span class="text-link float-end js_clear-searches">
            <?php echo __("Clear");?>

          </span>
          <span class="title"><?php echo __("Recent Searches");?>
</span>
        </div>
        <div class="dropdown-widget-body">
          <?php $_smarty_tpl->_subTemplateRender('file:ajax.search.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('results'=>$_smarty_tpl->tpl_vars['user']->value->_data['search_log']), 0, false);
?>
        </div>
        <a class="dropdown-widget-footer" id="search-results-all" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/search/"><?php echo __("Advanced Search");?>
</a>
      </div>
    <?php }?>
  </form>
</div><?php }
}
