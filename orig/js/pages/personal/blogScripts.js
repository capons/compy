$(document).ready(function() {

    $('.saveBlogButton').click(function() {

        var Blog = new Object();

        Blog['name'] = $('.createBlogName').val();
        Blog['hash'] = $('.createBlogHash').val();
        Blog['text'] =  tinyMCE.activeEditor.getContent({format : 'raw'});

        ajax.send(Blog,'/personal/saveBlog',function(answer){

            $('.createBlogName').attr("value","");
            $('.createBlogHash').attr("value","");
            tinyMCE.activeEditor.setContent("");
            alert('Done!');

        },function() {

        });
    })


});