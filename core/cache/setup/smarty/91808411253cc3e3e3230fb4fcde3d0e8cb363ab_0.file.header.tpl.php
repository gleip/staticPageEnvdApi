<?php /* Smarty version 3.1.27, created on 2017-01-19 18:33:58
         compiled from "/var/www/staticPageEnvdApi/setup/templates/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:213316609858810696142ff9_86653108%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91808411253cc3e3e3230fb4fcde3d0e8cb363ab' => 
    array (
      0 => '/var/www/staticPageEnvdApi/setup/templates/header.tpl',
      1 => 1483436692,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213316609858810696142ff9_86653108',
  'variables' => 
  array (
    'app_name' => 0,
    'app_version' => 0,
    '_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58810696154da4_89663710',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58810696154da4_89663710')) {
function content_58810696154da4_89663710 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '213316609858810696142ff9_86653108';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['app_name']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['app_version']->value;?>
 &raquo; <?php echo $_smarty_tpl->tpl_vars['_lang']->value['install'];?>
</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="stylesheet" type="text/css" media="all" href="assets/css/reset.css" />
    <link rel="stylesheet" type="text/css" media="all" href="assets/css/text.css" />
    <link rel="stylesheet" type="text/css" media="all" href="assets/css/960.css" />

    <link rel="stylesheet" href="assets/modx.css" type="text/css" media="screen" />

    <link rel="stylesheet" href="assets/css/print.css" type="text/css" media="print" />
    
    <link href="assets/css/style.css" type="text/css" rel="stylesheet" />
    <?php if ($_smarty_tpl->tpl_vars['_lang']->value['additional_css'] != '') {?>
    <style type="text/css"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['additional_css'];?>
</style>
    <?php }?>
    <?php echo '<script'; ?>
 type="text/javascript" src="assets/js/ext-core.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="assets/js/modx.setup.js"><?php echo '</script'; ?>
>
    <!--[if lt IE 7]>
    
        <?php echo '<script'; ?>
 type="text/javascript" src="assets/js/inc/say.no.to.ie.6.js"><?php echo '</script'; ?>
>
        <style type="text/css">
        body {
            behavior:url("assets/js/inc/csshover2.htc");
        }
        .pngfix {
            behavior:url("assets/js/inc/iepngfix.htc");
        }
        </style>
        
    <![endif]-->
    
</head>

<body>
<!-- start header -->
<div id="header">
    <div class="container_12">
        <div id="metaheader">
            <div class="grid_6">
                <div id="mainheader">
                    <h1 id="logo" class="pngfix"><span>MODX</span></h1>
                </div>
            </div>
            <div id="metanav" class="grid_6">
<a href="#"><strong><?php echo $_smarty_tpl->tpl_vars['app_name']->value;?>
</strong>&nbsp;<em><?php echo $_smarty_tpl->tpl_vars['_lang']->value['version'];?>
 <?php echo $_smarty_tpl->tpl_vars['app_version']->value;?>
</em></a>
            </div>
        </div>
        <div class="clear">&nbsp;</div>
    </div>
</div>
<!-- end header -->

<div id="contentarea">
    <div class="container_16">
       <!-- start content -->
        <div id="content" class="grid_12">

        <?php }
}
?>