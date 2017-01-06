$(document).ready(function(){

    if ($(window).scrollTop()>="500") $("#ToTop").fadeIn(700);
    $(window).scroll(function(){
        if ($(window).scrollTop()<="500") $("#ToTop").fadeOut(700);
        else $("#ToTop").fadeIn(700)
    });
    $("#ToTop").click(function(){$("html,body").animate({scrollTop:0},700)});

    if (windowObj.width() > 800) {
        $.fn.viewportChecker = function (useroptions) {
            var options = {
                classToAdd: 'visible',
                offset: 100,
                callbackFunction: function (elem) {
                }
            };
            $.extend(options, useroptions);
            var $elem = this,
                windowHeight = $(window).height();

            this.checkElements = function () {
                var scrollElem = ((navigator.userAgent.toLowerCase().indexOf('webkit') != -1) ? 'body' : 'html'),
                    viewportTop = $(scrollElem).scrollTop(),
                    viewportBottom = (viewportTop + windowHeight);

                $elem.each(function () {
                    var $obj = $(this);
                    if ($obj.hasClass(options.classToAdd)) {
                        return;
                    }

                    var elemTop = Math.round($obj.offset().top) + options.offset,
                        elemBottom = elemTop + ($obj.height());

                    if ((elemTop < viewportBottom) && (elemBottom > viewportTop)) {
                        $obj.addClass(options.classToAdd);
                        options.callbackFunction($obj);
                    }
                });
            };

            $(window).scroll(this.checkElements);
            this.checkElements();

            $(window).resize(function (e) {
                windowHeight = e.currentTarget.innerHeight;
            });
        };
        $('.imgMob').addClass("hidden").viewportChecker({
            classToAdd: 'visible animated fadeInRight',
            offset: 200
        });
        $('.mobAdv').addClass("hidden").viewportChecker({
            classToAdd: 'visible animated fadeIn',
            offset: 200
        });
        $('.mobProj').addClass("hidden").viewportChecker({
            classToAdd: 'visible animated fadeIn',
            offset: 200
        });
        $('.scheme img').addClass("hidden").viewportChecker({
            classToAdd: 'visible animated fadeIn',
            offset: 200
        });

        $('.imgHandMob').addClass("hidden").viewportChecker({
            classToAdd: 'visible animated fadeInLeft',
            offset: 200
        });
        $('.mobQuestions').addClass("hidden").viewportChecker({
            classToAdd: 'visible animated fadeInRight',
            offset: 200
        });
    }
});
