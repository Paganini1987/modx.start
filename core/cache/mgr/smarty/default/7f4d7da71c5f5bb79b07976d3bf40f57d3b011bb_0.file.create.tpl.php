<?php /* Smarty version 3.1.27, created on 2017-07-16 13:38:58
         compiled from "I:\OpenServer\domains\portfolio.modx\manager\templates\default\resource\staticresource\create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:19400596b4242ba0530_29921939%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f4d7da71c5f5bb79b07976d3bf40f57d3b011bb' => 
    array (
      0 => 'I:\\OpenServer\\domains\\portfolio.modx\\manager\\templates\\default\\resource\\staticresource\\create.tpl',
      1 => 1500200880,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19400596b4242ba0530_29921939',
  'variables' => 
  array (
    'tvOutput' => 0,
    'onDocFormPrerender' => 0,
    'resource' => 0,
    '_config' => 0,
    'onRichTextEditorInit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_596b4242bc1e18_50936302',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_596b4242bc1e18_50936302')) {
function content_596b4242bc1e18_50936302 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '19400596b4242ba0530_29921939';
?>
<div id="modx-panel-static-div"></div>
<div id="modx-resource-tvs-div" class="modx-resource-tab x-form-label-left x-panel"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['tvOutput']->value)===null||$tmp==='' ? '' : $tmp);?>
</div>

<?php echo $_smarty_tpl->tpl_vars['onDocFormPrerender']->value;?>

<?php if ($_smarty_tpl->tpl_vars['resource']->value->richtext && $_smarty_tpl->tpl_vars['_config']->value['use_editor']) {?>
    <?php echo $_smarty_tpl->tpl_vars['onRichTextEditorInit']->value;?>

<?php }

}
}
?>