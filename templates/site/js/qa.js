/**
 * Created by Александр on 17.07.2015.
 */
var scrollImg = [];
var scrollText = [];
$(document).ready(function(){
    scrollImg = $('.qaContent img');
    scrollText = $('.qaContent p');
});

$(window).on('scroll', function(){

    if(documentObj.scrollTop() >= 500){
        //alert('123');
        $(scrollImg[0]).animate({
            "opacity": 1,
            "left": 365
        },1000);
        $(scrollText[0]).animate({
            "opacity": 1,
            "left": 500
        },1000);

        setTimeout(function () {
            $(scrollImg[1]).animate({
                "opacity": 1,
                "left": 245
            },1000);
            $(scrollText[1]).animate({
                "opacity": 1,
                "left": -300
            },1000);
        },300);
        setTimeout(function () {
            $(scrollImg[2]).animate({
                "opacity": 1,
                "left": 365
            },1000);
            $(scrollText[2]).animate({
                "opacity": 1,
                "left": 500
            },1000);
        },600);
    }

    if(documentObj.scrollTop() >= 1100){
        //alert('123');
        $(scrollImg[3]).animate({
            "opacity": 1,
            "left": 250
        },1000);
        $(scrollText[3]).animate({
            "opacity": 1,
            "left": -300
        },1000);

        setTimeout(function () {
            $(scrollImg[4]).animate({
                "opacity": 1,
                "left": 370
            },1000);
            $(scrollText[4]).animate({
                "opacity": 1,
                "left": 500
            },1000);
        },300);
        setTimeout(function () {
            $(scrollImg[5]).animate({
                "opacity": 1,
                "left": 250
            },1000);
            $(scrollText[5]).animate({
                "opacity": 1,
                "left": -300
            },1000);
        },600);
    }
});
