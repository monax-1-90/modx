<?php /* Smarty version 3.1.27, created on 2016-11-22 12:07:36
         compiled from "/opt/lampp/htdocs/manager/templates/default/workspaces/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:454967647583426f81da8d5_03822128%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e73543ca9b6675583be9949909367c4b467a53fa' => 
    array (
      0 => '/opt/lampp/htdocs/manager/templates/default/workspaces/index.tpl',
      1 => 1479105718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '454967647583426f81da8d5_03822128',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_583426f8256678_41669534',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_583426f8256678_41669534')) {
function content_583426f8256678_41669534 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '454967647583426f81da8d5_03822128';
echo (($tmp = @$_smarty_tpl->tpl_vars['error']->value)===null||$tmp==='' ? '' : $tmp);?>

<div id="modx-panel-workspace-div"></div>
<?php }
}
?>