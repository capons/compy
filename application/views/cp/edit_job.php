<script type="text/javascript" src="<?=template_url('js').'ckeditor/ckeditor.js';?>"></script>

<?php include '_cp_header_menu.php';?>

<div class="blogPageContainer">

    <div class="blogHead" style="padding-top: 20px;">

        <h2>Edit job vacancy</h2>

        <form method="POST" enctype="multipart/form-data">

            <input type="text" style="display: none;" value="<?=$vacancy['id'];?>" name="id">

            <table>

                <tr>

                    <td>Title</td>

                    <td><input type="text" name="title" required style="margin-left:0px; border: 1px solid black; color: black; width: 220px; height: 27px;" value="<?=$vacancy['title'];?>"></td>

                </tr>



                <tr>

                    <td>Short description</td>

                    <td>

                        <textarea name="description" required style="width: 220px; border: 1px solid black;"><?=$vacancy['description'];?></textarea>

                    </td>

                </tr>

                <tr>

                    <td>HTML - content</td>

                    <td>

                        <textarea name="requirements" id="content_html"><?=$vacancy['requirements'];?></textarea>

                    </td>

                </tr>





                <tr>

                    <td>requirements_plus</td>

                    <td>

                        <textarea name="requirements_plus" style="width: 220px; border: 1px solid black;"><?=$vacancy['requirements_plus'];?></textarea>

                    </td>

                </tr>



                <tr>

                    <td>benefits</td>

                    <td>

                        <textarea name="benefits" required style="width: 220px; border: 1px solid black;"><?=$vacancy['benefits'];?></textarea>

                    </td>

                </tr>



                <tr>

                    <td>To Apply</td>

                    <td>

                        <textarea name="to_apply" required style="width: 220px; border: 1px solid black;"><?=$vacancy['to_apply'];?></textarea>

                    </td>



                    <td>Alias(use only: A-Za-z, 0-9, +-/)</td>

                    <td>

                        <input typr="text" name="alias" required style="width: 220px; border: 1px solid black;" value="<?=$vacancy['alias'];?>">

                    </td>

                </tr>



            </table>

            <h3>Select technologies</h3>
            <select name="mailByTechnologyId">
                <option value="" selected></option>
                <?php foreach($mailByTechnology as $technology) :?>

                    <?php
                    $check = 0;
                    if ($technology['id'] == $vacancy['technologyMailId']) {
                        $check = 1;
                    }
                    ?>

                    <option value="<?=$technology['id'];?>" <?php if ($check==1) echo 'selected';?>><?=$technology['technology'];?></option>
                <?php endforeach;?>
            </select>

            <button type="submit" style="padding: 5px;">Apply Changes</button>

        </form>

    </div>

</div>

<script type="text/javascript">

    CKEDITOR.replace('content_html');

</script>