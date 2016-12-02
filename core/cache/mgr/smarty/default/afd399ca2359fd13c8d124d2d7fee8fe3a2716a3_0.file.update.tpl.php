<?php /* Smarty version 3.1.27, created on 2016-11-21 04:04:52
         compiled from "/opt/lampp/htdocs/manager/templates/default/element/chunk/update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:20331845535832645472d3b6_34807310%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afd399ca2359fd13c8d124d2d7fee8fe3a2716a3' => 
    array (
      0 => '/opt/lampp/htdocs/manager/templates/default/element/chunk/update.tpl',
      1 => 1479105716,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20331845535832645472d3b6_34807310',
  'variables' => 
  array (
    'onChunkFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58326454780716_67879107',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58326454780716_67879107')) {
function content_58326454780716_67879107 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '20331845535832645472d3b6_34807310';
?>
<div id="modx-panel-chunk-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onChunkFormPrerender']->value;

}
}
?>