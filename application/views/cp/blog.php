<?php include '_cp_header_menu.php';?>
    <div class="cpblogPage">
        <div class="cpblogContainer">

        <h2>Blog</h2>
        <a href="/cp/add_post" ><div class="button">
            Add Post
        </div></a>

        <table class="cpBlogTable">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Themes</th>
                <th>Tags</th>
                <th>Post date</th>
                <th>Image</th>
                <th>Author</th>
                <th>Create date</th>
                <th>Update date</th>
                <th></th>
            </tr>
            <?php foreach($posts as $post) :?>
                <tr>
                    <td><?=$post['id'];?></td>
                    <td><?=$post['title'];?></td>
                    <td class="shortTd">
                        <?php
                        $themes = array();
                        foreach($post['themes'] as $theme) {
                            $themes[] = $theme['name'];
                        }
                        echo implode($themes,', ');
                        ?>
                    </td>
                    <td class="shortTd">
                        <?php
                        $tags = array();
                        foreach($post['tags'] as $tag) {
                            $tags[] = $tag['name'];
                        }
                        echo implode($tags,', ');
                        ?>
                    </td>
                    <td class="datePost"><?=date('d.m.Y',strtotime($post['post_date']));?></td>
                    <td>
                        <?php if (!empty($post['preview'])):?>
                            <img src="<?=template_url('img').'blog/'.$post['preview'];?>">
                        <?php endif;?>
                    </td>
                    <td>
                        <div class="cpAuthorName"><?=$post['author_name'];?></div>
                        <?php if (!empty($post['author_photo'])) :?>
                            <img src="<?=template_url('img').'authors/'.$post['author_photo'];?>">
                        <?php endif;?>
                    </td>
                    <td class="datePost"><?=date('d.m.y H:i:s',strtotime($post['create_date']));?></td>
                    <td class="datePost"><?=date('d.m.Y H:i:s',strtotime($post['update_date']));?></td>
                    <td>
                        <a href="/cp/edit_post/<?=$post['id'];?>">
                            <img src="<?=template_url('img');?>edit_blue.png" alt=""/>
                        </a>
                    </td>
                    <td>
                        <a href="/cp/delete_post/<?=$post['id'];?>">
                            <img src="<?=template_url('img');?>delete_blue.png" alt=""/>
                        </a>
                    </td>

                </tr>
            <?php endforeach;?>
        </table>

        </div>
    </div>
        <?=$pagination;?>
