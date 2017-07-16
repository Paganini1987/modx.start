<?php /* Smarty version 3.1.27, created on 2017-07-16 13:28:11
         compiled from "I:\OpenServer\domains\portfolio.modx\setup\templates\complete.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:5932596b3fbb6cb382_65081749%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5afdfebaa1880fe75d35877dbf7e6bea6bcdbd38' => 
    array (
      0 => 'I:\\OpenServer\\domains\\portfolio.modx\\setup\\templates\\complete.tpl',
      1 => 1500200485,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5932596b3fbb6cb382_65081749',
  'variables' => 
  array (
    '_lang' => 0,
    'app_name' => 0,
    'errors' => 0,
    'error' => 0,
    'cleanup' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_596b3fbb75e787_88317591',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_596b3fbb75e787_88317591')) {
function content_596b3fbb75e787_88317591 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '5932596b3fbb6cb382_65081749';
?>
<form id="install" action="?action=complete" method="post">
<div>
	<h2><?php echo $_smarty_tpl->tpl_vars['_lang']->value['thank_installing'];
echo $_smarty_tpl->tpl_vars['app_name']->value;?>
.</h2>

    <?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
    <div class="note">
    <h3><?php echo $_smarty_tpl->tpl_vars['_lang']->value['cleanup_errors_title'];?>
</h3>
        <?php
$_from = $_smarty_tpl->tpl_vars['errors']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['error'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['error']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
$foreach_error_Sav = $_smarty_tpl->tpl_vars['error'];
?>
            <p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p><hr />
        <?php
$_smarty_tpl->tpl_vars['error'] = $foreach_error_Sav;
}
?>
    </div>
    <br />
    <?php }?>
	<p><?php echo $_smarty_tpl->tpl_vars['_lang']->value['please_select_login'];?>
</p>
</div>
<br />

<div class="setup_navbar">
    <label><input type="submit" id="modx-next" name="proceed" value="<?php echo $_smarty_tpl->tpl_vars['_lang']->value['login'];?>
" autofocus="autofocus" /></label>
    <br /><br />
    <span class="cleanup">
        <label><input type="checkbox" value="1" id="cleanup" name="cleanup"<?php if ($_smarty_tpl->tpl_vars['cleanup']->value) {?> checked="checked"<?php }?> /> <?php echo $_smarty_tpl->tpl_vars['_lang']->value['delete_setup_dir'];?>
</label>
    </span>
</div>
</form><?php }
}
?>