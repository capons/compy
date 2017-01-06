<script type="text/javascript" src="<?=template_url('js').'ckeditor/ckeditor.js';?>"></script>
<?php include '_cp_header_menu.php';?>

<div class="addContainer">
    <form method="POST" class="addPostForm" enctype="multipart/form-data">
    <h2>Add post</h2>
        <input type="text" name="title" required placeholder="Title">
        <input type="date" name="post_date" required>
        <select name="author">
            <option value=""> author </option>
            <?php foreach($authors as $author) :?>
                <option value="<?=$author['id'];?>"><?=$author['name'];?></option>
            <?php endforeach;?>
        </select>
        <input type="file" name="preview" required>
            <h3>Articles</h3>
        <textarea name="content" id="content"></textarea>
            <h3>Short description</h3>
        <textarea name="short_description" required></textarea>
            <div class="selectBlock">
                <h3>Category</h3>
                <?php foreach($themes as $theme) :?>
                    <p><input type="checkbox" id="theme_<?=$theme['id'];?>" name="theme_<?=$theme['id'];?>"><span style="cursor: pointer;" for="theme_<?=$theme['id'];?>"><?=$theme['name'];?></span></p>
                <?php endforeach;?>
            </div>
            <div class="selectBlock">
                <h3>Tags</h3>
                <?php foreach($tags as $tag) :?>
                    <p><input type="checkbox" id="tag_<?=$tag['id'];?>" name="tag_<?=$tag['id'];?>"><span style="cursor: pointer;" for="tag_<?=$tag['id'];?>"><?=$tag['name'];?></span></p>
                <?php endforeach;?>
            </div>

        <div style="clear: both;"></div>

        <button type="submit">SAVE</button>

    </form>

</div>

<script type="text/javascript">
    CKEDITOR.replace('content');
</script>