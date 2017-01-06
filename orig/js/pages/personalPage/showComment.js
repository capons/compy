$(document).ready(function(){
    $('.buttonComments').click(function(){
        var showBlockComment = $(this).parent().parent().parent().find('.blockComments');
        if(showBlockComment.css('display')=='block'){
            showBlockComment.css('display', 'none');
        }
        else if(showBlockComment.css('display')=='none'){
            showBlockComment.css('display', 'block');
        }
    });

    //Скрываем блок ввода комментария - Нажимаем "Отмена"
    $('.buttonCancelComments').click(function(){
        $(this).parent().css('display', 'none');
    });

    //Отображаем поле для нового коммента - кнопка "Ответить"

    $('.buttonAddNewComments').click(function(){
        $(this).parent().parent().parent().find('.blockBlogNewComment').css('display', 'block');
    });
    $('.blockCommentReply').click(function(){
        $(this).parent().parent().parent().parent().parent().find('.blockBlogNewComment').css('display', 'block');
    });
});
