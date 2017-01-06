<?php include '_cp_header_menu.php';?>

<div class="blogPageContainer">
    <div class="blogHead" style="padding-top: 20px;">
        <style>
            table td {
                border: 1px solid black;
                padding: 5px;
            }
            a.button {
                color: black;
            }
        </style>
        <h2><?=$title;?></h2>
        <form method="POST">
            <input type="text" name="type" style="display: none;" value="add">
            <input type="text" name="d_title" style="display: none;" value="<?=$d_title;?>">
            <input type="text" name="name" style="border: 1px solid black; color: black; width: 220px; height: 30px;">
            <button type="submit" style="padding: 5px;">Add</button>
        </form>
        <table style="border: 1px solid black; width: 100%;" cellpadding="5" cellspacing="0">
            <tr style="background: #004c63;">
                <td style="width: 30px;">ID</td>
                <td>Name</td>
                <td></td>
            </tr>
            <?php foreach($content as $element) :?>
                <tr>
                    <td><?=$element['id'];?></td>
                    <td>
                        <form method="POST">
                            <input type="text" name="type" style="display: none;" value="edit">
                            <input type="text" name="d_title" style="display: none;" value="<?=$d_title;?>">
                            <input type="text" name="id" style="display: none;" value="<?=$element['id'];?>">
                            <input type="text" name="name" style="border: 1px solid black; color: black; width: 220px; height: 30px;" value="<?=$element['name'];?>">
                            <button type="submit" style="padding: 5px;">change</button>
                        </form>
                    </td>
                    <td>
                        <a href="/cp/delete_dictionary/<?=$d_title;?>/<?=$element['id'];?>" class="button">Delete</a><br>
                    </td>
                </tr>
            <?php endforeach;?>
        </table>
    </div>
</div>