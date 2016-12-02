<?php /* Smarty version 3.1.27, created on 2016-11-22 06:05:43
         compiled from "/opt/lampp/htdocs/manager/templates/default/element/tv/create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:4121764425833d227171023_96540280%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '571e72c770394e8bf0c07b7820f45dffe5b8b8ce' => 
    array (
      0 => '/opt/lampp/htdocs/manager/templates/default/element/tv/create.tpl',
      1 => 1479105716,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4121764425833d227171023_96540280',
  'variables' => 
  array (
    'onTVFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5833d2271f4178_91695420',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5833d2271f4178_91695420')) {
function content_5833d2271f4178_91695420 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '4121764425833d227171023_96540280';
?>
<div id="modx-panel-tv-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onTVFormPrerender']->value;

}
}
?>