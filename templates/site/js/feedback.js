var windowObj = $(window);
var documentObj = $(document);

$(document).ready(function() {
    $($('.checked')[0]).click();

    var page = $('.contentFeedback'),
        itemHeight = $('.contentFeedback').find('.containerWidth'),
        align = $('.contentFeedback').find('.alignFeedback');

    page.css('height', ($(window).outerHeight() - $('#footer').outerHeight()));
    align.css({ 'bottom' : 0 });

    if ((itemHeight.outerHeight() + $('#footer').outerHeight()) > $(window).outerHeight()) {
        page.css('height', (itemHeight.outerHeight() + margin) );
        align.css({'bottom' : 0 });
    }

    $('.unChecked').click(function() {
        index = $('.point').index($(this).parent());
        $('.checked').hide();
        $('.unChecked').show();

        $($('.point')[index]).find('.unChecked').hide();
        $($('.point')[index]).find('.checked').show();
    });

    $('.checked').click(function() {
        index = $('.point').index($(this).parent());
        $('.radioCheck')[index].click();
        $('.checked').hide();
        $('.unChecked').show();

        $($('.point')[index]).find('.unChecked').hide();
        $($('.point')[index]).find('.checked').show();
    })
});

    window.onload = function () {

        $(".modalLoad").fadeOut("slow");
        Align();

        function Align() {

            var vHeight = $(window),
                footer = $('#footer'),
                header = $('#headerMain'),
                popup = $('#popupForm'),
                margin;

            if (vHeight.width() >= 1024) {
                margin = 90;
            } else {
                margin = 70;
            }

            $('.contentFeedback').each(function () {
                var page = $(this),
                    align = $(this).find('.alignFeedback'),
                    itemHeight = align.find('.containerWidth');

                if ((itemHeight.outerHeight() + footer.outerHeight() + header.outerHeight()) > vHeight.outerHeight()) {
                    page.css('height', (itemHeight.outerHeight() + margin));
                }
                else {
                    page.css('height', (vHeight.outerHeight() - footer.outerHeight()));
                    align.css({'margin-top': (align.outerHeight() * (-1 / 2)), 'bottom': '0'});
                }
            });

        }


        $(window).resize(function (e) {
            Align();
        });
    };


window.onbeforeunload = function(e) {

    function showForm() {
        modalChecklist.style.display = "block";
    }
    return showForm();
};