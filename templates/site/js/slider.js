var isMainPage = (window.location.pathname == "/" || window.location.pathname == "/sourceCi/index.php" || window.location.pathname == "/computools/index.php" || window.location.pathname == "/cmp/index.php" );

var sliderArrayMain = ["templates/site/img/slider/1.jpg", "templates/site/img/slider/2.jpg", "templates/site/img/slider/3.jpg"];

var randomSlides = [0,1,2];

var items = [];
var counter = 0;

var current;
var next;


function theRotator() {
    var temp = $('#slider > ul li');
    temp.css('opacity', 0).hide();
    temp.each(function(index,item){items.push($(item)); });
    setInterval('rotate()',5000);
    next= items[0].css('opacity', 1).show();
}


function rotate() {
    if (windowObj.width() >=1024) {
        current = next;
        current.animate({opacity: 0},{ duration: 1500, queue: false }, function(){current.hide()});
        counter = counter >= (items.length - 1) ? 0 : ++counter;
        next = items[counter];
        next.show().animate({opacity: 1}, { duration: 1500, queue: false });
    }
}

documentObj.ready(function() {
    if (windowObj.width() >=1024) {

        if (isMainPage || isGalleryPage) sliderArrayMain = sliderArrayMain;
        else sliderArrayMain = sliderArrayDesign;
        randomSlides = randomSlides.slice(0, sliderArrayMain.length);
        var sliderPhoto = $('#sliderPhoto div');
        var current = ($('#slider ul li.show') ? $('#slider ul li.show') : $('#slider ul li:first'));

        randomSlides.sort(function () {
            return 0.5 - Math.random()
        });

        randomSlides = randomSlides.slice(0, sliderPhoto.length);

        theRotator();

        for (var i = 0; i <= sliderPhoto.length - 1; i++) {
            $(sliderPhoto[i]).css({
                "background": "url('" + sliderArrayMain[randomSlides[i]] + "')",
                "background-size": "cover",
                "background-position": "center"
            });
        }

    }
});