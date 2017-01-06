( function( $ ) {
 
	$(document).ready(function() {

  $("#navIcon").click(function() {

        var btn = $(this);
        var menu = $(this).parent().parent();
        var menuSmall = menu.find('#navMenuSmall');
        var logo = ('.logoFull');

        btn.css({"background-image": "url('http://computools.com/img/close.png')"});

        if (menu.hasClass("expanded")) {
            menu.removeClass('expanded').addClass('collapsed');
            menuSmall.slideDown();
            if ($(window).width() <= 600) {
                $('.site-title').hide();
                btn.css({"left": "10px"});
            }
        }
        else if (menu.hasClass("collapsed")) {
            menu.removeClass('collapsed').addClass('expanded');
            menuSmall.slideUp();
            $('.site-title').show();
            btn.css({"background-image": "", "left": ""});
        }
    });
	
	$('.categoryBtn').click(function(){
		var self = $(this).parent();
		self.find('#menu-category-menu-items-small li').toggle();
		self.css({'position':'relative'});
		selectChild();
	});
	
	$(document).mouseup(function (e) {
        var div = $('.categoryBtn');

        if (!div.is(e.target)
            && div.has(e.target).length === 0) {
            $('#menu-category-menu-items-small li').hide();
        }
    });
	
	function selectChild() {
		$('#menu-category-menu-items-small li').click(function(){
			var self = $(this);
			var text = self.find('.category-screen-reader-text').text();
			self.parent().parent().parent().find('.categoryBtn').text(text);
		})
	}
	
}); 


} )( jQuery );	

