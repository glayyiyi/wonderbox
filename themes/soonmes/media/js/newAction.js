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
				
		
		var offsetHeight = (mainHeight-footHeight-topHeight+40);//�м�߶Ȳʹ��footһֱ���ڵײ�
		var visivleHeight = offsetHeight-($(".main_site").height()+$(".banner_position").height()+60); 
		 
		bodyobj.css("height",offsetHeight+"px");
		leftobj.css("height",offsetHeight-60+"px");
		rightBox.css("height",visivleHeight+"px");


		
	}	
	
	sizeChange();
	
	
	$(window).resize(function(){
		sizeChange();
		})
		
	function showDOM(){
		var parentBox = $(".fenlan");
		
		var i=0;
		parentBox.each(function(){
			var childBox = $(".fenlan_content ul",$(parentBox[i]));
			var clickBox = $(".fenlan_title span a",$(parentBox[i]));
			//hideChild(this);
			//showChild(this);
			childBox.show();//��ʾ��i��;
			clickBox.text("-");
			i++;
			})
		
		function hideChild(obj){
			var box = $(obj);
			var childs = $(".fenlan_content ul",box);
			childs.hide();	
		}
		function showChild(obj){
			var box = $(obj);
			var childs = $(".fenlan_content ul",box);
			childs.show();	
		}
		
	}	
	showDOM();
})