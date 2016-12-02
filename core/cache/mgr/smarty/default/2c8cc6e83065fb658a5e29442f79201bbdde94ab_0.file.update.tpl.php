<?php /* Smarty version 3.1.27, created on 2016-11-22 12:09:26
         compiled from "/opt/lampp/htdocs/manager/templates/default/element/plugin/update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:55847520158342766bbc1c2_40459739%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c8cc6e83065fb658a5e29442f79201bbdde94ab' => 
    array (
      0 => '/opt/lampp/htdocs/manager/templates/default/element/plugin/update.tpl',
      1 => 1479105716,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55847520158342766bbc1c2_40459739',
  'variables' => 
  array (
    'onPluginFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58342766be21e0_77087987',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58342766be21e0_77087987')) {
function content_58342766be21e0_77087987 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '55847520158342766bbc1c2_40459739';
?>
<div id="modx-panel-plugin-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onPluginFormPrerender']->value;

}
}
?>