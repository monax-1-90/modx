<?php /* Smarty version 3.1.27, created on 2016-11-21 04:04:23
         compiled from "/opt/lampp/htdocs/manager/templates/default/welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1620030225583264373068f1_40116622%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4242f5c09337ba8a0ecc640736e5cd1222b53bac' => 
    array (
      0 => '/opt/lampp/htdocs/manager/templates/default/welcome.tpl',
      1 => 1479105718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1620030225583264373068f1_40116622',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58326437332926_06119377',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58326437332926_06119377')) {
function content_58326437332926_06119377 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1620030225583264373068f1_40116622';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>