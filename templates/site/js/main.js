var numbers = [0, 0, 0, 0, 0, 0];
var intervalID = [];
var windowObj = $(window);
var documentObj = $(document);
var btn = $("#navIcon");
var menu = btn.parent();
var menuSmall = menu.find('#navMenuSmall');

$(document).ready(function() {
    var aboutusColumns = $('.measureColumns li');
    var agentHeight = $(window).height();

    function animateStyles(){
        $.fn.viewportChecker = function(useroptions){
            var options = {
                classToAdd: 'visible',
                offset: 100,
                repeat: false,
                callbackFunction: function(elem, action){},
                scrollHorizontal: false
            };
            $.extend(options, useroptions);
            var $elem = this,
                windowSize = (!options.scrollHorizontal) ? windowObj.height() : windowObj.width(),
                scrollElem = ((navigator.userAgent.toLowerCase().indexOf('webkit') != -1) ? 'body' : 'html');
            this.checkElements = function(){

                // Set some vars to check with
                if(!options.scrollHorizontal){
                    var viewportTop = $(scrollElem).scrollTop(),
                        viewportBottom = (viewportTop + windowSize);
                }
                else{
                    var viewportTop = $(scrollElem).scrollLeft(),
                        viewportBottom = (viewportTop + windowSize);
                }
                $elem.each(function(){
                    var $obj = $(this);
                    if ($obj.hasClass(options.classToAdd) && !options.repeat){
                        //return;
                    }
                    var elemTop = (!options.scrollHorizontal) ? Math.round( $obj.offset().top ) + options.offset : Math.round( $obj.offset().left ) + options.offset,
                        elemBottom = elemTop + ($obj.height());
                    if ((elemTop < viewportBottom) && (elemBottom > viewportTop)){
                        $obj.addClass(options.classToAdd);
                        options.callbackFunction($obj, "add");
                    } else if ($obj.hasClass(options.classToAdd) && (options.repeat)){
                        $obj.removeClass(options.classToAdd);
                        options.callbackFunction($obj, "remove");
                    }
                    if(elemTop < viewportTop){
                        $obj.removeClass(options.classToAdd);
                        options.callbackFunction($obj);
                    }
                });
            };
            $(window).bind("load scroll touchmove", this.checkElements);
            $(window).scroll(this.checkElements);
            this.checkElements();
            $(window).resize(function(e){
                windowSize = (!options.scrollHorizontal) ? e.currentTarget.innerHeight : e.currentTarget.innerWidth;
                //agentHeight = windowHeight;
                agentHeight = $(window).height();
            });
            this.checkElements();
            return this;
        };
    }

    function addClassStyles(elementThis, beforeClasses, classes, offsetNumber){
        elementThis.addClass(beforeClasses).viewportChecker({
            classToAdd:classes, offset:offsetNumber, repeat: true
        });
    }

    if (windowObj.width() > 800) {
        animateStyles();

        aboutusColumns.viewportChecker({
            classToAdd:'run',
            offset:140,
            repeat: true
        });

        addClassStyles($('.fade'), 'beforeFadeIn', 'fadeIn', 200);
        addClassStyles($('.jump'), 'beforeFadeInJump', 'fadeInJump', 200);
        //addClassStyles($('.contactForm'), 'beforeFadeIn', 'fadeIn', 100);
        addClassStyles($('.contactForm'), 'beforeFadeIn', 'fadeIn', 200);
        addClassStyles($('#indexTechnologies li'), 'beforeFadeInJump', 'fadeInJump', 75);
        addClassStyles($('.companyCounts li'), 'beforeFadeInJump', 'fadeInJump', 200);

        addClassStyles($('.newServicesList li'), 'beforeFadeInJump', 'fadeInJump', 100);

        addClassStyles($('.testimonialsList li'), 'beforeFadeInJump', 'fadeInJump', 100);
        addClassStyles($('.caseStudies li:not(".waiting")'), 'beforeFadeIn', 'fadeIn', 100);
        addClassStyles($('.contactForm'), 'beforeFadeIn', 'fadeIn', 100);
        addClassStyles($('.titleQuestionList'), 'beforeFadeInJump', 'fadeInJump', 125);

        /*--------for aboutUs--------*/
        addClassStyles($('.aboutUsHeadContainer'), 'beforeFadeIn', 'fadeIn', 100);
        addClassStyles($('.graphic li'), 'beforeFadeIn', 'fadeIn', 300);
        addClassStyles($('.carouselEmployees'), 'beforeFadeIn', 'fadeIn', 300);
        addClassStyles($('.measuring'), 'beforeFadeIn', 'fadeIn', 250);
        addClassStyles($('.capabilitiesContainer >'), 'beforeFadeIn', 'fadeIn', 200);

        addClassStyles($('.valuesContainer li'), 'beforeFadeInJump', 'fadeInJump', 100);

        addClassStyles($('.map'), 'beforeFadeIn', 'fadeIn', 200);
        addClassStyles($('.links'), 'beforeFadeIn', 'fadeIn', 200);
        addClassStyles($('.socialLinks'), 'beforeFadeInJump', 'fadeInJump', 200);

        /* for case citizen */
        addClassStyles($('.citizenTitle'), 'beforeFadeInUp', 'fadeInUp', 200);
        addClassStyles($('.caseDescription'), 'beforeFadeInUp', 'fadeInUp', 200);
        addClassStyles($('.caseBigDescription'), 'beforeFadeInUp', 'fadeInUp', 200);
        addClassStyles($('.caseText'), 'beforeFadeInUp', 'fadeInUp', 200);

        addClassStyles($('.imgFromRight'), 'beforeFadeInRight', 'fadeInRight', 400);
        addClassStyles($('.imgFromLeft'), 'beforeFadeInLeft', 'fadeInLeft', 400);
    }
    /* statups */

    $('.contactBtn').click(function(){
        var contact = $(this);
        var contacts = contact.parent();
        var passive = contacts.find('.contactBtn');
        passive.removeClass('contactBtnActive');
        contact.addClass('contactBtnActive');

        function showBlock(elementShow){
            $('.contactAdress').hide();
            elementShow.css('display', 'inline-block');
        }

        if($('.contactBtnActive').hasClass('contactBtnCanada')){
            showBlock($('#contactCanada'));
        } else if ($('.contactBtnActive').hasClass('contactBtnGermany')){
            showBlock($('#contactGermany'));
        } else if ($('.contactBtnActive').hasClass('contactBtnUkraine')){
            showBlock($('#contactUkraine'));
        } else {
            showBlock($('#contactCanadaNew'));
        }
    });

    if (windowObj.width() >860  && windowObj.width() <=1440) {
        $('.logoClients li').slice(0,20).css('display', 'inline-block');
    }
    if (windowObj.width() <=860) {
        $('.logoClients li').slice(1,4).css('display', 'inline-block');

        $('.seeClients').click(function () {
            $(this).hide();
            $('.logoClients li:lt(20)').slideDown();
            $("html,body").animate({scrollTop: $('.logoClients li:lt(20)').offset().top + 100});
        });
    }
    if (windowObj.width() <= 800 && windowObj.width() > 600) {
        $('.testimonialsList li').slice(0,1).css('display', 'inline-block');
    }
    //$('.seeTest').click(function () {
    //    $(this).hide();
    //    $('.testimonialsList li:lt(4)').css('display', 'inline-block');
    //});

    //$('.moreBtnIndex').click(function(){
    //    var block = $(this).parent().parent().find('.hoverBlockIndex');
    //    var height = $(this).parent().parent().find('.hoverBlockIndex').height();
    //    $(this).parent().parent().find(block).hide();
    //    $(this).parent().find(block).show().css({'margin-top': (-0.5)*height}).width($('ul#indexTechnologies').width());
    //
    //});

    /*-------- for page expertise popups----------*/
    $('.closeHover').click(function(){
        $(this).parent().hide();
        $('.moreBtn').show();
    });

    var forms = document.getElementsByTagName('form');
    for (var i = 0; i < forms.length; i++) {
        forms[i].noValidate = true;
        forms[i].addEventListener('submit', function(event) {
            if (!event.target.checkValidity()) {
                event.preventDefault();
                alert('Please, fill the form');
                $('#modal-one').hide();
            }
            ga('send', 'event', 'getquotehp', 'send');
        }, false);
    }

    $("#more").click(function() {
        $('html, body').animate({
            scrollTop: $(".next").offset().top
        }, 500);
    });

    windowObj.scroll(function () {
        var scroll = $("#more");
        if ($(window).scrollTop() <= 100) {
            scroll.css('opacity', 1);
        } else scroll.css('opacity', 0);
    });


});

window.onload = function() {

    function pageAndAlignStyles(page, align, newHeightBlock, marginTopBlock, topBlock){
        page.css('height', newHeightBlock);
        align.css({'margin-top' : marginTopBlock, 'top' : topBlock });
    }

    function heightForBlock(vHeight, header){
        $('.cuthead').each(function () {
            var page = $(this),
                itemHeight = page.find('.containerWidth'),
                align = page.find('.align'),
                margin2 = 160;

            if ((itemHeight.outerHeight() + header.outerHeight()) > vHeight.outerHeight()*0.95) {
                pageAndAlignStyles(page, align, itemHeight.outerHeight() + margin2, 60, 0);
            }
            else{
                pageAndAlignStyles(page, align, vHeight.outerHeight()*0.95, (align.outerHeight() + header.outerHeight())*(-1/2), '50%');
            }
        });
    }

    function footerPageLast(footer, vHeight, margin){
        $('.pageLast').each(function () {
            var page = $(this),
                itemHeight = page.find('.containerWidth'),
                align = page.find('.align');

            if ((itemHeight.outerHeight() + footer.outerHeight()) > vHeight.outerHeight()) {
                pageAndAlignStyles(page, align, itemHeight.outerHeight() + margin, 30, 0);
            }
            else {
                pageAndAlignStyles(page, align, vHeight.outerHeight() - footer.outerHeight(), align.outerHeight()*(-1/2), '50%');
            }
        });
    }

    function blocksOnPageSlide(vHeight, margin){
        $('.page').each(function () {
            var page = $(this),
                itemHeight = page.find('.containerWidth'),
                align = page.find('.align');

            if (itemHeight.outerHeight() > vHeight.outerHeight()) {
                pageAndAlignStyles(page, align, itemHeight.outerHeight() + margin, 30, 0);
            }
            else{
                pageAndAlignStyles(page, align, vHeight.outerHeight(), align.outerHeight()*(-1/2), '50%');
            }

        });
    }

    function headAboutUs(vHeight, margin) {
        $('.head').each(function () {
            var page = $(this),
                itemHeight = $(this).find('.aboutUsHeadContainer'),
                align = $(this).find('.headAlign'),
                check = $(this).find('.checkCv'),
                margin = 140;

            page.css('height', vHeight.outerHeight() * 0.95);
            align.css({'margin-top': ((align.outerHeight() + check.outerHeight()) * (-1 / 2)), 'top': '50%'});

            if ((itemHeight.outerHeight() + check.outerHeight() + margin) > vHeight.outerHeight() * 0.95) {
                page.css('height', (itemHeight.outerHeight() + margin));
                align.css({'margin-top': 30, 'top': 0});
            }
        });
    }

    function Align(){
        var vHeight = $(window),
            footer = $('#footer'),
            header = $('#headerMain'),
            margin;

        if ( vHeight.width() >= 1024) { margin = 90; } else { margin = 70; }

        blocksOnPageSlide(vHeight, margin);
        headAboutUs(vHeight, margin);
        footerPageLast(footer, vHeight, margin);
        heightForBlock(vHeight, header);//main page head
    }

    $(".modalLoad").fadeOut("slow");

    Align();

    $('.alignCase').each(function () {
        var elem = $(this);
        elem.css({'margin-top' : (elem.outerHeight())*(-1/2)});
    });

    $(window).resize(function(e){
        Align();
    });
};

