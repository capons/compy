<script type="text/javascript" src="<?=template_url('js').'ckeditor/ckeditor.js';?>"></script>
<?php include '_cp_header_menu.php';?>

<div class="addContainer">
    <form method="POST" class="addPostForm" enctype="multipart/form-data">
        <h2>Add vacancy</h2>

        <p>Title</p>
        <input type="text" name="title" required placeholder="title">


        <p>Description</p>
        <input type="text" name="description" required placeholder="Description">

        <p>Requirements</p>

        <p>Who you are:</p>
        <textarea name="youAre" id="content_html"></textarea>

        <p>Will be the plus:</p>
        <textarea name="pluses" id="plus"></textarea>

        <p>BENEFITS</p>
        <textarea name="benefits" required></textarea>

        <p>toApply</p>
        <textarea name="toApply" required></textarea>

        <h3>Select technologies</h3>
        <select name="mailByTechnologyId">
        <option value="" selected></option>
        <?php foreach($mailByTechnology as $technology) :?>
            <option value="<?=$technology['id'];?>"><?=$technology['technology'];?></option>
        <?php endforeach;?>
        </select>

        <p>Please write alias to the url path(use only: A-Za-z, 0-9, +-/)</p>
        <input type="text" name="alias" id="alias" required pattern="[A-Za-z\s0-9-+/]{3,}">

        <br>
        <button type="submit">ADD JOB</button>

    </form>

</div>
<script type="text/javascript">
    CKEDITOR.replace('content_html');
</script>