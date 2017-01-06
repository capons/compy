<script type="text/javascript" src="<?=template_url('js').'ckeditor/ckeditor.js';?>"></script>
<?php include '_cp_header_menu.php';?>
<div class="blogPageContainer">
    <div class="blogHead" style="padding-top: 20px;">
        <h2>Add post</h2>
        <form method="POST" enctype="multipart/form-data">
            <input type="text" style="display: none;" name="id" value="<?=$post['id'];?>">
            <table>
                <tr>
                    <td>Author</td>
                    <td>
                        <select name="author">
                            <option value="">--select author--</option>
                            <?php foreach($authors as $author) :?>
                                <?php if ($author['id'] == $post['author_id']) :?>
                                    <option value="<?=$author['id'];?>" selected="selected"><?=$author['name'];?></option>
                                <?php else :?>
                                    <option value="<?=$author['id'];?>"><?=$author['name'];?></option>
                                <?php endif;?>
                            <?php endforeach;?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Title</td>
                    <td><input type="text" name="title" required style="margin-left:0px; border: 1px solid black; color: black; width: 220px; height: 27px;" value="<?=$post['title'];?>"></td>
                </tr>
                <tr>
                    <td>Short description</td>
                    <td>
                        <textarea name="short_description" required style="width: 220px; border: 1px solid black; height: 150px;"><?=$post['short_description'];?></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Image</td>
                    <td>
                        <?php if (!empty($post['preview'])) :?>
                            <img src="<?=template_url('img').'blog/'.$post['preview'];?>" style="max-width: 150px; max-height: 150px;"><br>
                        <?php endif;?>
                        <input type="file" name="preview">
                    </td>
                </tr>
                <tr>
                    <td>Post date</td>
                    <td><input type="date" name="post_date" required value="<?=$post['post_date'];?>"></td>
                </tr>
                <tr>
                    <td>Content</td>
                    <td><textarea name="content" id="content"><?=$post['content'];?></textarea></td>
                </tr>
            </table>
            <hr>
            <div style="margin-top: 10px;">
                <div style="float: left; width: 49%;">
                    Select tags:
                    <?php foreach($tags as $tag) :?>
                        <?php
                            $check = 0;
                            foreach($post['tags'] as $tag_) {
                                if ($tag['id'] == $tag_['id']) {
                                    $check = 1;
                                    break;
                                }
                            }
                        ?>
                        <p><input type="checkbox" id="tag_<?=$tag['id'];?>" <?php if ($check == 1) echo 'checked="checked"';?> name="tag_<?=$tag['id'];?>"><label style="cursor: pointer;" for="tag_<?=$tag['id'];?>"><?=$tag['name'];?></label></p>
                    <?php endforeach;?>
                </div>
                <div style="float: left; width: 49%;">
                    Select themes:
                    <?php foreach($themes as $theme) :?>
                        <?php
                            $check = 0;
                            foreach($post['themes'] as $theme_) {
                                if ($theme['id'] == $theme_['id']) {
                                    $check = 1;
                                    break;
                                }
                            }
                        ?>
                        <p><input type="checkbox" id="theme_<?=$theme['id'];?>" <?php if ($check == 1) echo 'checked="checked"';?> name="theme_<?=$theme['id'];?>"><label style="cursor: pointer;" for="theme_<?=$theme['id'];?>"><?=$theme['name'];?></label></p>
                    <?php endforeach;?>
                </div>

                <div style="width: 100%; float: left; margin-top: 15px;">
                    <button type="submit" style="padding: 5px;">Apply</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript">
    CKEDITOR.replace('content');
</script>