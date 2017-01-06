
<div class="settings_3">
    <div class="top_settings">Фотогалерея
        <!--<div id="galery_settings" class="galery_button">
        </div>
        <div id="add_video" class="galery_button">Добавить видео
        </div>
        <div id="add_photo" class="galery_button">Добавить фото
        </div>
        <div id="add_album" class="galery_button">+ Создать альбом
        </div>-->
    </div>
    <div class="type_photo">
        <div id="menuItemPortfolio" class="type">Портфолио
        </div>
        <div id="menuItemPhoto"  class="type">Ваши фотографии
        </div>
        <div id="menuItemAlbum"  class="type typeActive">Альбом
        </div>
    </div>

    <div class="createAlbumDiv">
        <form id="addAlbumForm" method="post" enctype="multipart/form-data" action="/galleryItem/addAlbum">

        <input type="button" value="close" class="closeAlbumFormButton">
        <input type="text" placeholder="name" id="blogNameInp" name="name">
        <input type="text" placeholder="description" id="blogDescrInp" name="descr">
            <input type="file" name="albumLogo" value="Album Logo" accept="image/jpeg,image/png"/>


            <input type="submit" value="save" id="saveAlbumButton">
        </form>

    </div>

    <div id="displayBlockAlbum" class="wrap_photo">
        <div class="wrapPhotoConteiner">
            <div class="statistics">
                <div class="wrap_plus">
                    <img src="css/img/plus.png" style="margin-bottom: 10px;"><br>
                    Создать Альбом
                </div>
                <div class="statistics_info">
                    <span class="text_statistics">Загруженных фотографий:</span><br>
                    <span class="text_statistics">Загруженных видео:</span><br>
                    <span class="text_statistics">Просмотров всго:</span><br>
                    <span class="text_statistics">Лайков получено:</span><br>
                    <span class="text_statistics">Свободного пространства:</span><br>
                </div>
            </div>

            <?php
    foreach($albums as $albumInf)
    {
         echo "   <div class='photo_poster'>
                <div class='topButtonsAlbum'>
                    <div class='buttonsAlbum deleteAlbum' title='Удалить'></div>
                    <div class='buttonsAlbum editAlbum' title='Редактировать'></div>
                </div>

                <img src='".$albumInf['logo_path'] ."'/>

                <div class='bottom_statistics'>
                    <div class='title_photo'>Авто
                    </div>
                    <div class='number_photo'>16 фото
                    </div>
                </div>
            </div> ";
    }
            ?>

        <div class="allAlbumButton">
            <label>Все альбомы</label>
        </div>
    </div>
    <div id="displayBlockPhoto" class="wrap_photo">
        <div class="wrapPhotoConteiner">
            <div class="statistics">
                <div class="wrap_plus">
                    <img src="css/img/plus.png" style="margin-bottom: 10px;"><br>
                    Добавить фото
                </div>
                <div class="statistics_info">
                    <span class="text_statistics">Загруженных фотографий:</span><br>
                    <span class="text_statistics">Загруженных видео:</span><br>
                    <span class="text_statistics">Просмотров всго:</span><br>
                    <span class="text_statistics">Лайков получено:</span><br>
                    <span class="text_statistics">Свободного пространства:</span><br>
                </div>
            </div>
            <img class="photo_poster" src="./css/img/car2.png"/>
            <img class="photo_poster" src="./css/img/car3.png"/>
            <img class="photo_poster" src="./css/img/car4.png"/>
            <img class="photo_poster" src="./css/img/car2.png"/>
            <img class="photo_poster" src="./css/img/car3.png"/>
            <img class="photo_poster" src="./css/img/car4.png"/>
            <img class="photo_poster" src="./css/img/car2.png"/>
            <img class="photo_poster" src="./css/img/car3.png"/>
            <img class="photo_poster" src="./css/img/car4.png"/>
            <img class="photo_poster" src="./css/img/car3.png"/>
            <img class="photo_poster" src="./css/img/car4.png"/>
            <img class="photo_poster" src="./css/img/car4.png"/>
            <img class="photo_poster" src="./css/img/car2.png"/>
            <img class="photo_poster" src="./css/img/car3.png"/>
            <img class="photo_poster" src="./css/img/car4.png"/>
            <img class="photo_poster" src="./css/img/car3.png"/>
            <img class="photo_poster" src="./css/img/car4.png"/>
            <img class="photo_poster" src="./css/img/car4.png"/>
            <img class="photo_poster" src="./css/img/car2.png"/>
            <img class="photo_poster" src="./css/img/car3.png"/>
            <img class="photo_poster" src="./css/img/car4.png"/>
            <img class="photo_poster" src="./css/img/car3.png"/>
            <img class="photo_poster" src="./css/img/car4.png"/>
        </div>
        <div class="allPhotoButton">
            <label>Свернуть</label>
        </div>

    </div>
    <div id="displayBlockPhotoFromAlbum" class="wrap_photo" style="display: none">
        <div class="wrapPhotoConteiner">
            <div class="statistics">
                <div class="wrap_plus" style="text-transform: uppercase;">
                    <img src="css/img/blackArrowPhoto.png" style="margin-bottom: 10px; margin-top: 26px; width: 130px; height: 65px; cursor: pointer;"><br>
                    Назад
                </div>
            </div>
            <img class="photo_poster" src="./css/img/car2.png"/>
            <img class="photo_poster" src="./css/img/car3.png"/>
            <img class="photo_poster" src="./css/img/car4.png"/>
        </div>
        <div class="allPhotoButton">
            <label>Все фото</label>
        </div>
    </div>
</div>

