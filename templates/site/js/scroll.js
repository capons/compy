/**
 * Created by Александр on 11.09.2015.
 */
var mainPage = true;
documentObj.ready(function(){
    if (windowObj.width() <= 1280){
        $('#nav').hide();
        keyAnchors.css({
            "height": "auto"
        });
    }
    keyAnchors = $('.keyAnchor');
    $('div.keyAnchor').height(window.innerHeight);
    $('#homeContacts').height(window.innerHeight-160);
    $('#footer').height(120);
    var currentPosition;
    var animated = false;
    windowObj.load(function() {
        currentPosition = documentObj.scrollTop();
        for (var i = 0; i < keyAnchors.length; i++) {
            scrollPositions.push($(keyAnchors[i]).offset().top);
            if($(keyAnchors[i]).offset().top-60 < currentPosition){
                currentNumber = i;
            }
        }
        console.log(scrollPositions, currentNumber);

    });

    windowObj.on('mousewheel DOMMouseScroll', function(event){
        if(windowObj.width() >= 1280) {
            if (event.originalEvent.wheelDelta > 0 || event.originalEvent.detail < 0) {
                event.preventDefault();
                if (currentNumber > 0 && !animated) {
                    animated = true;

                    $('html,body').animate({
                        scrollTop: scrollPositions[--currentNumber]
                    }, 1000, function () {
                        animated = false;
                    });
                    console.log(currentNumber);
                }
                // scroll up
            }
            else {
                event.preventDefault();
                if (currentNumber < keyAnchors.length - 1 && !animated) {
                    animated = true;
                    $('html,body').animate({
                        scrollTop: scrollPositions[++currentNumber]
                    }, 1000, function () {
                        animated = false;
                    });
                    console.log(currentNumber);
                }
                // scroll down
            }
            //$('.scrollHeaderListElem').removeClass("activeLink");
            //$($('.scrollHeaderListElem')[currentNumber - 1]).addClass("activeLink").find('p').fadeIn();
        }
    });

    windowObj.on('resize',function(){
        if (windowObj.width() <= 1280){
            $('#nav').hide();
            keyAnchors.css({
                "height": "auto"
            });
        } else {
            $('#nav').show();
            $('div.keyAnchor').height(window.innerHeight);
            $('#homeContacts').height(window.innerHeight - 160);
            $('#footer').height(120);
            scrollPositions = [];
            currentPosition = documentObj.scrollTop();
            for (var i = 0; i < keyAnchors.length; i++) {
                scrollPositions.push($(keyAnchors[i]).offset().top);
                if($(keyAnchors[i]).offset().top-60 < currentPosition){
                    currentNumber = i;
                }
            }
            windowObj.scroll();
        }


        if (windowObj.width() <= 730){
            $('#smallFaces').height(window.innerHeight);
            $('#ourTeamSpan.keyAnchor').height(window.innerHeight);
            $('#clientsSpan').height(window.innerHeight);
            $('.logoClientsContent').height(window.innerHeight);
            $('.logoClients').height(window.innerHeight);

            $('.vertical-align').css ({"top" : "0" });
            $('.morelessContainer').css({"display" : "block"});

            $('#morePeople').click(function(){
                $(this).parent().css({"display" : "none"});
                $('#smallFaces').css({"height": "auto"});
                $('#ourTeamSpan.keyAnchor').css({"height": "auto"});
            });

                $('#moreClients').click(function(){
                    $(this).parent().css({"display" : "none"});
                    $('#clientsSpan').css({"height": "auto"});
                    $('.logoClientsContent').css({"height": "auto"});
                    $('.logoClients').css({"height": "auto"});

                });
        }


    });

    $('#upBtn').click(function() {
        $("html,body").animate({scrollTop:0},700);
        $('.scrollHeaderListElem').removeClass("activeLink");
        currentNumber = 0;
    });
});
