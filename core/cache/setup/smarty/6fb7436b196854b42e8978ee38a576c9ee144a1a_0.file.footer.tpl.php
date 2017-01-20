<?php /* Smarty version 3.1.27, created on 2017-01-19 18:33:54
         compiled from "/var/www/staticPageEnvdApi/setup/templates/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:19936887958810692572418_27197088%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fb7436b196854b42e8978ee38a576c9ee144a1a' => 
    array (
      0 => '/var/www/staticPageEnvdApi/setup/templates/footer.tpl',
      1 => 1483436692,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19936887958810692572418_27197088',
  'variables' => 
  array (
    '_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58810692577309_30696574',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58810692577309_30696574')) {
function content_58810692577309_30696574 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/var/www/staticPageEnvdApi/core/model/smarty/plugins/modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '19936887958810692572418_27197088';
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