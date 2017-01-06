
$(document).ready(function(){
    $(".deskBtnDown").on("click","a", function (event) {
        event.preventDefault();
        var id = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 700);
    });

    if ($(window).scrollTop()>="500") $("#ToTop").fadeIn(700)
    $(window).scroll(function(){
        if ($(window).scrollTop()<="500") $("#ToTop").fadeOut(700)
        else $("#ToTop").fadeIn(700)
    });

    $(".scrollHeaderListElem").on("click","a", function (event) {
        event.preventDefault();
        var id = $(this).attr('href'),
            top = $(id).offset().top - 45;
        $('body,html').animate({scrollTop: top}, 700);
    });

    if (windowObj.width() > 800) {
        $('.technLine').addClass("hidden").viewportChecker({
            classToAdd:'visible animated fadeInLeft',
            offset:200
        });
        $('.database').addClass("hidden").viewportChecker({
            classToAdd:'visible animated fadeIn',
            offset:200
        });
        $('.appCatContent p').addClass("hidden").viewportChecker({
            classToAdd:'visible animated fadeIn',
            offset:200
        });
        $('.category').addClass("hidden").viewportChecker({
            classToAdd:'visible animated fadeIn',
            offset:200
        });
        $('.catName').addClass("hidden").viewportChecker({
            classToAdd:'visible animated fadeIn',
            offset:200
        });
        $('.advContent p').addClass("hidden").viewportChecker({
            classToAdd:'visible animated fadeIn',
            offset:200
        });
        $('.advName p').addClass("hidden").viewportChecker({
            classToAdd:'visible animated fadeIn',
            offset:200
        });
        $('.adv').addClass("hidden").viewportChecker({
            classToAdd:'visible animated fadeIn',
            offset:200
        });
        $('.schemeBlocks').addClass("hidden").viewportChecker({
            classToAdd:'visible animated fadeInRight',
            offset:200
        });
        $('.scheme img').addClass("hidden").viewportChecker({
            classToAdd:'visible animated fadeIn',
            offset:200
        });
        $('.deskProjects').addClass("hidden").viewportChecker({
            classToAdd:'visible animated fadeIn',
            offset:200
        });
        $('.proj').addClass("hidden").viewportChecker({
            classToAdd:'visible animated-fast fadeIn',
            offset:200
        });
        $('.commandText').addClass("hidden").viewportChecker({
            classToAdd:'visible animated fadeInUp',
            offset:200
        });
        $('.deskQuestions').addClass("hidden").viewportChecker({
            classToAdd:'visible animated fadeInUp',
            offset:200
        });
    }

});
