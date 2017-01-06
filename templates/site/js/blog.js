/**
 * Created by Александр on 22.07.2015.
 */
$(document).ready(function(){
    $('.topPageSlider').height($(window).height());
    var sliderTimer;
    var speed = 5000;
    var run = setInterval('rotate()', speed);
    var item_width = $('#visibleArea li').outerWidth();
    var left_value = item_width * (-1);
    $('#visibleArea li:first').before($('#visibleArea li:last'));
    $('#visibleArea ul').css({'left' : left_value});

    $('#blogPrev').click(function () {
        if (feedbackRuns == false) {
            feedbackRuns = true;
            clearInterval(sliderTimer);
            var left_indent = parseInt($('#visibleArea ul').css('left')) + item_width;
            $('#visibleArea ul').animate({'left': left_indent}, 500, function () {
                feedbackRuns = false;
                $('#visibleArea li:first').before($('#visibleArea li:last'));
                $('#visibleArea ul').css({'left': left_value});


                sliderTimer = setInterval(function () {
                    $('#blogNext').click();
                }, 5000);
            });

            return false;
        }
    });

    $('#blogNext').click(function () {
        if (feedbackRuns == false) {
            feedbackRuns = true;
            clearInterval(sliderTimer);
            var left_indent = parseInt($('#visibleArea ul').css('left')) - item_width;
            $('#visibleArea ul').animate({'left': left_indent}, 500, function () {
                feedbackRuns = false;
                $('#visibleArea li:last').after($('#visibleArea li:first'));
                $('#visibleArea ul').css({'left': left_value});

                sliderTimer = setInterval(function () {
                    $('#blogNext').click();
                }, 5000);

            });

            return false;
        }

    });

    sliderTimer = setInterval(function () {

        $('#blogNext').click();

    }, 5000);
});

windowObj.on('resize', function(){
    $('.topPageSlider').height($(window).height());
});
