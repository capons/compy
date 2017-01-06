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

        <h2>Jobs</h2>
        <a href="/cp/add_job"><div class="button">Add</div></a>

        <table class="cpBlogTable" cellpadding="5" cellspacing="0">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Who you are</th>
                <th>Benefits</th>
                <th>Create date</th>
                <th>Update date</th>
                <th></th>
            </tr>
            <tbody>
                <?php foreach($vacancies as $vacancy) :?>
                    <tr id="work-<?=$vacancy['id'];?>">
                        <td><?=$vacancy['id'];?></td>
                        <td><?=$vacancy['title'];?></td>
                        <td><?=$vacancy['description'];?></td>
                        <td><?=$vacancy['requirements'];?></td>
                        <td><?=$vacancy['benefits'];?></td>
                        <td><?=date('d.m.Y H:i:s',strtotime($vacancy['create_date']));?></td>
                        <td><?=date('d.m.Y H:i:s',strtotime($vacancy['update_date']));?></td>
                        <td>
                            <a href="/cp/edit_job/<?=$vacancy['id'];?>">
                                <img src="<?=template_url('img');?>edit_blue.png" alt=""/>
                            </a>
                        </td>
                        <td>
                            <a href="/cp/delete_job/<?=$vacancy['id'];?>">
                                <img src="<?=template_url('img');?>delete_blue.png" alt=""/>
                            </a><br>
                        </td>
                    </tr>
                <?php endforeach;?>

            </tbody>
        </table>


    </div>
</div>