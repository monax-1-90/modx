<?php /* Smarty version 3.1.27, created on 2016-11-22 06:03:29
         compiled from "/opt/lampp/htdocs/manager/templates/default/element/chunk/create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3172688815833d1a170c887_17344554%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a5d3dea27d6461307b6a605932f426b64f4f7f3' => 
    array (
      0 => '/opt/lampp/htdocs/manager/templates/default/element/chunk/create.tpl',
      1 => 1479105716,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3172688815833d1a170c887_17344554',
  'variables' => 
  array (
    'onChunkFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5833d1a1735011_20665987',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5833d1a1735011_20665987')) {
function content_5833d1a1735011_20665987 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3172688815833d1a170c887_17344554';
?>
<div id="modx-panel-chunk-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onChunkFormPrerender']->value;

}
}
?>