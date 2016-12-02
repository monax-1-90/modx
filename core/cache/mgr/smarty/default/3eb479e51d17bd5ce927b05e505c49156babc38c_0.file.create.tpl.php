<?php /* Smarty version 3.1.27, created on 2016-11-28 10:42:01
         compiled from "/opt/lampp/htdocs/manager/templates/default/element/snippet/create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:121239651583bfbe9645811_66755575%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3eb479e51d17bd5ce927b05e505c49156babc38c' => 
    array (
      0 => '/opt/lampp/htdocs/manager/templates/default/element/snippet/create.tpl',
      1 => 1479105716,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121239651583bfbe9645811_66755575',
  'variables' => 
  array (
    'onSnipFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_583bfbe966fbb8_95852731',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_583bfbe966fbb8_95852731')) {
function content_583bfbe966fbb8_95852731 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '121239651583bfbe9645811_66755575';
?>
<div id="modx-panel-snippet-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onSnipFormPrerender']->value;

}
}
?>