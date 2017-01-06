var numbers = [0, 0, 0, 0, 0, 0];
var intervalID = [];
var windowObj = $(window);
var documentObj = $(document);

var btn = $("#navIcon");
var menu = btn.parent();
var menuSmall = menu.find('#navMenuSmall');

$(document).ready(function() {
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

        addClassStyles($('.imgFromRight'), 'beforeFadeInRight', 'fadeInRight', 400);
        addClassStyles($('.imgFromLeft'), 'beforeFadeInLeft', 'fadeInLeft', 400);
        addClassStyles($('.fade'), 'beforeFadeIn', 'fadeIn', 300);
        addClassStyles($('.ourOfficesContent'), 'beforeFadeIn', 'fadeIn', 300);
        addClassStyles($('.latestContainer .imgLatest'), 'beforeFadeInLeft', 'fadeInLeft', 200);
        addClassStyles($('.jump'), 'beforeFadeInJump', 'fadeInJump', 200);
        addClassStyles($('.contactForm'), 'beforeFadeIn', 'fadeIn', 200);

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

    //$( 'input[name="inputCaptcha"]' ).keydown( function() {
    //
    //    setTimeout(function () {
    //        var counts = $( 'input[name="inputCaptcha"]' ).val();
    //        if ( counts == sess_count ){
    //            $( '.mobAskQ' ).children('input').removeAttr('disabled');
    //            $( '.mobAskQ' ).children('input').addClass('activeSubmitProposal');
    //        } else {
    //            $( '.mobAskQ' ).children('input').attr('disabled','disabled');
    //            $( '.mobAskQ' ).children('input').removeClass('activeSubmitProposal');
    //        }
    //    }, 50);
    //});

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


    /*----------------------------------------- slider for erp /forbusiness ----*/

    $('.sliderInd').each(function() {
        var $this   = $(this);
        var $group  = $this.find('.slideGroup');
        var $slides = $this.find('.slideInd');
        var buttonArray  = [];
        var buttonArrayBig  = [];
        var currentIndex = 0;
        var timeout;

        function move(newIndex) {
            var animateLeft, slideLeft;
            if (windowObj.width() >= 560) {
                advance();
            }
            // If it is the current slide / animating do nothing
            if ($group.is(':animated') || currentIndex === newIndex) {
                return;
            }
            buttonArray[currentIndex].removeClass('active');
            buttonArray[newIndex].addClass('active');

            buttonArrayBig[currentIndex].removeClass('active');
            buttonArrayBig[newIndex].addClass('active');

            if (newIndex > currentIndex) {   // If new item > current
                slideLeft = '100%';
                animateLeft = '-100%';
            } else {
                slideLeft = '-100%';
                animateLeft = '100%';
            }
            // Position new slide to left (if less) or right (if more) of current
            $slides.eq(newIndex).css( {left: slideLeft, display: 'block'} );

            if (windowObj.width() >= 1180) {
                $group.animate( {left: animateLeft}, function() {      // Animate slides and
                    $slides.eq(currentIndex).css( {display: 'none'} ); // Hide previous slide
                    $slides.eq(newIndex).css( {left: '0%'} );          // Set position of the new item
                    $group.css( {left: '50%'} );                       // Set position of group of slides
                    currentIndex = newIndex;                           // Set currentIndex to the new image
                });
            }

            if (windowObj.width() < 1180 && windowObj.width() >= 720) {
                $group.animate( {left: animateLeft}, function() {      // Animate slides and
                    $slides.eq(currentIndex).css( {display: 'none'} ); // Hide previous slide
                    $slides.eq(newIndex).css( {left: '0%'} );          // Set position of the new item
                    $group.css( {left: '25%'} );                       // Set position of group of slides
                    currentIndex = newIndex;                           // Set currentIndex to the new image
                });
            }

            if (windowObj.width() < 720) {
                $group.animate( {left: animateLeft}, function() {      // Animate slides and
                    $slides.eq(currentIndex).css( {display: 'none'} ); // Hide previous slide
                    $slides.eq(newIndex).css( {left: '0%'} );          // Set position of the new item
                    $group.css( {left: '0%'} );                       // Set position of group of slides
                    currentIndex = newIndex;                           // Set currentIndex to the new image
                });
            }
        }

        function advance() {                               // Used to set
            clearTimeout(timeout);                         // Clear previous timeout
            timeout = setTimeout(function() {              // Set new timer
                if (currentIndex < ($slides.length - 1)) { // If slide < total slides
                    move(currentIndex + 1);                // Move to next slide
                } else {                                   // Otherwise
                    move(0);                               // Move to the first slide
                }
            }, 5000);
        }

        $.each($slides, function(index) {
            // Create a button element for the button
            var $button = $('<button type="button" class="slideBtn"></button>');
            if (index === currentIndex) {
                $button.addClass('active');
            }
            $button.on('click', function() {
                move(index);
            }).appendTo('.slideButtons');
            buttonArray.push($button);

        });

        $.each($slides, function(index) {
            // Create a button element for the button
            var $button = $('<button type="button" class="slideBtn"><div class="slideImg"></div></button>');
            if (index === currentIndex) {
                $button.addClass('active');
            }
            $button.on('click', function() {
                move(index);
            }).appendTo('.largeBtns');
            buttonArrayBig.push($button);
        });

        if (windowObj.width() >= 560) {
            advance();
        }
    });

    /*select indicators*/
    $('.showInd').click(function () {
        var li = $(this);
        var content = li.find('.slideIntContent');

        $(this).toggleClass("active");

        if (li.hasClass("active")) { content.show();
        } else { content.hide(); }
    });

    $('.selectTechnologyContainer').click(function(){
        var self = $(this);
        self.find('.selectTechnologyList').toggle();
        selectTechnology();
    });
    documentObj.mouseup(function (e) {
        var div = $('.selectTechnologyContainer');
        if (!div.is(e.target)
            && div.has(e.target).length === 0) {
            $('.selectTechnologyList').hide();
        }
    });
    function selectTechnology() {
        $('.selectTechnology').click(function(){
            var self = $(this);
            var text = self.text();
            self.parent().parent().find('.selectTechnologyDefault').text(text);
        })
    }
    var popUp = $('.popupForm');

    $(document).mouseup(function (e) {
        if (!popUp.is(e.target) && popUp.has(e.target).length === 0) {
            popUp.hide();
        }
    });


});

window.onload = function() {
    $(".modalLoad").fadeOut("slow");

    function pageAndAlignStyles(page, align, newHeightBlock, marginTopBlock, topBlock){
        page.css('height', newHeightBlock);
        align.css({'margin-top' : marginTopBlock, 'top' : topBlock });
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

    function heightForBlock(vHeight, header){
        $('.head').each(function () {
            var margin1 = 260;
            var margin2 = 140;
            var page = $(this),
                align = page.find('.headAlign'),
                check = page.find('.checkCv'),
                more = page.find('#more');

            if ((align.outerHeight() + check.outerHeight() + more.outerHeight() + margin1) > vHeight.outerHeight()*0.95) {
                page.css('height', (align.outerHeight() + check.outerHeight() + more.outerHeight() + margin2) );
                align.css({'margin-top' : 70, 'top' : 0 });
            }
            else{
                page.css('height', vHeight.outerHeight()*0.95);
                align.css({'margin-top' : ((align.outerHeight() + check.outerHeight() - header.outerHeight())*(-1/2)), 'top' : '50%' });
            }
        });
    }


    function Align(){
        var vHeight = $(window),
            footer = $('#footer'),
            header = $('#headerMain'),
            margin;

        if ( vHeight.width() >= 1024) { margin = 90; } else { margin = 60; }

        blocksOnPageSlide(vHeight, margin);
        footerPageLast(footer, vHeight, margin);
        heightForBlock(vHeight, header);

        $('.popupForm').each(function () {
            var popup = $(this);

            popup.css('margin-top', (popup.outerHeight())*(-1/2));
            if ((popup.outerHeight() + header.outerHeight())> vHeight.outerHeight()) {
                popup.css({'position' : 'absolute' , 'margin-top' : '90px' , 'top' : '0' });
            }
        });
    }

    /*----------------------------------- slider for projects /forstartup ----*/
    function Projects() {
        var sliderBlock = $('#sliderProjects');
        var slider = sliderBlock.children("ul");
        var slides = slider.children("li");
        var slideCount = slides.length;
        var slideWidth = slides.width();
        var sliderUlWidth = slideCount * slideWidth;

        var slide = slides.map(function () {
                return $(this).outerHeight();
            }).get(),
            slideHeight = Math.max.apply(null, slide);

        sliderBlock.css({width: slideWidth, height: slideHeight});
        slider.css({width: sliderUlWidth, height: slideHeight});
        slides.css({width: slideWidth + 1, height: slideHeight});
        slides.last().prependTo('#sliderProjects > ul');

        function moveLeft() {
            slider.animate({left: +slideWidth}, 0,
                function () {
                    var elementNewLi = $('#sliderProjects > ul > li');
                    elementNewLi.last().prependTo('#sliderProjects > ul');
                    slides.find('.imgLatest').removeClass('fadeInLeft');
                    elementNewLi.last().find('.imgLatest').addClass('fadeInLeft');
                    slider.css('left', '');
                });
        }

        function moveRight() {
            slider.animate({left: -slideWidth}, 0,
                function () {
                    var elementNewLi = $('#sliderProjects > ul > li');
                    elementNewLi.first().appendTo('#sliderProjects > ul');
                    slides.find('.imgLatest').removeClass('fadeInLeft');
                    elementNewLi.last().find('.imgLatest').addClass('fadeInLeft');
                    slider.css('left', '');
                });
        }
        $('.projArrowLeft').click(function () {
            moveLeft();
        });
        $('.projArrowRight').click(function () {
            moveRight();
        });
    }

    Align();
    Projects();

    $(window).resize(function(e){
        Align();
        Projects();
    });

};

