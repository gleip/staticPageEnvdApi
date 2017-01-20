<?php /* Smarty version 3.1.27, created on 2017-01-19 18:34:12
         compiled from "/var/www/staticPageEnvdApi/manager/templates/default/welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1199281178588106a413e404_44438971%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ded6c965379f6c4ef8f9f7289475c37a3ca6a6f' => 
    array (
      0 => '/var/www/staticPageEnvdApi/manager/templates/default/welcome.tpl',
      1 => 1483436692,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1199281178588106a413e404_44438971',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_588106a413f391_40599911',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_588106a413f391_40599911')) {
function content_588106a413f391_40599911 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1199281178588106a413e404_44438971';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>