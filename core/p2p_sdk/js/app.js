/**
 *	js for report app server
 *
 */

var CACHE_INTERFACE_ID="";

$(document).ready(function(){
	//load report list
	var html='<select id="reportSelector">';
	var reportIds= [];
	for(var i in META_DATA_OF_INTERFACE){
		reportIds[reportIds.length]= i; 
	}
	reportIds.sort();
	html+= '<option value="">请选择一个需要调试的接口</option>';
	for(var i in reportIds){
		html+= '<option value="'+reportIds[i]+'">'+reportIds[i]+" - "+META_DATA_OF_INTERFACE[reportIds[i]]['full_name']+'</option>';
	}
	html+='</select>';
	$('#reportWrapper').html(html);
	
	// define option select handler
	$('#reportSelector').click(function(){
		var selectId= $(this).val();
		if(CACHE_INTERFACE_ID == selectId)
			return;
		
		CACHE_INTERFACE_ID= selectId;
		if(CACHE_INTERFACE_ID == ''){
			$('#paramsWrapper').html('');
			return;
		}
		
		displayParamsForm(CACHE_INTERFACE_ID);
	});
	
});

// display params form
function displayParamsForm(report_id){
	var meta_of_report= getMateOfReport(report_id);
	if(meta_of_report==null) return;
	
	var params= meta_of_report['params'];
	var html="";
//	html+= '<div class="paramWrap"><span class="paramTitle">CmdId:</span>'+report_id+'</div>';
	html+= '<div class="paramWrap"><span class="paramTitle">接口名称:</span>'+meta_of_report['full_name']+'</div>';
	html+= '<div class="paramWrap"><span class="paramTitle">CmdId:</span>'+meta_of_report['CmdId']+'</div>';
	html+= '<div class="paramWrap"><span class="paramTitle">接口版本:</span>'+meta_of_report['Version']+'</div>';
	html+= '<div class="paramWrap"><span class="paramTitle">文档章节:</span>'+report_id+'</div>';
	
	var num=1;
	for(var i in params){
		html+= '<div class="paramWrap"><span class="paramTitle">'+i+':</span>'+decodeParam(params[i], i, num++)+'</div>';
	}
	html+= '<input type="hidden" id="param_0" pName="method" value="'+meta_of_report['CmdId']+'">';
	html+= '<div class="paramWrap"><input type="button" value="启 动" id="startupTrigger" /></div>';
	$('#paramsWrapper').html(html);
	$('#startupTrigger').click(startup);
}
function decodeParam(param_meta, id, num){
	return '<input type="text" id="param_'+num+'" pName="param['+id+']" value="'+param_meta[1]+'" /> <span class="tips">'+(param_meta[2]?"必填":"选填")+'</span> <span class="example">示例:  '+param_meta[3]+'</span>';
}
function startup(){
	var $params={};
	
	var i=0;
	while(document.getElementById('param_'+i)){
		$params[''+$('#param_'+i).attr('pName')]= $('#param_'+i).val();
		i++;
	}

	if(!checkParams(CACHE_INTERFACE_ID, $params))
		return;
	
	var p_array=new Array();
	for(var i in $params){
		p_array.push(i+'='+$params[i]);
	}
	var p_string= p_array.join('&');
	var url= getRequestURL(CACHE_INTERFACE_ID);
	url+= "?"+p_string;
	
	window.open(url, "测试页面");
	/*
	if(confirm("确认启动报表："+url+"  ?")){
		$('#requestFrame').attr('src', url);
	}*/
}
// check params before request a report trigger
function checkParams(report_id, $params){
	var meta_of_report= getMateOfReport(report_id);
	if(meta_of_report==null) return false;
	
	var meta_of_params= meta_of_report['params'];
	for(var i in $params){
		var value= $params[i];
		
	}
	
	return true;
}

function getRequestURL(report_id){
	var meta_of_report= getMateOfReport(report_id);
	if(meta_of_report==null) return;
	
	return 'service.php';
}
// get meta of report
function getMateOfReport(report_id){
	if(META_DATA_OF_INTERFACE[report_id])
		return META_DATA_OF_INTERFACE[report_id];
	else{
		alert("report: '"+report_id+"' is not existed!");
		return null;
	}
}
