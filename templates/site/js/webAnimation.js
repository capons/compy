/**
 * Created by Александр on 09.07.2015.
 */
var animDuration = 1000;
var apis = [];
var backEnd = [];
var preventDouble = false;

$(document).ready(function(){
    apis = $('#webApisContent img');
    backEnd = $('#newRows .rowContainer img');
    apis.on('mouseenter', function(){
        //alert($(this).index());
        //if($(this).index() == 9){
        //    $(apis[2]).find('img').fadeToggle(300); return
        //}
        //if($(this).index() == 8){
        //    $(apis[3]).find('img').fadeToggle(300); return
        //}
        //if($(this).index() == 10){
        //    $(apis[5]).find('img').fadeToggle(300); return
        //}
        //if($(this).index() == 11){
        //    $(apis[4]).find('img').fadeToggle(300); return
        //}
        //if($(this).index() == 12 || $(this).index() == 13){
        //    $(apis[1]).find('img').fadeToggle(300); return
        //}

    });

    apis.on('mouseleave', function(){
        //alert($(this).index());
        if($(this).index() == 9){
            $(apis[2]).find('img').fadeToggle(100); return
        }
        if($(this).index() == 8){
            $(apis[3]).find('img').fadeToggle(100); return
        }
        if($(this).index() == 10){
            $(apis[5]).find('img').fadeToggle(100); return
        }
        if($(this).index() == 11){
            $(apis[4]).find('img').fadeToggle(100); return
        }
        if($(this).index() == 12 || $(this).index() == 13){
            $(apis[1]).find('img').fadeToggle(100); return
        }
    });

    $('.developPhase > img').animate({
        //"transform": "rotate("+180+"deg);"
    },5000);
});

$(document).on('scroll',function(){
    if(documentObj.scrollTop() >= 600){

        $(webTechArray[1]).fadeIn(animDuration);

        setTimeout(function(){
            $(webTechArray[0]).fadeIn(animDuration);
        },200);

        setTimeout(function(){
            $(webTechArray[2]).fadeIn(animDuration);
        },400);

        setTimeout(function(){
            $(webTechArray[1]).animate({
                "width": 235,
                "left": 235,
                "bottom": 486
            }, animDuration, function(){
                webTechArray[1].src = '/templates/site/img/webApps/icon/jssmall.png';
            });
        },200);

        setTimeout(function(){
            $(webTechArray[15]).fadeIn(animDuration);
            //},3400);
        },100);

        setTimeout(function(){
            $(webTechArray[3]).fadeIn(animDuration);
        },1100);

        setTimeout(function(){
            $(webTechArray[4]).fadeIn(animDuration);
        },1300);

        setTimeout(function(){
            $(webTechArray[5]).fadeIn(animDuration);
        },1500);

        setTimeout(function(){
            $(webTechArray[6]).fadeIn(animDuration);
        },1700);

        setTimeout(function(){
            $(webTechArray[7]).fadeIn(animDuration);
        },1900);

        setTimeout(function(){
            $(webTechArray[8]).fadeIn(animDuration);
        },2100);

        setTimeout(function(){
            $(webTechArray[9]).fadeIn(animDuration);
        },2300);

        setTimeout(function(){
            $(webTechArray[10]).fadeIn(animDuration);
        },2500);

        setTimeout(function(){
            $(webTechArray[11]).fadeIn(animDuration);
        },2700);

        setTimeout(function(){
            $(webTechArray[12]).fadeIn(animDuration);
        },2900);

        setTimeout(function(){
            $(webTechArray[13]).fadeIn(animDuration);
        },3100);

        setTimeout(function(){
            $(webTechArray[14]).fadeIn(animDuration);
        },3300);

        //setTimeout(function(){
        //    $(webTechArray[15]).add(webTechArray[16]).fadeIn(animDuration);
        //},3500);
        //
        //setTimeout(function(){
        //    $(webTechArray[15]).add(webTechArray[17]).fadeIn(animDuration);
        //},3500);
        //
        //setTimeout(function(){
        //    $(webTechArray[15]).add(webTechArray[18]).fadeIn(animDuration);
        //},3500);



        setTimeout(function(){
            $(webTechArray[16]).fadeIn(animDuration);
        },3500);

        setTimeout(function(){
            $(webTechArray[17]).fadeIn(animDuration);
        },3600);

        setTimeout(function(){
            $(webTechArray[18]).fadeIn(animDuration);
        },3700);
        /**/

        setTimeout(function(){
            $(webTechArray[15]).animate({
                "bottom": 614
            },animDuration);

            $(webTechArray[16]).animate({
                "bottom": 438,
                "left": 524
            },animDuration)
        },3700);

        setTimeout(function(){
            $(webTechArray[17]).fadeIn(animDuration).animate({
                "left": 457
            }, animDuration);
            $(webTechArray[18]).fadeIn(animDuration).animate({
                "left": 390,
                "bottom": 304
            }, animDuration);
            $(webTechArray[19]).fadeIn(animDuration).animate({
                "left": 122
            }, animDuration);
        },3900);

    }

    if(documentObj.scrollTop() >= 1500){
        if (preventDouble == false) {

            for (i=1; i<4; i++){
                $(backEnd[i]).animate({
                    "opacity": 1
                }, 1000);
            }
            $(backEnd[0]/*), $(backEnd[1]), $(backEnd[2]), $(backEnd[3])*/).animate({
                "opacity": 1
            }, 1000, function(){
                $(backEnd[0]).animate({
                    "left": 145,
                    "top": 78,
                    "width": 505
                }, 1000);
                $(backEnd[1]).animate({
                    "left": -90,
                    "top": 313,
                    "width": 505
                }, 1000);
                $(backEnd[2]).animate({
                    "left": 145,
                    "top": 548,
                    "width": 505
                }, 1000);
                $(backEnd[3]).animate({
                    "left": 380,
                    "top": 313,
                    "width": 505
                }, 1000, function(){
                    $(backEnd[0]).animate({
                        "left": 222,
                        "top": 0
                    }, 1000);
                    $(backEnd[1]).animate({
                        "left": -15,
                        "top": 238
                    }, 1000);
                    $(backEnd[2]).animate({
                        "left": 80,
                        "top": 618
                    }, 1000);
                    $(backEnd[3]).animate({
                        "left": 317,
                        "top": 381
                    },1000, function(){
                        $(backEnd[4]).animate({
                            "left": -252,
                            "opacity": 1
                        },1000);
                        $(backEnd[5]).animate({
                            "left": -252,
                            "opacity": 1
                        },1000);
                        $(backEnd[6]).animate({
                            "left": 555,
                            "opacity": 1
                        },1000);
                    });
                });
            });

            preventDouble = true;
        }
    }

    if(documentObj.scrollTop() >= 1000){
        $(apis[0]).fadeIn(500);

        setTimeout(function(){
            $(apis[9]).add($(apis[10])).addClass('animated flipInY').fadeIn(500);
        },200);
        setTimeout(function(){
            $(apis[7]).add($(apis[8])).addClass('animated flipInY').fadeIn(500);
        },400);
        setTimeout(function(){
            $(apis[4]).add($(apis[5])).addClass('animated flipInY').fadeIn(500);
        },600);
        setTimeout(function(){
            $(apis[2]).add($(apis[3])).addClass('animated flipInY').fadeIn(500);
        },800);
        setTimeout(function(){
            $(apis[13]).addClass('animated flipInY').fadeIn(500,function(){
                $(apis[12]).fadeIn().animate({
                    "top": 581
                }, 1000);

            });
        },1200);
        setTimeout(function(){
            $(apis[11]).addClass('animated flipInY').fadeIn(500);
        },1400);
        setTimeout(function(){
            $(apis[6]).add($(apis[18])).fadeIn(500);
        },1600);
        setTimeout(function(){
            $(apis[0]).add($(apis[1])).fadeIn(500);
        },1800);
        setTimeout(function(){
            $(apis[2]).add($(apis[3])).fadeIn(500);
        },2000);
        setTimeout(function(){
            $(apis[4]).add($(apis[5])).fadeIn(500);
        },2200);
    }

});
