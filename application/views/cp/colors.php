<?php include '_cp_header_menu.php';?>
    <div class="addContainer ">

        <h2>Colors</h2>
        <form action="/cp/add_color" method="POST" class="addPostForm">
            <input style="border: 1px solid black; color: black;" type="text" name="name">
            <button type="submit">Add</button>
        </form>
        <table cellpadding="5" cellspacing="0"  class="addPostForm cpBlogTable addColor">
            <tr style="background: #004c63;">
                <th>ID</th>
                <th style="    width: 390px;">Color</th>
                <th></th>
            </tr>
            <?php foreach($colors as $color) :?>
                <tr>
                    <td><?=$color['id'];?></td>
                    <td style="background: <?=$color['name'];?>">
                        <form action="/cp/edit_color/<?=$color['id'];?>" method="POST" class="colorEdit">
                            <input class="color" type="text" name="name" value="<?=$color['name'];?>">
                            <input class="colorChange" type="submit" value="Change" style="padding: 5px;">
                        </form>
                    </td>
                    <td>
                        <a style="color: black;" href="/cp/delete_color/<?=$color['id'];?>"><img src="<?=template_url('img');?>delete_" alt=""/></a>
                    </td>
                </tr>
            <?php endforeach;?>
        </table>
<!--    </div>-->
    </div>
