<?php /* Smarty version 3.1.27, created on 2017-07-16 13:28:32
         compiled from "I:\OpenServer\domains\portfolio.modx\manager\templates\default\welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:4541596b3fd00f2f55_63015688%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9980e94ed1884f55ec0926cec20d5e1ce5bf8d99' => 
    array (
      0 => 'I:\\OpenServer\\domains\\portfolio.modx\\manager\\templates\\default\\welcome.tpl',
      1 => 1500200880,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4541596b3fd00f2f55_63015688',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_596b3fd00fd837_03923358',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_596b3fd00fd837_03923358')) {
function content_596b3fd00fd837_03923358 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '4541596b3fd00f2f55_63015688';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>