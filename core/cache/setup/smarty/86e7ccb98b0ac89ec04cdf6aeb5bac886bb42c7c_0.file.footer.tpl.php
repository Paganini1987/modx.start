<?php /* Smarty version 3.1.27, created on 2017-07-16 13:28:05
         compiled from "I:\OpenServer\domains\portfolio.modx\setup\templates\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:22910596b3fb56bae68_37507564%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86e7ccb98b0ac89ec04cdf6aeb5bac886bb42c7c' => 
    array (
      0 => 'I:\\OpenServer\\domains\\portfolio.modx\\setup\\templates\\footer.tpl',
      1 => 1500200485,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22910596b3fb56bae68_37507564',
  'variables' => 
  array (
    '_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_596b3fb56ddff8_21008839',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_596b3fb56ddff8_21008839')) {
function content_596b3fb56ddff8_21008839 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once 'I:/OpenServer/domains/portfolio.modx/core/model/smarty/plugins\\modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '22910596b3fb56bae68_37507564';
?>
        </div>
        <!-- end content -->
        <div class="clear">&nbsp;</div>
    </div>
</div>

<!-- start footer -->
<div id="footer">
    <div id="footer-inner">
    <div class="container_12">
        <p><?php ob_start();
echo date('Y');
$_tmp1=ob_get_clean();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['_lang']->value['modx_footer1'],'[[+current_year]]',$_tmp1);?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['_lang']->value['modx_footer2'];?>
</p>
    </div>
    </div>
</div>

<div class="post_body">

</div>
<!-- end footer -->
</body>
</html><?php }
}
?>