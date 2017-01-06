<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?=template_url('css');?>main.min.css" rel="stylesheet">
    <link href="<?php echo template_url('css');?>media.min.css" rel="stylesheet">
    <link href="<?=template_url('css');?>feedback.min.css" rel="stylesheet">
    <link href="<?php echo template_url('css');?>css/font-awesome.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?=template_url('img');?>favicon.png" type="image/x-icon">
    <title>Feedback | COMPUTOOLS</title>
    <script src="<?=template_url('js');?>jquery-1.11.3.min.js"></script>
    <script src="<?=template_url('js');?>feedback.js" type="text/javascript"></script>
</head>
<body>
<div class="modalLoad"><div id="logoLoad"></div></div>
<div class="contentFeedback">
    <div class="headerContainerWidth"><div id="headerMainIndexPage" class="activeLinkMain"><?php include '_header_menu.php';?></div></div>
    <div class="alignFeedback"> 
        <div class="containerWidth containerWidthFeedback">
            <div class="contentFeedbackBack">
                <div>
                    <h2>Perfomance</h2>
                    <div class="grade">
                        <?php require '_freeFeedback-validation.php'; ?>
                        <form method="post" action="#modal-one">
                            <div class="gradeScal">
                                <input type="radio" class="radioCheck" name="perfomance" value="great">
                                <input type="radio" class="radioCheck" name="perfomance" value="good">
                                <input type="radio" class="radioCheck" name="perfomance" value="notGood">
                            </div>
                            <div class="customScal">
                                <div class="point">
                                    <img src="<?=template_url('img');?>/feedback/perfChecked.jpg" class="checked">
                                    <img src="<?=template_url('img');?>/feedback/perfUnchecked.jpg" class="unChecked">
                                    <span>great<span>
                                </div>
                                <div class="point">
                                    <img src="<?=template_url('img');?>/feedback/perfChecked.jpg" class="checked">
                                    <img src="<?=template_url('img');?>/feedback/perfUnchecked.jpg" class="unChecked">
                                    <span>good<span>
                                </div>
                                <div class="point">
                                    <img src="<?=template_url('img');?>/feedback/perfChecked.jpg" class="checked">
                                    <img src="<?=template_url('img');?>/feedback/perfUnchecked.jpg" class="unChecked">
                                    <span>not good<span>
                                </div>
                            </div>
                            <textarea type="text" name="comment" placeholder="Your comments" class="comment"></textarea>
                            <input type="hidden" name="marker" value="feedback">
                            <input type="submit" value="Send" class="send">
                        </form>
                        <div class="modal" id="modal-one" aria-hidden="true">
                            <div class="modal-dialog">
                                <img src="<?=template_url('img');?>logoSent.png">
                                <p>Thank You for your feedback!</p>
                                <a href="/" aria-hidden="true">×</a>
                                <p>It's very important for us!</p>
                                <a href="/" aria-hidden="true"><div class="okBtn">OK</div></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include '_footer_menu.php';?>
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
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
<noscript>
    <div style="display:inline;"><img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/922620963/?value=0&amp;guid=ON&amp;script=0"/></div>
</noscript>
</body>
</html>