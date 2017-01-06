//Делаем активным выбранный пункт меню
$(".buttonMenu").click(function(){
    $(".buttonMenuActive").removeClass("buttonMenuActive");
    $(this).addClass("buttonMenuActive");
});
//Отображаем блоки при выборе меню
$("#personalPageInfo").click(function(){
    $(".personalPageInfoView").css("display","block");
    $(".personalPageSearchOrdersView").css("display","none");
    $(".personalPageFriendsView").css("display","none");
    $(".personalPagePortfolioView").css("display","none");
    $(".personalPageBlogView").css("display","none");
});
$("#personalPageSearchOrders").click(function(){
    $(".personalPageInfoView").css("display","none");
    $(".personalPageSearchOrdersView").css("display","block");
    $(".personalPageFriendsView").css("display","none");
    $(".personalPagePortfolioView").css("display","none");
    $(".personalPageBlogView").css("display","none");
});
$("#personalPageFriends").click(function(){
    $(".personalPageInfoView").css("display","none");
    $(".personalPageSearchOrdersView").css("display","none");
    $(".personalPageFriendsView").css("display","block");
    $(".personalPagePortfolioView").css("display","none");
    $(".personalPageBlogView").css("display","none");
});
$("#personalPagePortfolio").click(function(){
    $(".personalPageInfoView").css("display","none");
    $(".personalPageSearchOrdersView").css("display","none");
    $(".personalPageFriendsView").css("display","none");
    $(".personalPagePortfolioView").css("display","block");
    $(".personalPageBlogView").css("display","none");
});
$("#personalPageBlog").click(function(){
    $(".personalPageInfoView").css("display","none");
    $(".personalPageSearchOrdersView").css("display","none");
    $(".personalPageFriendsView").css("display","none");
    $(".personalPagePortfolioView").css("display","none");
    $(".personalPageBlogView").css("display","block");
});



$('#closeFormSearch').click(function(){
    $('#personalPageInfo').click();
});