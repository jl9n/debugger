<?php /* Smarty version Smarty-3.1.6, created on 2014-03-06 00:42:42
         compiled from "./Admin/Tpl\Test\addquest.html" */ ?>
<?php /*%%SmartyHeaderCode:1754453175402e332f5-20317259%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5c7c151efc81e7e15a280e703fa316f359346cd' => 
    array (
      0 => './Admin/Tpl\\Test\\addquest.html',
      1 => 1392912637,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1754453175402e332f5-20317259',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5317540312dc0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5317540312dc0')) {function content_5317540312dc0($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("Public/pagerForm.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<form method="post" action="__URL__/insertquest/navTabId/listquestion/callbackType/closeCurrent"  class="pageForm required-validate" 
        onsubmit="return validateCallback(this,dialogAjaxDone);">
	<div class="pageContent">
	<div class="tabsContent" style="height: 300px;">
		<div>
		<input type="hidden" name="tid" value="<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
"/>
			<table class="list nowrap itemDetail" addButton="添加新数据" width="100%">
				<thead>
					<tr>
                        <th type="text" name="content[]" size="22" fieldClass="required" fieldAttrs="{remote:'validate_remote.html', maxlength:100}">试题内容</th>
						<th type="text" name="aA[]" size="10" fieldClass="required" >答案A</th>
						<th type="text" name="aB[]" size="10" fieldClass="required">答案B</th>
						<th type="text" name="aC[]" size="10" fieldClass="required">答案C</th>
						<th type="text" name="aD[]" size="10" fieldClass="required">答案D</th>
						<th type="text" name="answer[]" size="10" fieldClass="required">正确答案</th>
						<th type="del" width="60">删除</th>
					</tr>
				</thead>
				<tbody></tbody>
			</table>
		</div>
	</form>
</div>
<div class="formBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">保存</button></div></div></li>
				<li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li>
			</ul>
		</div>
<?php }} ?>