var numbers = [0, 0, 0, 0, 0, 0];
var intervalID = [];
var windowObj = $(window);
var documentObj = $(document);

var btn = $("#navIcon");
var menu = btn.parent();
var menuSmall = menu.find('#navMenuSmall');

$(document).ready(function() {
	

    Align();

    var aboutusColumns = $('.measureColumns li');
    var agentHeight = $(window).height();

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
            windowSize = (!options.scrollHorizontal) ? $(window).height() : $(window).width(),
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

    /*windowObj.on('scroll', function(){
     if(windowObj.scrollTop > 140 && windowObj.scrollTop < 140 + agentHeight){
     aboutusColumns.addClass('run');
     } else {
     aboutusColumns.removeClass('run');
     }


     aboutusColumns.viewportChecker({
     classToAdd:'run',
     offset:140
     });
     $('#indexTechnologies li:first-child').addClass("hidden").viewportChecker({
     classToAdd:'visible animated fadeInJump',
     offset:125
     });
     $('#indexTechnologies li:nth-child(2)').addClass("hidden").viewportChecker({
     classToAdd:'visible animated fadeInJump',
     offset:250
     });
     $('#indexTechnologies li:nth-child(3)').addClass("hidden").viewportChecker({
     classToAdd:'visible animated fadeInJump',
     offset:375
     });
     $('#indexTechnologies li:nth-child(4)').addClass("hidden").viewportChecker({
     classToAdd:'visible animated fadeInJump',
     offset:500
     });

     $('.companyCounts li').addClass("hidden").viewportChecker({
     classToAdd:'visible animated fadeInJump',
     offset:200
     });

     $('.newServicesList li:first-child').addClass("hidden").viewportChecker({
     classToAdd:'visible animated fadeInJump',
     offset:200
     });
     $('.newServicesList li:nth-child(2)').addClass("hidden").viewportChecker({
     classToAdd:'visible animated fadeInJump',
     offset:400
     });
     $('.newServicesList li:last-child').addClass("hidden").viewportChecker({
     classToAdd:'visible animated fadeInJump',
     offset:600
     });
     $('.testimonialsList li').addClass("hidden").viewportChecker({
     classToAdd:'visible animated fadeInJump',
     offset:100
     });

     $('.caseStudies ul').addClass("hidden").viewportChecker({
     classToAdd:'visible animated fadeIn',
     offset:100
     });
     $('.contactForm').addClass("hidden").viewportChecker({
     classToAdd:'visible animated fadeIn',
     offset:100
     });
     /!*for aboutUs*!/
     $('.graphicText').addClass("hidden").viewportChecker({
     classToAdd:'visible animated fadeIn',
     offset:500
     });
     $('.carouselEmployees').addClass("hidden").viewportChecker({
     classToAdd:'visible animated fadeIn',
     offset:200
     });
     $('.measuring').addClass("hidden").viewportChecker({
     classToAdd:'visible animated fadeIn',
     offset:200
     });
     $('.capabilitiesContainer >').addClass("hidden").viewportChecker({
     classToAdd:'visible animated fadeIn',
     offset:200
     });
     $('.valuesContainer li:first-child').addClass("hidden").viewportChecker({
     classToAdd:'visible animated fadeInJump',
     offset:100
     });
     $('.valuesContainer li:nth-child(2)').addClass("hidden").viewportChecker({
     classToAdd:'visible animated fadeInJump',
     offset:150
     });
     $('.valuesContainer li:nth-child(3)').addClass("hidden").viewportChecker({
     classToAdd:'visible animated fadeInJump',
     offset:200
     });
     $('.valuesContainer li:nth-child(4)').addClass("hidden").viewportChecker({
     classToAdd:'visible animated fadeInJump',
     offset:250
     });
     $('.valuesContainer li:nth-child(5)').addClass("hidden").viewportChecker({
     classToAdd:'visible animated fadeInJump',
     offset:300
     });
     $('.valuesContainer li:nth-child(6)').addClass("hidden").viewportChecker({
     classToAdd:'visible animated fadeInJump',
     offset:350
     });
     $('.valuesContainer li:nth-child(7)').addClass("hidden").viewportChecker({
     classToAdd:'visible animated fadeInJump',
     offset:400
     });
     $('.valuesContainer li:nth-child(8)').addClass("hidden").viewportChecker({
     classToAdd:'visible animated fadeInJump',
     offset:450
     });
     $('.valuesContainer li:nth-child(9)').addClass("hidden").viewportChecker({
     classToAdd:'visible animated fadeInJump',
     offset:500
     });
     $('.valuesContainer li:nth-child(10)').addClass("hidden").viewportChecker({
     classToAdd:'visible animated fadeInJump',
     offset:550
     });
     $('.map').addClass("hidden").viewportChecker({
     classToAdd:'visible animated fadeIn',
     offset:200
     });
     $('.links').addClass("hidden").viewportChecker({
     classToAdd:'visible animated fadeIn',
     offset:200
     });
     $('.socialLinks').addClass("hidden").viewportChecker({
     classToAdd:'visible animated fadeInJump',
     offset:200
     });
     });*/

    aboutusColumns.viewportChecker({
        classToAdd:'run',
        offset:140,
        repeat: true
    });
    //$('.mainPageSlide  .containerWidth').addClass("hidden").viewportChecker({
    //    classToAdd:'visible animated fadeIn', offset:100, repeat: true
    //});
    $('#indexTechnologies li:first-child').addClass("hidden").viewportChecker({
        classToAdd:'visible animated fadeInJump', offset:75, repeat: true
    });
    $('#indexTechnologies li:nth-child(2)').addClass("hidden").viewportChecker({
        classToAdd:'visible animated fadeInJump', offset:150, repeat: true
    });
    $('#indexTechnologies li:nth-child(3)').addClass("hidden").viewportChecker({
        classToAdd:'visible animated fadeInJump', offset:225, repeat: true
    });
    $('#indexTechnologies li:nth-child(4)').addClass("hidden").viewportChecker({
        classToAdd:'visible animated fadeInJump', offset:300, repeat: true
    });
    $('.companyCounts li').addClass("hidden").viewportChecker({
        classToAdd:'visible animated fadeInJump', offset:200, repeat: true
    });
    $('.newServicesList li:first-child').addClass("hidden").viewportChecker({
        classToAdd:'visible animated fadeInJump', offset:100, repeat: true
    });
    $('.newServicesList li:nth-child(2)').addClass("hidden").viewportChecker({
        classToAdd:'visible animated fadeInJump', offset:200, repeat: true
    });
    $('.newServicesList li:last-child').addClass("hidden").viewportChecker({
        classToAdd:'visible animated fadeInJump', offset:300, repeat: true
    });
    $('.testimonialsList li').addClass("hidden").viewportChecker({
        classToAdd:'visible animated fadeInJump', offset:100, repeat: true
    });

    $('.caseStudies li').addClass("hidden").viewportChecker({
        classToAdd:'visible animated fadeIn', offset:100, repeat: true
    });
    $('.contactForm').addClass("hidden").viewportChecker({
        classToAdd:'visible animated fadeIn', offset:100, repeat: true
    });

    /*--------for aboutUs--------*/
    $('.aboutUsHead  >').addClass("hidden").viewportChecker({
        classToAdd:'visible animated fadeIn', offset:100, repeat: true
    });
    //$('.graphicText').addClass("hidden").viewportChecker({
    //    classToAdd:'visible animated fadeIn', offset:500, repeat: true
    //});
    //$('#graphic').addClass("hidden").viewportChecker({
    //    classToAdd:'visible animated fadeIn', offset:550, repeat: true
    //});
    $('.graphic li').addClass("hidden").viewportChecker({
        classToAdd:'visible animated fadeIn', offset:300, repeat: true
    });
    $('.carouselEmployees').addClass("hidden").viewportChecker({
        classToAdd:'visible animated fadeIn', offset:300, repeat: true
    });
    $('.measuring').addClass("hidden").viewportChecker({
        classToAdd:'visible animated fadeIn', offset:250, repeat: true
    });
    $('.capabilitiesContainer >').addClass("hidden").viewportChecker({
        classToAdd:'visible animated fadeIn', offset:200, repeat: true
    });
    $('.valuesContainer li:first-child').addClass("hidden").viewportChecker({
        classToAdd:'visible animated fadeInJump', offset:100, repeat: true
    });
    $('.valuesContainer li:nth-child(2)').addClass("hidden").viewportChecker({
        classToAdd:'visible animated fadeInJump', offset:125, repeat: true
    });
    $('.valuesContainer li:nth-child(3)').addClass("hidden").viewportChecker({
        classToAdd:'visible animated fadeInJump', offset:150, repeat: true
    });
    $('.valuesContainer li:nth-child(4)').addClass("hidden").viewportChecker({
        classToAdd:'visible animated fadeInJump', offset:175, repeat: true
    });
    $('.valuesContainer li:nth-child(5)').addClass("hidden").viewportChecker({
        classToAdd:'visible animated fadeInJump', offset:200, repeat: true
    });
    $('.valuesContainer li:nth-child(6)').addClass("hidden").viewportChecker({
        classToAdd:'visible animated fadeInJump', offset:225, repeat: true
    });
    $('.valuesContainer li:nth-child(7)').addClass("hidden").viewportChecker({
        classToAdd:'visible animated fadeInJump', offset:250, repeat: true
    });
    $('.valuesContainer li:nth-child(8)').addClass("hidden").viewportChecker({
        classToAdd:'visible animated fadeInJump', offset:275, repeat: true
    });
    $('.valuesContainer li:nth-child(9)').addClass("hidden").viewportChecker({
        classToAdd:'visible animated fadeInJump', offset:300, repeat: true
    });
    $('.valuesContainer li:nth-child(10)').addClass("hidden").viewportChecker({
        classToAdd:'visible animated fadeInJump', offset:325, repeat: true
    });
    $('.map').addClass("hidden").viewportChecker({
        classToAdd:'visible animated fadeIn', offset:200, repeat: true
    });
    $('.links').addClass("hidden").viewportChecker({
        classToAdd:'visible animated fadeIn', offset:200, repeat: true
    });
    $('.socialLinks').addClass("hidden").viewportChecker({
        classToAdd:'visible animated fadeInJump', offset:200, repeat: true
    });

    // ======================== repeatable animation ========================================

    /* aboutusColumns.viewportChecker({
     classToAdd:'run',
     offset:140+agentHeight
     });
     $('#indexTechnologies li:first-child').addClass("hidden").viewportChecker({
     classToAdd:'visible animated fadeInJump',
     offset:125+agentHeight
     });
     $('#indexTechnologies li:nth-child(2)').addClass("hidden").viewportChecker({
     classToAdd:'visible animated fadeInJump',
     offset:250+agentHeight
     });
     $('#indexTechnologies li:nth-child(3)').addClass("hidden").viewportChecker({
     classToAdd:'visible animated fadeInJump',
     offset:375+agentHeight
     });
     $('#indexTechnologies li:nth-child(4)').addClass("hidden").viewportChecker({
     classToAdd:'visible animated fadeInJump',
     offset:500+agentHeight
     });

     $('.companyCounts li').addClass("hidden").viewportChecker({
     classToAdd:'visible animated fadeInJump',
     offset:200+agentHeight
     });

     $('.newServicesList li:first-child').addClass("hidden").viewportChecker({
     classToAdd:'visible animated fadeInJump',
     offset:200+agentHeight
     });
     $('.newServicesList li:nth-child(2)').addClass("hidden").viewportChecker({
     classToAdd:'visible animated fadeInJump',
     offset:400+agentHeight
     });
     $('.newServicesList li:last-child').addClass("hidden").viewportChecker({
     classToAdd:'visible animated fadeInJump',
     offset:600+agentHeight
     });
     $('.testimonialsList li').addClass("hidden").viewportChecker({
     classToAdd:'visible animated fadeInJump',
     offset:100+agentHeight
     });

     $('.caseStudies ul').addClass("hidden").viewportChecker({
     classToAdd:'visible animated fadeIn',
     offset:100+agentHeight
     });
     $('.contactForm').addClass("hidden").viewportChecker({
     classToAdd:'visible animated fadeIn',
     offset:100+agentHeight
     });
     /!*for aboutUs*!/
     $('.graphicText').addClass("hidden").viewportChecker({
     classToAdd:'visible animated fadeIn',
     offset:500+agentHeight
     });
     $('.carouselEmployees').addClass("hidden").viewportChecker({
     classToAdd:'visible animated fadeIn',
     offset:200+agentHeight
     });
     $('.measuring').addClass("hidden").viewportChecker({
     classToAdd:'visible animated fadeIn',
     offset:200+agentHeight
     });
     $('.capabilitiesContainer >').addClass("hidden").viewportChecker({
     classToAdd:'visible animated fadeIn',
     offset:200+agentHeight
     });
     $('.valuesContainer li:first-child').addClass("hidden").viewportChecker({
     classToAdd:'visible animated fadeInJump',
     offset:100+agentHeight
     });
     $('.valuesContainer li:nth-child(2)').addClass("hidden").viewportChecker({
     classToAdd:'visible animated fadeInJump',
     offset:150+agentHeight
     });
     $('.valuesContainer li:nth-child(3)').addClass("hidden").viewportChecker({
     classToAdd:'visible animated fadeInJump',
     offset:200+agentHeight
     });
     $('.valuesContainer li:nth-child(4)').addClass("hidden").viewportChecker({
     classToAdd:'visible animated fadeInJump',
     offset:250+agentHeight
     });
     $('.valuesContainer li:nth-child(5)').addClass("hidden").viewportChecker({
     classToAdd:'visible animated fadeInJump',
     offset:300+agentHeight
     });
     $('.valuesContainer li:nth-child(6)').addClass("hidden").viewportChecker({
     classToAdd:'visible animated fadeInJump',
     offset:350+agentHeight
     });
     $('.valuesContainer li:nth-child(7)').addClass("hidden").viewportChecker({
     classToAdd:'visible animated fadeInJump',
     offset:400+agentHeight
     });
     $('.valuesContainer li:nth-child(8)').addClass("hidden").viewportChecker({
     classToAdd:'visible animated fadeInJump',
     offset:450+agentHeight
     });
     $('.valuesContainer li:nth-child(9)').addClass("hidden").viewportChecker({
     classToAdd:'visible animated fadeInJump',
     offset:500+agentHeight
     });
     $('.valuesContainer li:nth-child(10)').addClass("hidden").viewportChecker({
     classToAdd:'visible animated fadeInJump',
     offset:550+agentHeight
     });
     $('.map').addClass("hidden").viewportChecker({
     classToAdd:'visible animated fadeIn',
     offset:200+agentHeight
     });
     $('.links').addClass("hidden").viewportChecker({
     classToAdd:'visible animated fadeIn',
     offset:200+agentHeight
     });
     $('.socialLinks').addClass("hidden").viewportChecker({
     classToAdd:'visible animated fadeInJump',
     offset:200+agentHeight
     });*/

    /*---------------scroll animation from cases*/

    /*--------------- end scroll animation from cases*/
    /**/
    /*
     $(window).scroll(function () {
     event.preventDefault();
     event.stopPropagation();
     winScrollTop = $(window).scrollTop();
     zindex = parseInt(winScrollTop/winHeight) + 1;
     console.log('winScrollTop = ' + winScrollTop);
     console.log('winHeight = ' + winHeight);
     console.log('zindex = ' + zindex);

     $('#first').css({'transform': 'translate(0px, '+ (-1)*(winScrollTop) + 'px)'});

     if(winScrollTop >= winHeight/2){
     console.log(1);
     var i = Math.round(winScrollTop/winHeight) - 1;
     if(i === 2) return false;
     $($('.caseSlideNext')[i]).css({
     transform: 'translate(0px, '+ (-1)*(winScrollTop) + 'px)'
     });
     }

     });
     */
    //$(document).scroll(function() {
    //    $("#parallax").css({
    //        "background-position-y": (-$(this).scrollTop()/20)
    //    })
    //});



    function Align(){


        var vHeight = $(window),
            footer = $('#footer'),
            popup = $('#popupForm'),
            margin;

        if ( vHeight.width() >= 1024) { margin = 90; } else { margin = 40; }

        $('.page').each(function () {
            var page = $(this),
                itemHeight = $(this).find('.containerWidth'),
                align = $(this).find('.align');

            page.css('height', vHeight.outerHeight());
            align.css({'margin-top' : (align.outerHeight()*(-1/2)), 'top' : '50%' });

            if (itemHeight.outerHeight() > vHeight.outerHeight()) {
                page.css('height', (itemHeight.outerHeight() + margin) );
                align.css({'margin-top' : 30, 'top' : 0 });
            }

        });

        $('.pageLast').each(function () {
            var page = $(this),
                itemHeight = $(this).find('.containerWidth'),
                align = $(this).find('.align');

            page.css('height', (vHeight.outerHeight() - footer.outerHeight()));
            align.css({'margin-top' : (align.outerHeight()*(-1/2)), 'top' : '50%' });

            if ((itemHeight.outerHeight() + footer.outerHeight()) > vHeight.outerHeight()) {
                page.css('height', (itemHeight.outerHeight() + margin) );
                align.css({'margin-top' : 30, 'top' : 0 });
            }
        });

        $('.head').each(function () {
            var page = $(this),
                itemHeight = $(this).find('.aboutUsHeadContainer'),
                align = $(this).find('.headAlign');
                //headHeight = parseInt($(window).height()*0.8);

            page.css('height', vHeight.outerHeight()*0.8);
            align.css({'margin-top' : (align.outerHeight()*(-1/2)), 'top' : '50%' });

            if (itemHeight.outerHeight() > vHeight.outerHeight()*0.8) {
                page.css('height', (itemHeight.outerHeight() + margin) );
                align.css({'margin-top' : 30, 'top' : 0 });
            }
        });

        popup.css('margin-top', (popup.outerHeight())*(-1/2));						$('.alignCase').each(function () {			/*var div = $(this).find('div');*/			$(this).css({'margin-top' : ($(this).outerHeight())*(-1/2)});						/*console.log($(this).outerHeight());*/		});
    }

    $(window).resize(function(e){
        Align();
    });

    $('.serviceText div div').slideUp();
    $('.newServicesList li').hover( function() {
            $(this).find('.serviceText div div').slideDown('0.3s');
        }, function() {
            $(this).find('.serviceText div div').slideUp('0.3s');
        }
    );

    $('.titleQuestion .alignQuest').css('opacity', 0);
    $('.titleQuestion').hover( function() {
            $(this).find('.alignQuest').css('opacity', 1);
            $(this).find('.alignAnsw').css('opacity', 0);
        }, function() {
            $(this).find('.alignQuest').css('opacity', 0);
            $(this).find('.alignAnsw').css('opacity', 1);
        }
    );

    $('.contactBtn').click(function(){
        var contact = $(this);
        var contacts = $(this).parent();
        var passive = contacts.find('.contactBtn');

        passive.removeClass('contactBtnActive');
        contact.addClass('contactBtnActive');

        if($('.contactBtnActive').hasClass('contactBtnCanada')){
            $('.contactAdress').hide();
            $('#contactCanada').css('display', 'inline-block');
        } else if ($('.contactBtnActive').hasClass('contactBtnGermany')){
            $('.contactAdress').hide();
            $('#contactGermany').css('display', 'inline-block');
        } else if ($('.contactBtnActive').hasClass('contactBtnUkraine')){
            $('.contactAdress').hide();
            $('#contactUkraine').css('display', 'inline-block');
        } else {
            $('.contactAdress').hide();
            $('#contactCanadaNew').css('display', 'inline-block');
        }
    });

    if (windowObj.width() > 600) {
        $(".testimonialsList li img").click(function () {
            var img = $(this);
            var src = img.attr('src');
            $("#feedbackSpan").append("<div class='popupImg'>" + "<div class='popupBg'></div>" + "<img src='" + src + "' class='popupImgObj' />" + "</div>");
            $(".popupImg").fadeIn(300);
            $(".popupBg").click(function () {
                $(".popupImg").fadeOut(300);
                setTimeout(function () {
                    $(".popupImg").remove();
                }, 300);
            });
        });
    }

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
    $('.seeTest').click(function () {
        $(this).hide();
        $('.testimonialsList li:lt(4)').css('display', 'inline-block');
    });

    /*$('.moreBtn').click(function(){
     $(this).parent().parent().find('.hoverBlock').hide();
     $(this).parent().find('.hoverBlock').show();
     });*/

    $('.moreBtnIndex').click(function(){
        var block = $(this).parent().parent().find('.hoverBlockIndex');
        var height = $(this).parent().parent().find('.hoverBlockIndex').height();

        $(this).parent().parent().find(block).hide();
        $(this).parent().find(block).show().css({'margin-top': (-0.5)*height}).width($('ul#indexTechnologies').width());

    });

    $('.closeHover').click(function(){
        $(this).parent().hide();
        $('.moreBtn').show();
    });

    $('.cpClick').click(function(){
        $(this).hide();
        $('.cpMenu').show();
    });

    $('.cpClose').click(function(){
        $(this).parent().hide();
        $('.cpClick').show();
    });

    $( 'input[name="inputCaptcha"]' ).keydown( function() {

        setTimeout(function () {
            var counts = $( 'input[name="inputCaptcha"]' ).val();
            if ( counts == sess_count ){
                $( '.mobAskQ' ).children('input').removeAttr('disabled');
                $( '.mobAskQ' ).children('input').addClass('activeSubmitProposal');
            } else {
                $( '.mobAskQ' ).children('input').attr('disabled','disabled');
                $( '.mobAskQ' ).children('input').removeClass('activeSubmitProposal');
            }
        }, 50);
    });

    if (windowObj.width() <=1080) {
        $('.learnreaderImg').addClass("workImg");
    }

    var forms = document.getElementsByTagName('form');
    for (var i = 0; i < forms.length; i++) {
        forms[i].noValidate = true;

        forms[i].addEventListener('submit', function(event) {
            if (!event.target.checkValidity()) {
                event.preventDefault();
                alert('Please, fill the form');
                $('#modal-one').hide();
            }
        }, false);
    }

    var logoCircle = $('.logoAnimated');
    var logoText = $('#scrollLogo');

    if (windowObj.width() >=1024) {
        if (documentObj.scrollTop() >= $(window).height()*0.25) {
            $('#scrollHeader').addClass('activeHeader');
            $('.logoAnimated').css({"top": "5px", "height": "42px"});
            $('#scrollLogo').css({"height": "42px", "margin-top": "5px", "margin-left": "105px"});
            //burger.css({"height": "25px", "top": "15px"});
            $('.contactHeader').css({"height": "42px"})
        } else {
            $('#scrollHeader').removeClass('activeHeader');
            $('.logoAnimated').css({"top": "", "height": ""});
            $('#scrollLogo').css({"height": "", "margin-top": "", "margin-left": ""});
            $('.contactHeader').css({"height": ""})
        }
    }
    if (windowObj.width() <= 1024) {
        $('#scrollHeader').addClass('activeHeader');
        $('.logoAnimated').css({"top": "", "height": ""});
        $('#scrollLogo').css({"margin-left": "", "margin-top": ""});
    }

});