//Делаем активным выбранный пункт меню
$(".buttonMenuPortfolio").click(function(){
    $(".buttonMenuPortfolioActivity").removeClass("buttonMenuPortfolioActivity");
    $(this).addClass("buttonMenuPortfolioActivity");
});