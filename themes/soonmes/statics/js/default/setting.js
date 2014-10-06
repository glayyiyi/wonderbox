$.fn.smartFloat = function() {
	var position = function(element) {
		var top = element.position().top, pos = element.css("position");
		$(window).scroll(function() {
			var scrolls = $(this).scrollTop();
			if (scrolls > top) {
				$(".gotoTop").show();
				$(".floatBar").addClass("shadow");
				if (window.XMLHttpRequest) {
					element.css({
						position: "fixed",
						top: 0						
					});	

				} else {
					element.css({
						top: scrolls
					});	
				}
			}else {
				$(".gotoTop").hide();
				element.css({
					position: pos,
					top: top
				});	
				$(".floatBar").removeClass("shadow");
			}
		});
};
	return $(this).each(function() {
		position($(this));						 
	});
};
//top menu
$("#floatBar").smartFloat();

//top menu drop
function mainmenu(){
	$(" #nav ul ").css({display: "none"}); // Opera Fix
	$(" #nav li").hover(function(){
			$(this).find('ul:first').css({visibility: "visible",display: "none"}).show();
			},function(){
			$(this).find('ul:first').css({visibility: "hidden"});
			});
	$(" #selectChatPanel").css({display: "none"}); // Opera Fix
	$(" #openChat").hover(function(){
			$("#selectChatPanel").css({visibility: "visible",display: "none"}).show();
			},function(){
			$("#selectChatPanel").css({visibility: "hidden"});
			});
	$(" #selectChatPanel").hover(function(){
			$("#selectChatPanel").css({visibility: "visible",display: "none"}).show();
			},function(){
			$("#selectChatPanel").css({visibility: "hidden"});
			});
}
 $(document).ready(function(){					
	mainmenu();
});
 
 //¹ö¶¯Ãªµã
$(document).ready(function() {
    $('.gotoTop a[href*=#]').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var $target = $(this.hash);
            $target = $target.length && $target || $('[name=' + this.hash.slice(1) + ']');
            if ($target.length) {
                var targetOffset = $target.offset().top;
                $('html,body').animate({
                    scrollTop: targetOffset
                },
                300);
                return false;
            }
        }
    });
});