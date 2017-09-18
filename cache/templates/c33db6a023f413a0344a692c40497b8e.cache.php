<script type="text/javascript">
//防止回车提交表单
$(function() {
	document.onkeydown = function(e){ 
		var ev = document.all ? window.event : e;
		if (ev.keyCode==13) {
			// 标识不能提交表单
			$("#mark").val("1");
		}
	}
	$(".table_form th").last().css('border','none');
	$(".table_form td").last().css('border','none');
});
function dr_form_check() {
	if (d_required('name')) return false;
	if (d_isdomain('domain')) return false;
	if ($("#mark").val() == 0) { 
		return true;
	} else {
		return false;
	}
}
</script>
<div class="table-list" style="width:500px;">
	<form action="" method="post" id="myform" name="myform" onsubmit="return dr_form_check()">
	<input name="mark" id="mark" type="hidden" value="0">
	<table width="100%" class="table_form">
	<tr>
		<th width="130"><font color="red">*</font>&nbsp;<?php echo fc_lang('网站名称'); ?>： </th>
		<td>
		<input class="input-text" type="text" name="data[name]" id="dr_name" value="<?php echo $data['name']; ?>" size="20" />
		</td>
	</tr>
	<tr>
		<th><font color="red">*</font>&nbsp;<?php echo fc_lang('网站域名'); ?>： </th>
		<td>
		<input class="input-text" type="text" name="data[domain]" id="dr_domain" value="<?php echo $data['domain']; ?>" size="20" />
		<div class="onShow" id="dr_domain_tips"><?php echo fc_lang('格式：test.dayrui.com'); ?></div>
		</td>
	</tr>
	<tr>
		<th><font color="blue"><?php echo fc_lang('将域名绑定至根目录'); ?>：</font> </th>
		<td>
			<font color="blue"><?php echo WEBPATH; ?></font>
		</td>
	</tr>
	</table>
	</form>
</div>