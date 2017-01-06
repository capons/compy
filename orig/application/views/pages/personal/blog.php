
<div class="settings_2">
    <div class="top_settings">
        Блог
    </div>

    <div class="menuItemsBlog">
        <div id="menuItemSettings" class="type">Настройки
        </div>
        <div id="menuItemMySubscriptions"  class="type typeActive">Мои подписки
        </div>
    </div>

    <div id="displaySettings" class="wrapBlog">
        <div class="NameHashOut">
            <input class="createBlogName">
            <input class="createBlogHash">
        </div>
        <textarea class="createBlogText"></textarea>
        <input class="saveBlogButton" type="button" value="Добавить Запись">
    </div>
    <div id="displayMySubscriptions" class="wrapBlog">
        <?php

        $count = count($blogList);
        for( $i=$count-1 ; $i >= 0; $i--) {
            ?>

            <input type="text"  value="<?= $blogList[$i]['blog_name'] ?>" class="blog<?= $blogList[$i]['blog_id'] ?>" > <img class="editBlogRecord" data-click="change<?= $blogList[$i]['blog_id'] ?>" src="/css/img/change.png"><img class="delete" data-click="delete<?= $blogList[$i]['blog_id'] ?>" src="/css/img/close.png"><br>

        <?php
        }

        ?>
    </div>
</div>

