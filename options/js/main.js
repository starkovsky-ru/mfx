	// Фиксированное меню
		$(document).ready(function(){
        var $menu = $(".header-menu");
		var offset = $menu.offset();
		var $scroll_px = offset.top+52;
        $(window).scroll(function(){
            if ( $(this).scrollTop() > $scroll_px ){
                $menu.addClass("fixed");
            } else if($(this).scrollTop() <= $scroll_px && $menu.hasClass("fixed")) {
				$menu.removeClass("fixed");  
            }
        });
    });
	// Спойлер
	$(document).ready(function(){
	 $('.spoiler_links').click(function(){
	  $(this).next('.spoiler_body').toggle('normal');
	  return false;
	 });
	});
	
	// Вкладки
	$(document).ready(function(){
		$(".tabs").lightTabs();
	});
	
(function($){				
	jQuery.fn.lightTabs = function(options){
		var createTabs = function(){
			tabs = this;
			i = 0;
			showPage = function(i){
				$(tabs).children("div").children("div").hide();
				$(tabs).children("div").children("div").eq(i).show();
				$(tabs).children("ul").children("li").removeClass("active");
				$(tabs).children("ul").children("li").eq(i).addClass("active");
			}
			showPage(0);
			$(tabs).children("ul").children("li").each(function(index, element){
				$(element).attr("data-page", i);
				i++;                        
			});
			$(tabs).children("ul").children("li").click(function(){
				showPage(parseInt($(this).attr("data-page")));
			});				
		};		
		return this.each(createTabs);
	};	
})(jQuery);
	
		// POPUP MENU
		//Функция отображения PopUp
		function PopUpShowMenu(){
			$("#pop_menu").show();
			$("body").css("overflow","hidden");
		}
		//Функция скрытия PopUp
		function PopUpHideMenu(){
			$("#pop_menu").hide();
			$("body").css("overflow","auto");
		}
        
        
		//Функция отображения PopUp
		function PopUpShowMenuFooter(){
			$("#pop_menu_footer").show();
			$("body").css("overflow","hidden");
		}
		//Функция скрытия PopUp
		function PopUpHideMenuFooter(){
			$("#pop_menu_footer").hide();
			$("body").css("overflow","auto");
		}
	
    
    $('.mob-step').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    items:1,
    navText: ['<','>']
})
    $('.mob-five-step').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    items:1,
    navText: ['<','>']
})
    
    //Функция кнопки ВВЕРХ
        $('.scroll_top').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 800);
        return false;
    });