<script type="text/javascript" src="<?=template_url('js').'ckeditor/ckeditor.js';?>"></script>
<?php include '_cp_header_menu.php';?>

<div class="addContainer">
    <form method="POST" class="addPostForm" enctype="multipart/form-data">
        <h2>Add work</h2>
        <input type="text" name="title" required placeholder="Title">
        <span style="color: #fff;">Color</span>
        <button><a href="/cp/colors">Add new color</a></button>
        <select name="color" style="background: <?=define_color(0);?>">
            <?php foreach($colors as $color) :?>
                <option style="background: <?=$color['name'];?>" value="<?=$color['id'];?>"><?=$color['name'];?></option>
            <?php endforeach;?>
        </select>
        <script type="text/javascript">
            $('select[name="color"]').change(function(){
                background = $(this).find('option:selected').css('background');
                console.log(background);
                $(this).css('background',background);
            })
        </script>
        <textarea name="content_html" id="content_html"></textarea>
        <h3>Short description</h3>
        <textarea name="short_description" required></textarea>


        <div class="selectBlock">
            <h3>Select technologies</h3>
            <?php foreach($technologies as $technology) :?>
                <p><input type="checkbox" id="technology_<?=$technology['id'];?>" name="technology_<?=$technology['id'];?>"><label style="cursor: pointer;" for="technology_<?=$technology['id'];?>"><?=$technology['name'];?></label></p>
            <?php endforeach;?>
        </div>
        <div class="selectBlock">
            <h3>Select themes</h3>
            <?php foreach($themes as $theme) :?>
                <p><input type="checkbox" id="theme_<?=$theme['id'];?>" name="theme_<?=$theme['id'];?>"><label style="cursor: pointer;" for="theme_<?=$theme['id'];?>"><?=$theme['name'];?></label></p>
            <?php endforeach;?>
        </div>
        <div class="selectBlock">
            <h3>Select type</h3>
            <?php foreach($types as $type) :?>
                <p><input type="checkbox" id="type_<?=$type['id'];?>" name="type_<?=$type['id'];?>"><label style="cursor: pointer;" for="type_<?=$type['id'];?>"><?=$type['name'];?></label></p>
            <?php endforeach;?>
        </div>


        <table>
<!--            <tr>-->
<!--                <td>Title</td>-->
<!--                <td><input type="text" name="title" required style="margin-left:0px; border: 1px solid black; color: black; width: 220px; height: 27px;"></td>-->
<!--            </tr>-->
<!--            <tr>-->
<!--                <td>Short description</td>-->
<!--                <td>-->
<!--                    <textarea name="short_description" required style="width: 220px; border: 1px solid black;"></textarea>-->
<!--                </td>-->
<!--            </tr>-->
<!--            <tr>-->
<!--                <td>HTML - content</td>-->
<!--                <td>-->
<!--                    <textarea name="content_html" id="content_html"></textarea>-->
<!--                </td>-->
<!--            </tr>-->
            <tr>
                <td style="color: #fff;">Small image</td>
                <td><input type="file" name="preview" required></td>
            </tr>
            <tr>
                <td style="color: #fff;">Content</td>
                <td><input type="file" name="content"></td>
            </tr>
        </table>
        <button type="submit">SAVE</button>

<!--        <hr>-->
<!--        <div style="margin-top: 10px;">-->
<!--            <div style="float: left; width: 30%;">-->
<!--                Select tags:-->
<!--                --><?php //foreach($tags as $tag) :?>
<!--                    <p><input type="checkbox" id="tag_--><?//=$tag['id'];?><!--" name="tag_--><?//=$tag['id'];?><!--"><label style="cursor: pointer;" for="tag_--><?//=$tag['id'];?><!--">--><?//=$tag['name'];?><!--</label></p>-->
<!--                --><?php //endforeach;?>
<!--            </div>-->
<!--            <div style="float: left; width: 30%;">-->
<!--                Select themes:-->
<!--                --><?php //foreach($themes as $theme) :?>
<!--                    <p><input type="checkbox" id="theme_--><?//=$theme['id'];?><!--" name="theme_--><?//=$theme['id'];?><!--"><label style="cursor: pointer;" for="theme_--><?//=$theme['id'];?><!--">--><?//=$theme['name'];?><!--</label></p>-->
<!--                --><?php //endforeach;?>
<!--            </div>-->
<!--            <div style="float: left; width: 30%;">-->
<!--                Select type:-->
<!--                --><?php //foreach($types as $type) :?>
<!--                    <p><input type="checkbox" id="type_--><?//=$type['id'];?><!--" name="type_--><?//=$type['id'];?><!--"><label style="cursor: pointer;" for="type_--><?//=$type['id'];?><!--">--><?//=$type['name'];?><!--</label></p>-->
<!--                --><?php //endforeach;?>
<!--            </div>-->
<!---->
<!---->
<!--            <div style="width: 100%; float: left; margin-top: 15px;">-->
<!--                <button type="submit" style="padding: 5px;">Add</button>-->
<!--            </div>-->
<!--        </div>-->
    </form>

</div>
<script type="text/javascript">
    CKEDITOR.replace('content_html');
</script>