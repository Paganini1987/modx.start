<?php /* Smarty version 3.1.27, created on 2017-07-16 13:29:50
         compiled from "I:\OpenServer\domains\portfolio.modx\manager\templates\default\workspaces\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2753596b401e41f717_63678569%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b2b50f67bd781d38dc3952a27dadbe7ce3b4926' => 
    array (
      0 => 'I:\\OpenServer\\domains\\portfolio.modx\\manager\\templates\\default\\workspaces\\index.tpl',
      1 => 1500200880,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2753596b401e41f717_63678569',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_596b401e430d12_35283858',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_596b401e430d12_35283858')) {
function content_596b401e430d12_35283858 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2753596b401e41f717_63678569';
echo (($tmp = @$_smarty_tpl->tpl_vars['error']->value)===null||$tmp==='' ? '' : $tmp);?>

<div id="modx-panel-workspace-div"></div>
<?php }
}
?>