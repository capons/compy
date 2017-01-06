
$(document).ready(function() {
    $('.dataEvents').each(function(){
        if($(this).text()==$('.curr a').attr('rel'))
        {
            $(this).css('color', '#3dcd58');
        }
    });
});