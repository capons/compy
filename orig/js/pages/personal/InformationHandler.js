function Update(target,text,type) {
    $(target).click(function() {
        // поставить проверку на 300 символов и делать крестик в случае false
        $(target).attr("src","/css/img/loading.GIF");
        var inf = new Object();
        inf['value'] = $(text).val();
        inf['type'] = type;
        ajax.send(inf,'/personal/changeInformation',function(answer){

            $(target).attr("src","/css/img/save.png");

        },function() {

        });
    });
}

var activeTarget = '#settingsP';
var activeDisplay = '.settingsPage';

function Turn(target,content) {

    $(target).click( function() {

        if(activeTarget) $(activeTarget).css("background","url(css/img/button.png) 97% 48% no-repeat white");
        if(activeTarget) $(activeTarget).css("color","black");
        activeTarget = target;
        if(activeDisplay) $(activeDisplay).css("display","none");
        activeDisplay = content;
        $(target).css("background","url(css/img/buttonGreen.png) 96% 48% no-repeat #707070");
        $(target).css("color","white");
        $(content).css("display","block");


    });

}

function changeBlog() {
    $('.editBlogRecord').click(function() {
        var blog = new Object();
        blog['value'] = $('.editBlogRecord').attr("")
        $('.createBlog').css("display","none");
        $('.editRecord').attr("value")
        $('.editBlock').slideDown("slow");
    });
}

$(document).ready(function() {

    $('#settingsP').css("background-color","black");
    $('#settingsP').css("color","white");

    changeBlog();

    Turn('#settingsP','.settingsPage');
    Turn('#changeP','.changePage');
    Turn('#photoGalleryP','.photoAlbumPage');

    Turn('#calendarP','.calendarPersonPage');
    Turn('#BlogPersonalS','.BlogPersonal');
    Turn('#OrderP','.HistoryOrderPage');
    Turn('#AddOrderP','.AddOrderPage');


    $('.createBlog').click(function() {
        $('.createBlog').css("display","none");
        $('.editBlock').slideDown("slow");
        $('.cancelBlog').click(function() {
            $('.editBlock').slideUp("slow");
            $('.createBlog').css("display","block");
        });
        $('.saveBlog').click(function() {
            text = tinyMCE.activeEditor.getContent({format : 'raw'});

            ajax.send(text,'/personal/saveBlog',function(answer){

                alert(answer);

            },function() {

            });
        });



    });



    $('.editBlogRecord').click(function() {
        data = $('.editBlogRecord').data();

        $('.cancelBlog').click(function() {
            $('.editBlock').slideUp("slow");
            $('.createBlog').css("display","block");
        });
    });

});