// JavaScript Document
$(function(){
	
	function sizeChange(){
		var bodyobj = $(".js-bodyHeight");
		
		var topHeight = $(".js-topHeight").height();//top  �����߶�
		var bodyHeight = bodyobj.height();//main ��Ҫ���ݸ߶�
		var mainHeight = $(window).height();//��������Ǹ߶�
		var footHeight = $(".foot").height();//foot �ײ��߶�
		
		var leftobj = $(".js-mainleft");//��ർ��
		var rightobj = $(".js-mainright");//�Ҳർ��
		var rightBox = $(".main_content");
		var leftHeight = leftobj.height(); //main_left ���߶�
		var rightHeight = rightobj.height(); //main_right �Ҳ�߶�
		var rightBoxHeight = rightBox.height()
				
		
		var offsetHeight = (mainHeight-footHeight-topHeight);//�м�߶Ȳʹ��footһֱ���ڵײ�
		var visivleHeight = offsetHeight-($(".main_site").height()+$(".banner_position").height()+15); 
		alert(offsetHeight);
		bodyobj.css("height",offsetHeight+"px");
		leftobj.css("height",offsetHeight-20+"px");
		rightBox.css("height",visivleHeight+"px");


		
	}	
	
	sizeChange();
	
	
	$(window).resize(function(){
		sizeChange();
		})
		
	function showDOM(){
		var parentBox = $(".fenlan");
		var childBox = $(".fenlan_content ul",$(parentBox[0]));
		var clickBox = $(".fenlan_title span a",$(parentBox[0]));
		parentBox.each(function(){
			hideChild(this);
			alert('1');
			})
		childBox.show();//��ʾ��һ��;
		clickBox.text("-");
		function hideChild(obj){
			var box = $(obj);
			var childs = $(".fenlan_content ul",box);
			
			childs.hide();	
		}
		
	}	
	//showDOM();
})