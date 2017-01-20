<?php /* Smarty version 3.1.27, created on 2017-01-19 20:27:59
         compiled from "/var/www/staticPageEnvdApi/manager/templates/default/workspaces/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:16711595955881214f23a2c6_98826119%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '893fc7620424ff85e1cc6289905d1190c7cabdd0' => 
    array (
      0 => '/var/www/staticPageEnvdApi/manager/templates/default/workspaces/index.tpl',
      1 => 1483436692,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16711595955881214f23a2c6_98826119',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5881214f23fb67_13527734',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5881214f23fb67_13527734')) {
function content_5881214f23fb67_13527734 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '16711595955881214f23a2c6_98826119';
echo (($tmp = @$_smarty_tpl->tpl_vars['error']->value)===null||$tmp==='' ? '' : $tmp);?>

<div id="modx-panel-workspace-div"></div>
<?php }
}
?>