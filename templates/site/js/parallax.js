$(document).ready(function(){
    var stepValue = 20;
    var winScrollTop = $(window).scrollTop();
    var winHeight = $(window).height();
    var footer = $('#footer');
    var translate = 0;
    var counter = 0;
    var currentSlide = 1;
    var slides = $('.caseSlide');
    var step = getStep(slides[currentSlide - 1]);
    var isScrolled = false;
    var a =0;
    var iterations;

    function getStep(slide){
        return $(slide).height()/stepValue;
    }
    function animate(objects, counter){
        //var counter = 0;

        objects[counter].className = '';
        objects[counter].className = 'waiting animated fadeInJump';

        counter++;
        if(counter < objects.length){
            setTimeout(function(){
                animate(objects, counter)
            }, 150);
        }
    }
    function scrolleAction(event){
        console.log(a++);
        $('.animated.fadeInJump').removeClass('animated fadeInJump');
        if(windowObj.width() < 1000) return true;

        if (event.originalEvent.deltaY < 0) {
            event.originalEvent.deltaY = -1;
            if(currentSlide === 1 && counter === 0) return false;
            //console.log('Scroll up');
            //console.log(currentSlide, counter, translate);
            if(counter === 0) {
                translate = -winHeight;
                counter = stepValue;
                currentSlide--;

            }
            step = getStep(slides[currentSlide - 1]);
            translate += step;
            counter--;

            $(slides[currentSlide - 1]).css({
                'transform': 'translate(0px, '+ (translate) + 'px)'
            });

            $(slides[currentSlide]).find('.cover').css({
                opacity: 1 - counter/stepValue
            });

            //console.log(currentSlide, counter, translate);
        }
        else {
            event.originalEvent.deltaY = 1;
            if(currentSlide === slides.length - 1 && counter === stepValue) return false;
            //console.log('Scroll down');
            //console.log(currentSlide, counter, translate);
            if(counter === stepValue) {
                counter = 0;
                translate = 0;
                currentSlide++;

            }
            step = getStep(slides[currentSlide - 1]);
            translate -= step;
            counter++;
            $(slides[Math.floor(currentSlide - 1)]).css({
                'transform': 'translate(0px, '+ (translate) + 'px)'
            });

            $(slides[currentSlide]).find('.cover').css({
                opacity: 1 - counter/stepValue
            });
            //console.log(currentSlide, counter, translate);
        }
    }
    $(window).bind('wheel', function(event) {
        if(isScrolled) return;
        setTimeout(function(){

            var animatedObjects = event.originalEvent.deltaY < 0 ? $(slides[currentSlide-1]).find('.waiting') : $(slides[currentSlide]).find('.waiting');
            //iterations = 0;
            animate(animatedObjects, 0);

        },600);

        setTimeout(function() {
            isScrolled = false;
        },1000);
        isScrolled = true;
        //scrolleAction(event);


        for(var i=0; i<20; i++){
            setTimeout(function(){
                scrolleAction(event);
            }, 30*i)
        }


       /* setTimeout(function(){
            scrolleAction(event);
        },50);
        setTimeout(function(){
            scrolleAction(event);
        },100);
        setTimeout(function(){
            scrolleAction(event);
        },150)*/
    });
});