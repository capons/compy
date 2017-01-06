$(document).ready(function() {
    var sliderDelay = 4000;
    var leftPict = Array();
    var imgCount = 3;
    leftPict[0] = '/css/img/left1.png';
    leftPict[1] = '/css/img/left2.png';
    leftPict[2] = '/css/img/left3.png';

    var rightPict = Array();
    rightPict[0] = '/css/img/right1.png';
    rightPict[1] = '/css/img/right2.png';
    rightPict[2] = '/css/img/right3.png';

    function slider(target,src,count){
        var currentImg = 0;
        function process(){
            target.fadeOut(1050,function(){
                if(currentImg == count) currentImg = 0;
                target.attr('src',src[currentImg]);
                currentImg++;
                target.fadeIn(1050,function(){
                    setTimeout(process,sliderDelay);
                });
            })
        }
        setTimeout(process,sliderDelay);
    }

    $('#endSession').click(function() {
        window.location = "/welcome/endSession";
   });
    $('#cabinet').click(function() {
        window.location = "/personal";
    });
    slider($('#leftImage'),leftPict,imgCount);
    slider($('#rightImage'),rightPict,imgCount);
});

