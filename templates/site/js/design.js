$(document).ready(function() {

    //var schemeImg = $('.schemeIdea img');
    var adobeList = $("#designTechs ul li");
    for(var i=0; i<=adobeList.length/2-1;i++){
        $(adobeList[i]).add($(adobeList[adobeList.length-i-1])).css({
            //"marginLeft": 270+50*Math.sqrt(i)
            //"marginLeft": 100+50*Math.sqrt(i)
        });
    }

    $('.goToNext').on('click', function(){
        $($('.scrollHeaderListElem')[0]).click();
    });

    $(adobeList).on('mouseover', function(){
        var currentItem = $(this).index();
        //$($('.iconRowItem')[currentItem]).find('img').toggleClass('animated bounceIn');
        //$(this).toggleClass('bigIconList');

    });
    $(adobeList).on('mouseout', function(){
        var currentItem = $(this).index();
        //$($('.iconRowItem')[currentItem]).find('img').toggleClass('animated bounceIn');
        //$(this).toggleClass('bigIconList');
    });

    $('#upBtn').click(function() {
        $("html,body").animate({scrollTop:0},700);

    });
});

$(documentObj).on('scroll', function() {
    if (documentObj.scrollTop() >= 560) {
        //$($('.iconRowItem')[0]).addClass('animated zoomInDown');
        //$($('.iconRowItem')[4]).addClass('animated zoomInUp');
        //$($("#designTechs ul li")[0]).add($("#designTechs ul li")[7]).addClass('animated zoomIn readyLI');
        //
        //setTimeout(function () {
        //    $($('.iconRowItem')[1]).addClass('animated zoomInDown');
        //    $($('.iconRowItem')[5]).addClass('animated zoomInUp');
        //    $($("#designTechs ul li")[1]).add($("#designTechs ul li")[6]).addClass('animated zoomIn readyLI');
        //}, 200);
        //setTimeout(function () {
        //    $($('.iconRowItem')[2]).addClass('animated zoomInDown');
        //    $($('.iconRowItem')[6]).addClass('animated zoomInUp');
        //    $($("#designTechs ul li")[2]).add($("#designTechs ul li")[5]).addClass('animated zoomIn readyLI');
        //}, 400);
        //setTimeout(function () {
        //    $($('.iconRowItem')[3]).addClass('animated zoomInDown');
        //    $($('.iconRowItem')[7]).addClass('animated zoomInUp');
        //    $($("#designTechs ul li")[3]).add($("#designTechs ul li")[4]).addClass('animated zoomIn readyLI');
        //}, 600);
    }

    if(documentObj.scrollTop() >= 475) {

        setTimeout(function () {
            $($('.schemeIdea img')[0]).addClass('animated zoomInUp');
            $($('.schemeIdea img')[0]).fadeIn(1000).css("opacity", "1");
        }, 100);
        setTimeout(function () {

            $($('.schemeIdea img')[1]).fadeIn(1000);
        }, 200);
        setTimeout(function () {
            //alert('123');
            $($('.schemeIdea img')[2]).fadeIn(1000);
        }, 400);
        setTimeout(function () {
            //alert('123');
            $($('.schemeIdea img')[3]).fadeIn(1000);
        }, 600);
        setTimeout(function () {
            //alert('123');
            $($('.schemeIdea img')[4]).fadeIn(1000);
        }, 800);
        setTimeout(function () {
            //alert('123');
            $($('.schemeIdea img')[5]).fadeIn(1000);
        }, 1000);
        setTimeout(function () {
            //alert('123');
            $($('.schemeIdea img')[6]).fadeIn(1000);
        }, 1200);
        setTimeout(function () {
            //alert('123');
            $($('.schemeIdea img')[7]).fadeIn(1000);
        }, 1400);
        setTimeout(function () {
            //alert('123');
            $($('.schemeIdea img')[8]).fadeIn(1000);
        }, 1600);
        setTimeout(function () {
            //alert('123');
            $($('.schemeIdea img')[9]).fadeIn(1000);
        }, 2000);
        setTimeout(function () {
            //alert('123');
            $($('.schemeIdea img')[10]).fadeIn(1000);
        }, 2200);
        setTimeout(function () {
            //alert('123');
            $($('.schemeIdea img')[11]).fadeIn(1000);
        }, 2400);
        setTimeout(function () {
            //alert('123');
            $($('.schemeIdea img')[12]).fadeIn(1000);
        }, 2600);
        setTimeout(function () {
            //alert('123');
            $($('.schemeIdea img')[13]).fadeIn(1000);
        }, 2700);
        setTimeout(function () {
            //alert('123');
            $($('.schemeIdea img')[14]).fadeIn(1000);
        }, 2800);
        setTimeout(function () {
            //alert('123');
            $($('.schemeIdea img')[15]).fadeIn(1000);
        }, 3000);
        setTimeout(function () {
            //alert('123');
            $($('.schemeIdea img')[16]).fadeIn(1000);
        }, 3200);
        setTimeout(function () {
            //alert('123');
            $($('.schemeIdea img')[17]).fadeIn(1000);
        }, 3400);
        setTimeout(function () {
            //alert('123');
            $($('.schemeIdea img')[18]).fadeIn(1000);
        }, 3600);
        setTimeout(function () {
            //alert('123');
            $($('.schemeIdea img')[19]).fadeIn(1000);
        }, 3800);
        setTimeout(function () {
            //alert('123');
            $($('.schemeIdea img')[20]).fadeIn(1000);
        }, 4000);
        setTimeout(function () {
            //alert('123');
            $($('.schemeIdea img')[21]).fadeIn(1000);
        }, 4200);
        setTimeout(function () {
            //alert('123');
            $($('.schemeIdea img')[22]).fadeIn(1000);
        }, 4400);
        setTimeout(function () {
            //alert('123');
            $($('.schemeIdea img')[23]).fadeIn(1000);
        }, 4600);
        setTimeout(function () {
            //alert('123');
            $($('.schemeIdea img')[24]).fadeIn(1000);
        }, 4800);
        setTimeout(function () {
            //alert('123');
            $($('.schemeIdea img')[25]).fadeIn(1000);
        }, 5000);
        setTimeout(function () {
            //alert('123');
            $($('.schemeIdea img')[26]).fadeIn(1000);
        }, 5200);
        setTimeout(function () {
            //alert('123');
            $($('.schemeIdea img')[27]).fadeIn(1000);
        }, 5400);
        setTimeout(function () {
            //alert('123');
            $($('.schemeIdea img')[28]).fadeIn(1000);
        }, 5600);
        setTimeout(function () {
            //alert('123');
            $($('.schemeIdea img')[29]).fadeIn(1000);
        }, 5800);
        setTimeout(function () {
            //alert('123');
            $('.schemeIdea h2').fadeIn(1000, function () {
                $('.schemeIdea h2').animate({
                    "fontSize": "24px"
                    //"left": "600px"
                }, 200/*, function () {
                    $($('.schemeIdea img')[0]).animate({
                        "width": "270px"
                    }, 200);

                }*/);
            })
        }, 6000);
    }

    if(documentObj.scrollTop() >= 1000){
        $('#designHowWork img').animate({
            "opacity": 1
        }, 500);
    }

    /*if(documentObj.scrollTop() >= 1730){
        $('#designWeWork img').animate({
            //"opacity": 1
        }, 500);
    }*/

    if(documentObj.scrollTop() >= 2330){
        $('#designPage #portDesign').animate({
            "opacity": 1
        }, 500);
    }
});