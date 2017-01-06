var numbers = [0, 0, 0, 0, 0, 0];
var intervalID = [];
var windowObj = $(window);
var documentObj = $(document);

var isOpera = !!window.opera || navigator.userAgent.indexOf(' OPR/') >= 0;
// Opera 8.0+ (UA detection to detect Blink/v8-powered Opera)
var isFirefox = typeof InstallTrigger !== 'undefined';   // Firefox 1.0+
var isSafari = Object.prototype.toString.call(window.HTMLElement).indexOf('Constructor') > 0;
// At least Safari 3+: "[object HTMLElementConstructor]"
var isChrome = !!window.chrome && !isOpera;              // Chrome 1+
//var isIE = /*@cc_on!@*/false || !! document.documentMode; // At least IE6
var sliderUses = (window.location.pathname == "/" || window.location.pathname == "/sourceCi/index.php" || window.location.pathname == "/computools/index.php" || window.location.pathname == "/cmp/index.php" || window.location.pathname == "/cmp/web_apps.html" || window.location.pathname == "/cmp/_web_apps.php" || window.location.pathname == "/sourceCi/_web_apps.php" || window.location.pathname == "/cmp/desk.php" || window.location.pathname == "/cmp/mobile.php" || window.location.pathname == "/cmp/quality.php");
var isMainPage = (window.location.pathname == "/" || window.location.pathname == "/sourceCi/index.php" || window.location.pathname == "/computools/index.php" || window.location.pathname == "/cmp/index.php" );
var isPortfolioPage = (window.location.pathname == "/portfolio" || window.location.pathname == "/sourceCi/portfolio.php" || window.location.pathname == "/computools/portfolio.php");
var isWebPage = (window.location.pathname == "/web-applications/" || window.location.pathname == "/web-applications" || window.location.pathname == "/sourceCi/_web_apps.php" || window.location.pathname == "/computools/_web_apps.php" || window.location.pathname == "/cmp/web_apps.html" || window.location.pathname == "/cmp/_web_apps.php");
var isGalleryPage = (window.location.pathname == "/gallery/" || window.location.pathname == "/gallery" || window.location.pathname == "/sourceCi/gallery.html" || window.location.pathname == "/computools/gallery.html");
var mobileMenuOpened = '';
var keyAnchors = [];
var scrollPositions = [];
var menuElement;
var webTechArray = [];
var webBlocks = [];
var feedbackRuns = false;
var currentNumber;
var feedsArray = ['img/ViewPoint-feedback.jpg',"img/jalson_feedback.jpg","img/pallysoft_feedback.jpg","img/granat_feedback.jpg"];
var mainPage;

$(document).ready(function() {
    // team block loading
    //var imageWrap = $('.imgWrapper');
    //
    //for(var i=0;i<imageWrap.length;i++){
    //    imageWrap[i].style.backgroundPosition = -119*i+"px" + " 0px";
    //}
    

    menuElement = $('.scrollHeaderListElem');
    keyAnchors = $('.keyAnchor');
    var alreadySelected = false;
    windowObj.load(function() {
        windowObj.resize();
        for (var i = 0; i < keyAnchors.length; i++) {
            scrollPositions.push($(keyAnchors[i]).offset().top-55);
        }
        console.log(scrollPositions);
    });

    $('#nav ul li').on('mouseenter', function(){
        alreadySelected = false;
        if($(this).hasClass("activeLink")) {
            alreadySelected = true;
        }
        $(this).addClass("activeLink");
    });

    $('#nav ul li').on('mouseleave', function(){
        if (alreadySelected) return;
        else {
            $(this).toggleClass("activeLink");
            documentObj.scroll();
        }
    });

    if ($(window).scrollTop()>="500") $("#ToTop").fadeIn(700);
    $(window).scroll(function(){
        if ($(window).scrollTop()<="500") $("#ToTop").fadeOut(700);
        else $("#ToTop").fadeIn(700)
    });

    $("#ToTop").click(function(){$("html,body").animate({scrollTop:0},700)});

    if(sliderUses) {
        var sliderTimer;
        var speed = 5000;
        var run = setInterval('rotate()', speed);
        var item_width = $('#visibleArea li').outerWidth();
        var left_value = item_width * (-1);
        $('#visibleArea li:first').before($('#visibleArea li:last'));
        $('#visibleArea ul').css({'left': left_value});

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
    }

    webTechArray = $('.animationContainer img');
    webBlocks = $('.rowItem');

    var logoAnimated = $('.logoAnimated');
    logoAnimated.on('click', function(){
        $(this).addClass('animated flip');
        setTimeout(function(){
            logoAnimated.removeClass('animated flip');
        },1000);

    });

    $('.scrollHeaderListElem').add('.smallScrollElem').on('click', function (e) {
        e.stopPropagation();
        e.preventDefault();
        logoAnimated.click();
        $('#smallScrollContainer').fadeToggle();

    });

    $('.notReadyPage').mousemove(function (event) {
        $($('.langPopup')[1]).css({
            "display": "block",
            "left": event.pageX + 10,
            "top": event.pageY
        });
    });

    $('.notReadyPage').mouseleave(function () {
        $($('.langPopup')[1]).css({
            "display": "none"
        });
    });

    $('.mobileMenu div').on('click', function(){
        if(mobileMenuOpened == ''){
            $(this).animate({
                marginBottom: $(this).find('ul').height()
            }, 500, function(){
                $($(this).find('ul')).fadeToggle(300);
            });
            mobileMenuOpened = $(this).index()
        } else if($(this).index() == mobileMenuOpened){
            var currentElement = $(this);
            $($(this).find('ul')).fadeToggle(300, function() {
                currentElement.animate({
                    marginBottom: 0
                }, 500);
                mobileMenuOpened = '';
            })
        } else {
            var current = $(this).index();
            $($('.mobileMenu div')[mobileMenuOpened-1]).find('ul').fadeToggle(300,function() {
                $($('.mobileMenu div')[mobileMenuOpened - 1]).animate({
                    marginBottom: 0
                }, 500, function () {
                    var currentElement = $('.mobileMenu div')[current - 1];
                    $(currentElement).animate({
                        marginBottom: $(currentElement).find('ul').height()
                    }, 500, function(){
                        $(currentElement).find('ul').fadeToggle(300);
                    });
                    mobileMenuOpened = current;
                });
            });
        }
    });

    $('.headerListElem').add('.scrollHeaderListElem').add('.smallScrollElem').on('click', function (e) {
        e.preventDefault();
        if(window.location.pathname == "/sourceCi/desk.html" || window.location.pathname == "/desktop-en") return;
        currentNumber = $(this).index()+1;
        $('.scrollHeaderListElem').removeClass("activeLink");
        e.stopPropagation();
        $(this).addClass("activeLink");
        alreadySelected = true;
        var element = $(this).find('a').attr('href');
        $('body, html').animate({scrollTop: ($(element).offset().top)}, 500);
    });

    $('.smallScroll').on('click', function () {
        $('#smallScrollContainer').fadeToggle(300);
    });

    if (isMainPage) {

        var modalTestimonialsOpen = false;

        $('.lang:not(:first)').mousemove(function (event) {
            $($('.langPopup')[0]).css({
                "display": "block",
                "left": event.pageX + 10,
                "top": event.pageY
            });
        });

        $('.lang:not(:first)').mouseleave(function () {
            $($('.langPopup')[0]).css({
                "display": "none"
            });
        });
    }

    $('#howWork').on('click', function () {
        $($('.scrollHeaderListElem')[0]).click();
    });

    $('#burgerBtn').on('click', function(){
        $($('.popupMenu')[0]).fadeToggle(300);
        $('#scrollHeader').fadeToggle(300);
    });

    $('#closePopup').on('click', function () {
        $($('.popupMenu')[0]).fadeToggle(300);
        $('#scrollHeader').fadeToggle(300);
    });

    $("#modalClose").add('#modalBack').on('click', function () {
        console.log($(this).closest());
        $('#modalBack').fadeOut(500);
        $('body').css("overflow-y", "scroll");
        modalTestimonialsOpen = false;
    });

    windowObj.resize(function() {

        $('.topPageSlider').height(window.innerHeight-1);
        if(isWebPage) {
            $('.webSlider').height(windowObj.height());
        }
        if (window.document.documentElement.clientWidth <= 800) {
            $('iframe').add('#videoBack').height($('iframe').width() * (9 / 16));
        }
        if (window.document.documentElement.clientWidth > 800) {
            $('iframe').add('#videoBack').height(444);
        }

    });


    $('#upBtn').click(function() {
        $("html,body").animate({scrollTop:0},700);
    });

    $( 'input[name="question"]' ).keydown( function() {
        setTimeout(function () {
            var counts = $( 'input[name="question"]' ).val();
            if ( counts == sess_count ){
                $( '.mobAskQ' ).children('input').removeAttr('disabled');
                $( '.mobAskQ' ).children('input').addClass('activeSubmitProposal');
            } else {
                $( '.mobAskQ' ).children('input').attr('disabled','disabled');
                $( '.mobAskQ' ).children('input').removeClass('activeSubmitProposal');
            }
        }, 50);
    });

});

$(document).on('scroll', function () {
    if(!isMainPage) {
        if (documentObj.scrollTop() < scrollPositions[0]) {
            menuElement.removeClass('activeLink');
        } else if (documentObj.scrollTop() >= scrollPositions[0] && (documentObj.scrollTop() < scrollPositions[1])) {
            menuElement.removeClass('activeLink');
            $(menuElement[0]).addClass('activeLink');
        } else if (documentObj.scrollTop() >= scrollPositions[1] && documentObj.scrollTop() < scrollPositions[2]) {
            menuElement.removeClass('activeLink');
            $(menuElement[1]).addClass('activeLink');
        } else if (documentObj.scrollTop() >= scrollPositions[2] && documentObj.scrollTop() < scrollPositions[3]) {
            menuElement.removeClass('activeLink');
            $(menuElement[2]).addClass('activeLink');
        } else if (documentObj.scrollTop() >= scrollPositions[3] && documentObj.scrollTop() < scrollPositions[4]) {
            menuElement.removeClass('activeLink');
            $(menuElement[3]).addClass('activeLink');
        } else if (documentObj.scrollTop() >= scrollPositions[4] && documentObj.scrollTop() < scrollPositions[5]) {
            menuElement.removeClass('activeLink');
            $(menuElement[4]).addClass('activeLink');
        } else if (documentObj.scrollTop() >= scrollPositions[5] && documentObj.scrollTop() < scrollPositions[6]) {
            menuElement.removeClass('activeLink');
            $(menuElement[5]).addClass('activeLink');
        } else if (documentObj.scrollTop() >= scrollPositions[6] && documentObj.scrollTop() < scrollPositions[7]) {
            menuElement.removeClass('activeLink');
            $(menuElement[6]).addClass('activeLink');
        } else if (documentObj.scrollTop() >= scrollPositions[7] && documentObj.scrollTop() < scrollPositions[8]) {
            menuElement.removeClass('activeLink');
            $(menuElement[7]).addClass('activeLink');
        } else if (documentObj.scrollTop() >= scrollPositions[8]) {
            menuElement.removeClass('activeLink');
            $(menuElement[8]).addClass('activeLink');
        }
        if ($(window).scrollTop() + $(window).height() == $(document).height()) {
            menuElement.removeClass('activeLink');
            $(menuElement[scrollPositions.length - 1]).addClass('activeLink');
        }
    }

    documentObj.ready(function() {
        var logoCircle = $('.logoAnimated');
        var logoText = $('#scrollLogo');
        var burger = $('#burgerBtn');

        if (windowObj.width() >=1024) {
            if (documentObj.scrollTop() >= $(window).height()*0.25) {
                $('#scrollHeader').addClass('activeHeader');
                logoCircle.css({"top": "5px", "height": "42px"});
                logoText.css({"height": "42px", "margin-top": "5px", "margin-left": "105px"});
                burger.css({"height": "25px", "top": "15px"});
                $('.contactHeader').css({"height": "42px"})
            } else {
                $('#scrollHeader').removeClass('activeHeader');
                logoCircle.css({"top": "", "height": ""});
                logoText.css({"height": "", "margin-top": "", "margin-left": ""});
                burger.css({"height": "", "top": ""});
                $('.contactHeader').css({"height": ""})
            }
        }
        if (windowObj.width() <= 1024) {
            $('#scrollHeader').addClass('activeHeader');
            logoCircle.css({"top": "", "height": ""});
            logoText.css({"margin-left": "", "margin-top": ""});
            burger.css({"height": "", "top": ""});
        }
    });

    if(isMainPage) {

        if (documentObj.scrollTop() >= 500) {
            $('#upBtn').fadeIn(700)
        }

        if (documentObj.scrollTop() < 500) {
            $('#upBtn').fadeOut(700);
        }

        if (documentObj.scrollTop() > 700) {
            $('#casesContainer').animate({"opacity": "1"}, 700);
        }

        if (documentObj.scrollTop() > 1200) {
            $('#photosContainer').animate({"opacity": "1"}, 700);
        }

        if (documentObj.scrollTop() > 2300) {
            $('span.mainPageHidden').animate({"opacity": "1"}, 700);
        }

        if (documentObj.scrollTop() > 2400) {
            $('#credo').animate({"opacity": "1"}, 700);
        }

        if (documentObj.scrollTop() > 2300) {
            $('#clientsLogos').animate({"opacity": "1"}, 700);
        }

        if (documentObj.scrollTop() > 3900) {
            $('#feedbacks').animate({"opacity": "1"}, 700);
        }

        if (documentObj.scrollTop() > 3500) {
            $('#contactHiddenPhoto').animate({
                "opacity": "1",
                "bottom": 0
            }, 700);
            $('#auditionForm').animate({
                "opacity": "1",
                "margin-right": 0
            }, 700);
        }
    }

    if(isWebPage) {

        if (documentObj.scrollTop() > 230) {
            $('.techItem').animate({"margin-left": 0, "opacity": 1}, 500);
            $('#techHTML').animate({"margin-right": 0, "opacity": 1}, 500);
        }

        if (documentObj.scrollTop() > 900) {
            $('#scopeContent').animate({"opacity": 1}, 500);
            $('#scopeContent img').animate({"bottom": 0, "opacity": 1}, 500);
        }

        if (documentObj.scrollTop() > 1600) {
            $('#advantagesContent').animate({"opacity": 1}, 500);
        }

        if (documentObj.scrollTop() > 2600) {
            $('#casesContainer').animate({"opacity": 1}, 500);
        }

        if (documentObj.scrollTop() > 3300) {
            $('#webFooterContent').animate({"opacity": 1}, 500);
        }
    }
});

