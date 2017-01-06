
$(document).ready(function() {
    $('.blocks').click( function(){
        var self = $(this);
        self.css('height','550px');
        self.find('.blockFooter').css('margin-top','265px');
        self.find('.blockFooter a img').attr('src','/css/img/arrow_up.png');
        var arrows =  self.find('.leftArrow, .rightArrow');
        self.find('.leftArrow, .rightArrow').click(function(){
            self.css('height','235px');
            self.find('.blockFooter').css('margin-top','-50px');
            self.find('.blockFooter a img').attr('src','/css/img/arrow_down.png');
            arrows.unbind();
            return false;
        });
    });
});

