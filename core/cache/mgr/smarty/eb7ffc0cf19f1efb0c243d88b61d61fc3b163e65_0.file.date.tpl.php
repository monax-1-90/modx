<?php /* Smarty version 3.1.27, created on 2016-11-29 09:33:38
         compiled from "/opt/lampp/htdocs/manager/templates/default/element/tv/renders/inputproperties/date.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1259821728583d3d62805984_28357545%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb7ffc0cf19f1efb0c243d88b61d61fc3b163e65' => 
    array (
      0 => '/opt/lampp/htdocs/manager/templates/default/element/tv/renders/inputproperties/date.tpl',
      1 => 1479105716,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1259821728583d3d62805984_28357545',
  'variables' => 
  array (
    'tv' => 0,
    'params' => 0,
    'k' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_583d3d628a9b30_45721419',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_583d3d628a9b30_45721419')) {
function content_583d3d628a9b30_45721419 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1259821728583d3d62805984_28357545';
?>
<div id="tv-input-properties-form<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tv']->value)===null||$tmp==='' ? '' : $tmp);?>
"></div>


<?php echo '<script'; ?>
 type="text/javascript">
// <![CDATA[
var params = {
<?php
$_from = $_smarty_tpl->tpl_vars['params']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['__foreach_p'] = new Smarty_Variable(array('total' => $_smarty_tpl->_count($_from), 'iteration' => 0));
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_p']->value['iteration']++;
$_smarty_tpl->tpl_vars['__foreach_p']->value['last'] = $_smarty_tpl->tpl_vars['__foreach_p']->value['iteration'] == $_smarty_tpl->tpl_vars['__foreach_p']->value['total'];
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
 '<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
': '<?php echo strtr($_smarty_tpl->tpl_vars['v']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'<?php if (!(isset($_smarty_tpl->tpl_vars['__foreach_p']->value['last']) ? $_smarty_tpl->tpl_vars['__foreach_p']->value['last'] : null)) {?>,<?php }?>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
};
var oc = {'change':{fn:function(){Ext.getCmp('modx-panel-tv').markDirty();},scope:this}};
MODx.load({
    xtype: 'panel'
    ,layout: 'form'
    ,autoHeight: true
    ,cls: 'form-with-labels'
    ,border: false
    ,labelAlign: 'top'
    ,items: [{
        xtype: 'combo-boolean'
        ,fieldLabel: _('required')
        ,description: MODx.expandHelp ? '' : _('required_desc')
        ,name: 'inopt_allowBlank'
        ,hiddenName: 'inopt_allowBlank'
        ,id: 'inopt_allowBlank<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tv']->value)===null||$tmp==='' ? '' : $tmp);?>
'
        ,value: !(params['allowBlank'] == 0 || params['allowBlank'] == 'false')
        ,width: 200
        ,listeners: oc
    },{
        xtype: MODx.expandHelp ? 'label' : 'hidden'
        ,forId: 'inopt_allowBlank<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tv']->value)===null||$tmp==='' ? '' : $tmp);?>
'
        ,html: _('required_desc')
        ,cls: 'desc-under'
    },{
        xtype: 'textfield'
        ,fieldLabel: _('disabled_dates')
        ,description: MODx.expandHelp ? '' : _('disabled_dates_desc')
        ,name: 'inopt_disabledDates'
        ,id: 'inopt_disabledDates<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tv']->value)===null||$tmp==='' ? '' : $tmp);?>
'
        ,value: params['disabledDates'] || ''
        ,anchor: '98%'
        ,listeners: oc
    },{
        xtype: MODx.expandHelp ? 'label' : 'hidden'
        ,forId: 'inopt_disabledDates<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tv']->value)===null||$tmp==='' ? '' : $tmp);?>
'
        ,html: _('disabled_dates_desc')
        ,cls: 'desc-under'
    },{
        xtype: 'textfield'
        ,fieldLabel: _('disabled_days')
        ,description: MODx.expandHelp ? '' : _('disabled_days_desc')
        ,name: 'inopt_disabledDays'
        ,id: 'inopt_disabledDays<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tv']->value)===null||$tmp==='' ? '' : $tmp);?>
'
        ,value: params['disabledDays'] || ''
        ,anchor: '98%'
        ,listeners: oc
    },{
        xtype: MODx.expandHelp ? 'label' : 'hidden'
        ,forId: 'inopt_disabledDays<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tv']->value)===null||$tmp==='' ? '' : $tmp);?>
'
        ,html: _('disabled_days_desc')
        ,cls: 'desc-under'
    },{
        xtype: 'datefield'
        ,fieldLabel: _('earliest_date')
        ,description: MODx.expandHelp ? '' : _('earliest_date_desc')
        ,name: 'inopt_minDateValue'
        ,id: 'inopt_minDateValue<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tv']->value)===null||$tmp==='' ? '' : $tmp);?>
'
        ,value: params['minDateValue'] || ''
        ,width: 200
        ,listeners: oc
        ,format: MODx.config.manager_date_format
    },{
        xtype: MODx.expandHelp ? 'label' : 'hidden'
        ,forId: 'inopt_minDateValue<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tv']->value)===null||$tmp==='' ? '' : $tmp);?>
'
        ,html: _('earliest_date_desc')
        ,cls: 'desc-under'
    },{
        xtype: 'timefield'
        ,fieldLabel: _('earliest_time')
        ,description: MODx.expandHelp ? '' : _('earliest_time_desc')
        ,name: 'inopt_minTimeValue'
        ,id: 'inopt_minTimeValue<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tv']->value)===null||$tmp==='' ? '' : $tmp);?>
'
        ,value: params['minTimeValue'] || ''
        ,width: 200
        ,listeners: oc
        ,format: MODx.config.manager_time_format
    },{
        xtype: MODx.expandHelp ? 'label' : 'hidden'
        ,forId: 'inopt_minTimeValue<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tv']->value)===null||$tmp==='' ? '' : $tmp);?>
'
        ,html: _('earliest_time_desc')
        ,cls: 'desc-under'
    },{
        xtype: 'datefield'
        ,fieldLabel: _('latest_date')
        ,description: MODx.expandHelp ? '' : _('latest_date_desc')
        ,name: 'inopt_maxDateValue'
        ,id: 'inopt_maxDateValue<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tv']->value)===null||$tmp==='' ? '' : $tmp);?>
'
        ,value: params['maxDateValue'] || ''
        ,width: 200
        ,listeners: oc
        ,format: MODx.config.manager_date_format
    },{
        xtype: MODx.expandHelp ? 'label' : 'hidden'
        ,forId: 'inopt_maxDateValue<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tv']->value)===null||$tmp==='' ? '' : $tmp);?>
'
        ,html: _('latest_date_desc')
        ,cls: 'desc-under'
    },{
        xtype: 'timefield'
        ,fieldLabel: _('latest_time')
        ,description: MODx.expandHelp ? '' : _('latest_time_desc')
        ,name: 'inopt_maxTimeValue'
        ,id: 'inopt_maxTimeValue<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tv']->value)===null||$tmp==='' ? '' : $tmp);?>
'
        ,value: params['maxTimeValue'] || ''
        ,width: 200
        ,listeners: oc
        ,format: MODx.config.manager_time_format
    },{
        xtype: MODx.expandHelp ? 'label' : 'hidden'
        ,forId: 'inopt_maxTimeValue<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tv']->value)===null||$tmp==='' ? '' : $tmp);?>
'
        ,html: _('latest_time_desc')
        ,cls: 'desc-under'
    },{
        xtype: 'textfield'
        ,fieldLabel: _('start_day')
        ,description: MODx.expandHelp ? '' : _('start_day_desc')
        ,name: 'inopt_startDay'
        ,id: 'inopt_startDay<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tv']->value)===null||$tmp==='' ? '' : $tmp);?>
'
        ,value: params['startDay'] || ''
        ,width: 100
        ,listeners: oc
    },{
        xtype: MODx.expandHelp ? 'label' : 'hidden'
        ,forId: 'inopt_startDay<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tv']->value)===null||$tmp==='' ? '' : $tmp);?>
'
        ,html: _('start_day_desc')
        ,cls: 'desc-under'
    },{
        xtype: 'textfield'
        ,fieldLabel: _('time_increment')
        ,description: MODx.expandHelp ? '' : _('time_increment_desc')
        ,name: 'inopt_timeIncrement'
        ,id: 'inopt_timeIncrement<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tv']->value)===null||$tmp==='' ? '' : $tmp);?>
'
        ,value: params['timeIncrement'] || ''
        ,width: 100
        ,listeners: oc
    },{
        xtype: MODx.expandHelp ? 'label' : 'hidden'
        ,forId: 'inopt_timeIncrement<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tv']->value)===null||$tmp==='' ? '' : $tmp);?>
'
        ,html: _('time_increment_desc')
        ,cls: 'desc-under'
    },{
        xtype: 'modx-combo-boolean'
        ,fieldLabel: _('hide_time')
        ,description: MODx.expandHelp ? '' : _('hide_time')
        ,name: 'inopt_hideTime'
        ,hiddenName: 'inopt_hideTime'
        ,id: 'inopt_hideTime<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tv']->value)===null||$tmp==='' ? '' : $tmp);?>
'
        ,value: params['hideTime'] ? !(params['hideTime'] == 0 || params['hideTime'] == 'false') : false
        ,width: 200
        ,listeners: oc
    }]
    ,renderTo: 'tv-input-properties-form<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tv']->value)===null||$tmp==='' ? '' : $tmp);?>
'
});
// ]]>
<?php echo '</script'; ?>
>

<?php }
}
?>