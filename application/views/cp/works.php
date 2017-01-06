<?php include '_cp_header_menu.php';?>
<!--<div class="blogPageContainer">-->
<!--    <div class="blogHead" style="padding-top: 20px;">-->
<!--        <style>-->
<!--            table td {-->
<!--                border: 1px solid black;-->
<!--                padding: 5px;-->
<!--            }-->
<!--            a.button {-->
<!--                color: black;-->
<!--            }-->
<!--        </style>-->

<div class="cpblogPage">
    <div class="cpblogContainer">

        <h2>Work</h2>
        <a href="/cp/add_work"><div class="button">Add</div></a>

        <table class="cpBlogTable" cellpadding="5" cellspacing="0">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Color</th>
                <th>Short Description</th>
                <th>Themes</th>
                <th>Types</th>
                <th>Technologies</th>
                <th>Create date</th>
                <th>Update date</th>
                <th></th>
            </tr>
            <tbody>
            <?php foreach($works as $work) :?>
                <tr id="work-<?=$work['id'];?>">
                    <td><?=$work['id'];?></td>
                    <td><?=$work['title'];?></td>
                    <td style="background: <?=$work['color'];?>"></td>
                    <td><?=$work['short_description'];?></td>
                    <td>
                        <?php
                            $themes = array();
                            foreach($work['themes'] as $theme) {
                                $themes[] = $theme['name'];
                            }
                            echo implode($themes,', ');
                        ?>
                    </td>
                    <td>
                        <?php
                            $types = array();
                            foreach($work['types'] as $type) {
                                $types[] = $type['name'];
                            }
                        echo implode($types,', ');
                        ?>
                    </td>
                    <td>
                        <?php
                            $technologies = array();
                            foreach($work['technologies'] as $technology) {
                                $technologies[] = $technology['name'];
                            }
                            echo implode($technologies,', ');
                        ?>
                    </td>
                    <td><?=date('d.m.Y H:i:s',strtotime($work['create_date']));?></td>
                    <td><?=date('d.m.Y H:i:s',strtotime($work['update_date']));?></td>
                    <td>
                        <a href="/cp/edit_work/<?=$work['id'];?>">
                            <img src="<?=template_url('img');?>edit_blue.png" alt=""/>
                        </a>
                    </td>
                    <td>
                        <a href="/cp/delete_work/<?=$work['id'];?>">
                            <img src="<?=template_url('img');?>delete_blue.png" alt=""/>
                        </a><br>
                    </td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
        <div class="pagination">
            <?=$pagination;?>
        </div>

    </div>
    </div>
    <script type="text/javascript">
        $('tbody').sortable({
            'update': function(event, ui) {
                var order = $(this).sortable('serialize');
                $.ajax({
                    type: 'POST',
                    url: '/ajax/save_order',
                    data: order,
                    success: function(response) {
                        //console.log(response);
                    }
                })
            }
        })
    </script>