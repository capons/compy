// вешаем на каждую ссылку обработчик
$(".type").click(function(){
// удаляем у старого элемента, класс   typeActive
    $(".typeActive").removeClass("typeActive");
// добавляем к ссылки по которой щёлкнули класс typeActive
    $(this).addClass("typeActive");
});

//Отображение блоков MenuPhotoGallery
$('#menuItemAlbum').click(function(){
        $('#displayBlockAlbum').css('display', 'block');
        $('#displayBlockPhoto').css('display', 'none');
        $('.wrapPhotoConteiner').css('height','100%');
    }
);
$('#menuItemPhoto').click(function(){
        $('#displayBlockPhoto').css('display', 'block');
        $('#displayBlockAlbum').css('display', 'none');
        $('#displayBlockPhotoFromAlbum').css('display', 'none');
        $('.wrapPhotoConteiner').css('height','655px');
        $('.allPhotoButton label').text("Все фото");
    }
);
$('#menuItemPortfolio').click(function(){
        $('#displayBlockPhoto').css('display', 'none');
        $('#displayBlockAlbum').css('display', 'none');
    }
);

$('.title_photo').click(function(){
        $('#displayBlockPhotoFromAlbum').css('display','block');
        $('#displayBlockAlbum').css('display','none');
    }
);
$('.wrap_plus img').click(function(){
        $('#displayBlockPhotoFromAlbum').css('display','none');
        $('#displayBlockAlbum').css('display','block');
    }
);
$('.allPhotoButton label').click(function(){
        if($(this).text()=="Все фото"){
            $(this).text("Свернуть");
            $('.wrapPhotoConteiner').css('height','100%');
        }
        else if($(this).text()=="Свернуть"){
            $(this).text("Все фото");
            $('.wrapPhotoConteiner').css('height','655px');
        }
    }
);



//Отображение блоков MenuBlog
$('#menuItemSettings').click(function(){
        $('#displaySettings').css('display', 'block');
        $('#displayMySubscriptions').css('display', 'none');
    }
);
$('#menuItemMySubscriptions').click(function(){
        $('#displaySettings').css('display', 'none');
        $('#displayMySubscriptions').css('display', 'block');
    }
);
$(function(){
        $( ".photo_poster" ).mouseleave(function() {// курсор ушел с ссылки?
                $( this ).find('.topButtonsAlbum').css('opacity','0');
                $( this ).find('.buttonsAlbum').css('cursor','default');
            }
        );
        $( ".photo_poster" ).mouseenter(function() {// Навели на ссылку?
                $( this ).find('.topButtonsAlbum').css('opacity','1');
                $( this ).find('.buttonsAlbum').css('cursor','pointer');
            }
        );
    }
);