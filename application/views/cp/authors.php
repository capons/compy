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
        <h2>AUTHORS</h2>
        <a href="/cp/add_author" class="button">Add</a>
        <table style="border: 1px solid black; width: 100%;" cellpadding="5" cellspacing="0">
            <tr style="background: #004c63;">
                <td style="width: 30px;">ID</td>
                <td>Name</td>
                <td>Photo</td>
                <td>Posts</td>
                <td></td>
            </tr>
            <?php foreach($authors as $author) :?>
                <tr>
                    <td><?=$author['id'];?></td>
                    <td><?=$author['name'];?></td>
                    <td><img src="<?=template_url('img').'authors/'.$author['photo'];?>" style="max-width: 50px; max-height: 50px;"></td>
                    <td>
                        <a style="color: black;" href="#" class="show-posts">Show</a>
                        <div style="display: none;">
                            <?php foreach($author['posts'] as $post) :?>
                                <p>
                                    <a style="color: black;" target="_blank" href="/cp/edit_post/<?=$post['id'];?>"><?=$post['title'];?></a>
                                    <a style="color: #DCDCDC;" href="/cp/delete_author_from_post/<?=$post['id'];?>">X</a>
                                </p>
                            <?php endforeach;?>
                        </div>
                    </td>
                    <td>
                        <a href="/cp/edit_author/<?=$author['id'];?>" class="button">Edit</a><br>
                        <a href="/cp/delete_author/<?=$author['id'];?>" class="button">Delete</a>
                    </td>
                </tr>
            <?php endforeach;?>
        </table>
    </div>
</div>
<script type="text/javascript">
    $('a.show-posts').click(function(event) {
        event.preventDefault();
        div = $(this).parent().find('div');
        if (div.css('display') == 'none') {
            div.show();
            $(this).text('Hide');
        } else {
            div.hide();
            $(this).text('Show');
        }
    })
</script>