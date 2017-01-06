<script type="text/javascript" src="<?=template_url('js').'ckeditor/ckeditor.js';?>"></script>
<?php include '_cp_header_menu.php';?>
<div class="blogPageContainer">
    <div class="blogHead" style="padding-top: 20px;">
        <h2>Edit work</h2>
        <form method="POST" enctype="multipart/form-data">
            <input type="text" style="display: none;" value="<?=$work['id'];?>" name="id">
            <table>
                <tr>
                    <td>Title</td>
                    <td><input type="text" name="title" required style="margin-left:0px; border: 1px solid black; color: black; width: 220px; height: 27px;" value="<?=$work['title'];?>"></td>
                </tr>
                <tr>
                    <td>Color</td>
                    <td>
                        <select name="color" style="background: <?=$work['color'];?>">
                            <?php foreach($colors as $color) :?>
                                <?php if ($color['name'] == $work['color']) :?>
                                    <option selected="selected" value="<?=$color['id'];?>" style="background: <?=$color['name'];?>;"><?=$color['name'];?></option>
                                <?php else :?>
                                    <option value="<?=$color['id'];?>" style="background: <?=$color['name'];?>;"><?=$color['name'];?></option>
                                <?php endif;?>
                            <?php endforeach;?>
                        </select>
                        <script type="text/javascript">
                            $('select[name="color"]').change(function(){
                                background = $(this).find('option:selected').css('background');
                                console.log(background);
                                $(this).css('background',background);
                            })
                        </script>
                    </td>
                </tr>
                <tr>
                    <td>Short description</td>
                    <td>
                        <textarea name="short_description" required style="width: 220px; border: 1px solid black;"><?=$work['short_description'];?></textarea>
                    </td>
                </tr>
                <tr>
                    <td>HTML - content</td>
                    <td>
                        <textarea name="content_html" id="content_html"><?=$work['content_html'];?></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Small image</td>
                    <td>
                        <?php if (!empty($work['preview'])) :?>
                            <img style="max-width: 200px;" src="<?=template_url('img').'works/'.$work['preview'];?>"><br>
                        <?php endif;?>
                        <input type="file" name="preview">
                    </td>
                </tr>
                <tr>
                    <td>Content</td>
                    <td>
                        <?php if (!empty($work['content'])) :?>
                            <img style="max-width: 200px; max-height: 250px;" src="<?=template_url('img').'/works/fullworks/'.$work['content'];?>"><br>
                        <?php endif;?>
                        <input type="file" name="content">
                    </td>
                </tr>
            </table>
            <hr>
            <div style="margin-top: 10px;">
                <div style="float: left; width: 30%;">
                    Select technologies:
                    <?php foreach($technologies as $technology) :?>
                        <?php
                            $check = 0;
                            foreach($work['technologies'] as $technology_) {
                                if ($technology_['id'] == $technology['id']) {
                                    $check = 1;
                                    break;
                                }
                            }
                        ?>
                        <p><input type="checkbox" id="technology_<?=$technology['id'];?>" name="technology_<?=$technology['id'];?>" <?php if ($check==1) echo 'checked="checked"';?>><label style="cursor: pointer;" for="technology_<?=$technology['id'];?>"><?=$technology['name'];?></label></p>
                    <?php endforeach;?>
                </div>
                <div style="float: left; width: 30%;">
                    Select themes:
                    <?php foreach($themes as $theme) :?>
                        <?php
                        $check = 0;
                        foreach($work['themes'] as $theme_) {
                            if ($theme_['id'] == $theme['id']) {
                                $check = 1;
                                break;
                            }
                        }
                        ?>
                        <p><input type="checkbox" id="theme_<?=$theme['id'];?>" name="theme_<?=$theme['id'];?>" <?php if ($check==1) echo 'checked="checked"';?>><label style="cursor: pointer;" for="theme_<?=$theme['id'];?>"><?=$theme['name'];?></label></p>
                    <?php endforeach;?>
                </div>
                <div style="float: left; width: 30%;">
                    Select type:
                    <?php foreach($types as $type) :?>
                        <?php
                        $check = 0;
                        foreach($work['types'] as $type_) {
                            if ($type_['id'] == $type['id']) {
                                $check = 1;
                                break;
                            }
                        }
                        ?>
                        <p><input type="checkbox" id="type_<?=$type['id'];?>" name="type_<?=$type['id'];?>" <?php if ($check==1) echo 'checked="checked"';?>><label style="cursor: pointer;" for="type_<?=$type['id'];?>"><?=$type['name'];?></label></p>
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
    CKEDITOR.replace('content_html');
</script>