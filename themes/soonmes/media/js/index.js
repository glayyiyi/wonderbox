jQuery(function(){	
	function nav(obj,childUl,childBox){
        var box = $(obj);
        var oLi = $("li",childUl);
        var oDiv = $(childBox);
		function showTab(){
			oLi.each(function(i){
				if($(oLi[i]).hasClass("hover2"))
					{
						
						oDiv.addClass("hide");
            			$(oDiv[i]).removeClass("hide");
					}
				})
			}
		showTab();
        oLi.mouseenter(function(){
            var index = oLi.index(this);
            $(oLi[index]).addClass("hover").siblings().removeClass("hover");
            oDiv.addClass("hide");
            $(oDiv[index]).removeClass("hide");
        })
		box.mouseleave(function(){
			oLi.removeClass("hover");
			showTab()
			})
    }
    nav(".nav",".navul",".navlist");
	
	function headshow(){
		var box = $(".tb-list");
		var oUl = $(".tb-listul",box);
		box.hover(function(){
			box.addClass("hover");
			oUl.show();
			},function(){
				box.removeClass("hover");
				oUl.hide();
				})
		}
	headshow();
	
	function slideTop(id,n){
		var $this = $(id);
		if($this.find("ul:first").find("li").length<n){
			return;
		}
		$this.hover(function(){clearInterval(scrollTimer)},function(){
				scrollTimer = setInterval(function(){
					scrollNews($this);
					},3000)
			});
			var scrollTimer = setInterval(function(){
				scrollNews($this);
				},3000);		
			
			function scrollNews(obj){
				var $self = obj.find("ul:first");
				var heights = $self.find("li:first").height();
				$self.animate({"marginTop":-heights+"px"},800,function(){
						$self.css({marginTop:0}).find("li:first").appendTo($self);
					})
				}
		}
		//slideTop(".sucbox");
		slideTop("#success_borrow", 5);
		
		function Tab(obj,childLi,childBox){
        var box = $(obj);
        var oLi = $(childLi,box);
        var oDiv = $(childBox , box);
        oLi.mouseenter(function(){
            var index = oLi.index(this);
            $(oLi[index]).addClass("hover").siblings().removeClass("hover");
            oDiv.hide();
            $(oDiv[index]).show();
        })
    }
   	 Tab(".lz-tab","li",".lz-tabtxt");

})		

 $(function(){
           
           $("[onclick='change_picktime()']").each(function(){
        this.className = "js-datetime";
                })
                $(".js-datetime").datepicker({ buttonText: "Choose" , changeMonth: true,  changeYear: true, dateFormat: "yy-mm-dd",currentText: 'Now', showOtherMonths: true,gotoCurrent: true,yearRange:"1900:2020"});
           })
           
           
        jQuery(function(){  
    $.datepicker.regional['zh-CN'] = {  
      clearText: '���',  
      clearStatus: '�����ѡ����',  
      closeText: '�ر�',  
      closeStatus: '���ı䵱ǰѡ��',  
      prevText: '<����',  
      prevStatus: '��ʾ����',  
      prevBigText: '<<',  
      prevBigStatus: '��ʾ��һ��',  
      nextText: '����>',  
      nextStatus: '��ʾ����',  
      nextBigText: '>>',  
      nextBigStatus: '��ʾ��һ��',  
      currentText: '����',  
      currentStatus: '��ʾ����',  
      monthNames: ['һ��','����','����','����','����','����', '����','����','����','ʮ��','ʮһ��','ʮ����'],  
      monthNamesShort: ['һ','��','��','��','��','��', '��','��','��','ʮ','ʮһ','ʮ��'],  
      monthStatus: 'ѡ���·�',  
      yearStatus: 'ѡ�����',  
      weekHeader: '��',  
      weekStatus: '�����ܴ�',  
      dayNames: ['������','����һ','���ڶ�','������','������','������','������'],  
      dayNamesShort: ['����','��һ','�ܶ�','����','����','����','����'],  
      dayNamesMin: ['��','һ','��','��','��','��','��'],  
      dayStatus: '���� DD Ϊһ����ʼ',  
      dateStatus: 'ѡ�� m�� d��, DD',  
      dateFormat: 'yy-mm-dd',  
      firstDay: 1,  
      initStatus: '��ѡ������',  
      isRTL: false  
    };  
    $.datepicker.setDefaults($.datepicker.regional['zh-CN']);  
 
  });  
