<?php /* Smarty version 3.1.27, created on 2016-11-24 05:25:56
         compiled from "/opt/lampp/htdocs/manager/templates/default/element/snippet/update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:119250180658366bd44e7124_00653406%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '945ddbacfd9f07d4a3223bf4010b7cf35f45102d' => 
    array (
      0 => '/opt/lampp/htdocs/manager/templates/default/element/snippet/update.tpl',
      1 => 1479105716,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119250180658366bd44e7124_00653406',
  'variables' => 
  array (
    'onSnipFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58366bd45236a3_79738536',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58366bd45236a3_79738536')) {
function content_58366bd45236a3_79738536 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '119250180658366bd44e7124_00653406';
?>
<div id="modx-panel-snippet-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onSnipFormPrerender']->value;

}
}
?>