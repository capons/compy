<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo template_url('img');?>favicon.png" type="image/x-icon">
    <title>Case Studies - Android & IOS – Computools</title>
    <meta name="description" content="Computools is professional outsourcing and outstaffing web, desktop, mobile application development company with research and development centres in Ukraine.">
    <script src="<?php echo template_url('js');?>jquery-1.11.3.min.js"></script>
    <link href="<?php echo template_url('css');?>main.css" rel="stylesheet">
    <link href="<?php echo template_url('css');?>media.css" rel="stylesheet">
    <link href="<?php echo template_url('css');?>css/font-awesome.min.css" rel="stylesheet">
    <script src="<?php echo template_url('js');?>main.js" type="text/javascript"></script>
</head>
<body>
<div class="modalLoad"><div id="logoLoad"></div></div>
<div class=" caseStudies caseStudiesPage">
    <div class="headerContainerWidth">
        <div id="headerMainIndexPage" class="activeLinkMain"><?php include '_header_menu.php';?></div>
    </div>
    <?php include '_cases_menu.php';?>
</div>

<h1 style="display: none;">Case Studies - Android & IOS – Computools</h1><!--For SEO-->
<div class="caseStudies ">
    <div class="containerWidth">
        <ul class="caseStudiesList">
            <li>
                <a href="android-ios/payment-expert">
                    <div class="caseContent">
                        <div class="hover">
                            <div>
                                <div class="alignCase">
                                    <div>
                                        The purpose of this application is to help the end users to save a lot of time, as they do not
                                        need to open the cash desk for immediate checking the actual amount of money.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src="<?=template_url('img');?>case21.jpg" alt=""/>
                    </div>
                </a>
            </li>
            <li>
                <a href="android-ios/booking-system-for-restaurants">
                    <div class="caseContent">
                        <div class="hover">
                            <div>
                                <div class="alignCase">
                                    <div>
                                        It is the Android application that works according
                                        to the booking system type, and helps to get the information
                                        about the restaurants and other establishments which provide
                                        the opportunity to reserve a table, a menu in advance.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src="<?=template_url('img');?>case24.jpg" alt="Booking System For Restaurants - Case Computools"/>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</div>

<div id="form" class="contactFormBlockMain page pageLast">
    <div class="align">
        <div class="containerWidth">
            <h2>Let’s create something truly great</h2>
            <?php require '_freeQuote-validation.php'; ?>
            <form method="post" action="#modal-one" enctype="multipart/form-data">
                <div class="contactForm bottom">
                    <input type="text" name="name" required placeholder="Name">
                    <input type="email" name="email" required placeholder="Email">
                    <input type="hidden" name="marker" value="http://computoolsglobal.com/case-studies/android_ios#form">
                    <input type="file" name="attachments" class="attachFiles">
                    <textarea name="idea" required placeholder="Your task/idea"></textarea>
                    <div class="attachments bottom">
                        <div class="icon"><i class="fa fa-paperclip"></i></div>
                        <div class="attachFileName">Attach a file</div>
                    </div>
                </div>
                <input type="submit" class="quote" value="Get a free Quote">
            </form>
            <div class="modal" id="modal-one" aria-hidden="true">
                <div class="modal-dialog">
                    <img src="<?=template_url('img');?>logoSent.png" alt="Logo"/>
                    <p>Thank You!</p>
                    <a href="/" aria-hidden="true">×</a>
                    <p>Your message has been sent!</p>
                    <p>Computools managers contact you within 24 hours</p>
                    <a href="/" aria-hidden="true"><div class="okBtn">OK</div></a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include '_footer_menu.php';?>
<!-- Google Code for Remarketing Tag main -->
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
<noscript><div style="display:inline;"><img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/922620963/?value=0&amp;guid=ON&amp;script=0"/></div></noscript>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-72776162-1', 'auto');
    ga('send', 'pageview');

    $( document ).ready(function() {
        $('.attachments.top').on("click", function(){$('.top .attachFiles').click();});
        $('.top .attachFiles').change(function(e){$('.top .attachFileName').text($(this).val().split('\\').pop());});
        /*-----------------------------------------------------------------------*/
        $('.attachments.bottom').on("click", function(){$('.bottom .attachFiles').click();});
        $('.bottom .attachFiles').change(function(e){$('.bottom .attachFileName').text($(this).val().split('\\').pop());});
    });
</script>
</body>
</html>