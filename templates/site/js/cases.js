var windowObj = $(window);
$(document).ready(function() {
    var forms = document.getElementsByTagName('form');

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
                        return;
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
            windowObj.bind("load scroll touchmove", this.checkElements);
            windowObj.scroll(this.checkElements);
            this.checkElements();
            windowObj.resize(function(e){
                windowSize = (!options.scrollHorizontal) ? e.currentTarget.innerHeight : e.currentTarget.innerWidth;
                //agentHeight = windowHeight;
                //agentHeight = $(window).height();
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

    if (windowObj.width() > 770) {
        animateStyles();

        addClassStyles($('.page'), '', 'showThisBlock', 200);
        addClassStyles($('.fade'), '', 'animated fadeIn', 200);
        addClassStyles($('.jump'), '', 'animated fadeInJump', 200);
        addClassStyles($('.contactForm'), '', 'animated fadeIn', 200);

        /* for case citizen */
        addClassStyles($('.bigTitle'), 'beforeFadeInUp', 'fadeInUp', 200);
        addClassStyles($('.caseDescription'), 'beforeFadeInUp', 'fadeInUp', 200);
        addClassStyles($('.caseBigDescription'), 'beforeFadeInUp', 'fadeInUp', 200);
        addClassStyles($('.caseText'), 'beforeFadeInUp', 'fadeInUp', 200);
        addClassStyles($('.imgFromRight'), 'beforeFadeInRight', 'fadeInRight', 400);
        addClassStyles($('.rhombusSmall'), '', 'animated rhombusAnimated', 200);
        addClassStyles($('.imgFromLeft'), 'beforeFadeInLeft', 'fadeInLeft', 300);
        addClassStyles($('.fadeBig'), 'beforeFadeInLeft', 'fadeInLeft', 500);
        addClassStyles($('.detail'), '', 'run', 200);
        setTimeout(function () {
            addClassStyles($('.overImg'), 'beforeFadeInLeft', 'fadeInLeft', 300);
        }, 1000);

        /*from neksee*/
        addClassStyles($('.nekBigTitle'), 'beforeFadeInUp', 'fadeInUp', 200);
        addClassStyles($('.nekTitle'), 'beforeFadeInUp', 'fadeInUp', 200);
        addClassStyles($('.nekList'), 'beforeFadeInUp', 'fadeInUp', 200);

        /*for osscodes*/
        addClassStyles($('.ossTop .ossTitleLeft'), 'beforeFadeInLeft', 'fadeInLeft', 200);
        addClassStyles($('.ossTop .ossTitleRight'), 'beforeFadeInRight', 'fadeInRight', 200);
        addClassStyles($('.align .ossTitle'), 'beforeFadeInUp', 'fadeInUp', 200);
        addClassStyles($('.caseTitle'), 'beforeFadeInUp', 'fadeInUp', 200);
    }

    //$('input[name="inputCaptcha"]').keydown( function() {
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

    $('.attachments.top').on("click", function(){$('.top .attachFiles').click();});
    $('.top .attachFiles').change(function(e){$('.top .attachFileName').text($(this).val().split('\\').pop());});
    /*-----------------------------------------------------------------------*/
    $('.attachments.bottom').on("click", function(){$('.bottom .attachFiles').click();});
    $('.bottom .attachFiles').change(function(e){$('.bottom .attachFileName').text($(this).val().split('\\').pop());});
});
window.onload = function() {
    $(".modalLoad").fadeOut("slow");

    function pageAndAlignStyles(page, align, newHeightBlock, marginTopBlock, topBlock){
        page.css('height', newHeightBlock);
        align.css({'margin-top' : marginTopBlock, 'top' : topBlock });
    }

    //function heightForBlock(vHeight, header){
    //    $('.cuthead').each(function () {
    //        var page = $(this),
    //            itemHeight = page.find('.containerWidth'),
    //            align = page.find('.align'),
    //            margin2 = 160;
    //
    //        if ((itemHeight.outerHeight() + header.outerHeight()) > vHeight.outerHeight()*0.95) {
    //            pageAndAlignStyles(page, align, itemHeight.outerHeight() + margin2, 60, 0);
    //        }
    //        else{
    //            pageAndAlignStyles(page, align, vHeight.outerHeight()*0.95, (align.outerHeight() + header.outerHeight())*(-1/2), '50%');
    //        }
    //    });
    //}

    function footerPageLast(footer, vHeight, margin){
        $('.pageLast').each(function () {
            var page = $(this),
                itemHeight = page.find('.caseContainer'),
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
                itemHeight = page.find('.align .caseContainer'),
                align = page.find('.align'),
                back = page.find('.backgroundDark'),
                stripe = page.find('.srtipe'); /* for case osscodes */

            if (itemHeight.outerHeight() + stripe.outerHeight() > vHeight.outerHeight()) {
                pageAndAlignStyles(page, align, itemHeight.outerHeight() + margin + stripe.outerHeight(), 30 + stripe.outerHeight(), 0);
                back.css({'height' : (itemHeight.outerHeight() + margin + stripe.outerHeight()) , 'top' : 0});
            }
            else{
                pageAndAlignStyles(page, align, vHeight.outerHeight(), align.outerHeight()*(-1/2), '50%');
            }

        });
    }

    function headBlock(vHeight, margin) {
        $('.head').each(function () {
            var page = $(this),
                itemHeight = $(this).find('.aboutUsHeadContainer'),
                align = $(this).find('.headAlign');

            if (itemHeight.outerHeight() > vHeight.outerHeight()*0.95) {
                pageAndAlignStyles(page, align, itemHeight.outerHeight() + margin, 30, 0);
            } else {
                pageAndAlignStyles(page, align, vHeight.outerHeight()*0.95, align.outerHeight()*(-1/2), '50%');
            }
        });
    }

    function Align(){
        var vHeight = $(window),
            footer = $('#footer'),
            popup = $('#popupForm'),
            margin;
        if ( vHeight.width() >= 1024) { margin = 90; } else { margin = 40; }

        blocksOnPageSlide(vHeight, margin);
        headBlock(vHeight, margin);
        footerPageLast(footer, vHeight, margin);

        popup.css('margin-top', (popup.outerHeight())*(-1/2));

        $('.alignCase').each(function () {
            $(this).css({'margin-top' : ($(this).outerHeight())*(-1/2)});
        });

    }
    $(window).bind('scroll', function(){
        var fadeStart=0,fadeUntil=1000;
        $('.backgroundDark').each(function () {
            var self = $(this);
            var offset = (self.offset().top - $(window).scrollTop()),
                opacity = 1;
            if (offset <= fadeStart) {
                opacity = 0;
            } else if (offset <= fadeUntil) {
                opacity = offset / fadeUntil;
            }
            self.css('opacity', opacity);
        });

        $('.caseSlide .city').each(function () {
            var self = $(this);
            var fadeUntil = self.outerHeight();
            var fadeStart = self.outerHeight()/2;
            var offset = (self.parent().offset().top - $(window).scrollTop())
                , top = 20 + "%";
            if (offset <= fadeStart) { top = 50 + '%'; }
            else if (offset <= fadeUntil) { top = 200*offset / fadeUntil; }
            self.css('top', top);

            var parent = self.parent().offset().top;
        });

    });

    $(window).resize(function(e){
        Align();
    });

    Align();
};
