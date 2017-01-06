<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo template_url('img');?>favicon.png" type="image/x-icon">
    <title>Page not found - Computoolsglobal</title>
    <script src="<?php echo template_url('js');?>jquery-1.11.3.min.js"></script>
    <link href="<?php echo template_url('css');?>main.min.css" rel="stylesheet">
    <link href="<?php echo template_url('css');?>media.min.css" rel="stylesheet">
</head>
<body>
<div class="notFoundContent">
    <div class="notFoundContentAlign">
        <img src="<?=template_url('img');?>logo404.png"/>
        <div>Page Not Found</div>
        <div>Sorry, there's nothing here.<br/>Visit our front page</div>
    </div>
</div>
<?php include '_footer_menu.php';?>
<script>$('.notFoundContent').height($(window).height() - $('#footer').height() - 1);</script>
</body>
</html>