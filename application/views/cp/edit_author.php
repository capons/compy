<?php include '_cp_header_menu.php';?>
<div class="blogPageContainer">
    <div class="blogHead" style="padding-top: 20px;">
        <h2>Add author</h2>
        <form method="POST" enctype="multipart/form-data">
            <input type="text" style="display: none;" value="<?=$author['id'];?>" name="id">
            <table>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" required style="margin-left:0px; border: 1px solid black; color: black; width: 220px; height: 27px;" value="<?=$author['name'];?>"></td>
                </tr>
                <tr>
                    <td>Photo</td>
                    <td>
                        <?php if (!empty($author['photo'])) :?>
                            <img src="<?=template_url('img').'authors/'.$author['photo'];?>" style="max-width: 150px; max-height: 150px;"><br>
                        <?php endif;?>
                        <input type="file" name="photo">
                    </td>
                </tr>
            </table>
            <div style="width: 100%; float: left; margin-top: 15px;">
                <button type="submit" style="padding: 5px;">Apply</button>
            </div>
        </form>
    </div>
</div>