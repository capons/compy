<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo template_url('css');?>main.min.css" rel="stylesheet">
    <link href="<?php echo template_url('css');?>media.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo template_url('img');?>favicon.png" type="image/x-icon">
    <title>Page not found - Computoolsglobal</title>
    <script src="<?php echo template_url('js');?>jquery-1.11.3.min.js"></script>
    <script src="<?php echo template_url('js');?>main.min.js" type="text/javascript"></script>
</head>
<body>
<div class="notFoundContent">
    <div class="notFoundContentAlign">
        <img src="<?=template_url('img');?>logo404.png"/>
        <div>Page Not Found</div>
        <div>Sorry, there's nothing here.<br/>Visit our <a href="/">front page</a></div>
    </div>
</div>
<?php include '_footer_menu.php';?>
<script>
    $('.notFoundContent').height($(window).height() - $('#footer').height() - 1);
</script>
<!-- Google Code for Remarketing Tag -->
<!--------------------------------------------------
Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
--------------------------------------------------->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 922620963;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/922620963/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-72776162-1', 'auto');
  ga('send', 'pageview');
</script>
    </body>
</html>
