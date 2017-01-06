<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?=template_url('css');?>main.css" rel="stylesheet">
    <link href="<?=template_url('css');?>animateStyles.css" rel="stylesheet">
    <link href="<?=template_url('css');?>cases.css" rel="stylesheet">
    <link href="<?php echo template_url('css');?>media.css" rel="stylesheet">
    <link href="<?php echo template_url('css');?>css/font-awesome.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?=template_url('img');?>favicon.png" type="image/x-icon">
    <title>Modzi | COMPUTOOLS</title>
    <script src="<?=template_url('js');?>jquery-1.11.3.min.js"></script>
    <script src="<?=template_url('js');?>cases.js" type="text/javascript"></script>
</head>
<body id="cents" style="background-color: #000;">
<div class="modalLoad"><div id="logoLoad"></div></div>
<h1 style="display: none;">Design - Modzi – Computools</h1><!--For SEO-->
<div id="caseSlide1" class="caseSlide page" style="padding-top: 0;">
    <?php require_once ($_SERVER['DOCUMENT_ROOT'].'/application/views/site/_header_menu.php');?>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li class="imgFromLeft"><img src="<?=template_url('img');?>cases/centsfactory/apple-cinema-display.png" alt="case image"/></li>
                <li>
                    <div class="bigTitle" style="color: #f5a623;">MODZI</div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="caseSlide2" class="caseSlide page" style="background-color: #f5a623;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li style="text-align: left;">
                    <div class="caseDescription" style="color: #fff;">Project Description:</div>
                    <div class="caseText" style="color: #2c3a96;">It is the business card site of the Modzi company, which allows customers finding out
                        the information about the company and directions of the provided IT services,
                        viewing the details of each project that has been implemented by the Modzi workers.
                        Also, on the site you are able to contact with the representatives of the company and discuss all the issues related to the project order.</div>
                    <div class="caseDescription" style="color: #fff;">Project Features:</div>
                    <div class="caseText" style="color: #2c3a96;">
                        <ul class="caseUlSmallCents">
                            <li>opportunity to get acquainted with the biography of the company's employees work;</li>
                            <li>possibility to assess the company's portfolio;</li>
                            <li>user-friendly interface for passing to the pages with the detailed description of each project from the portfolio;</li>
                            <li>when creating the design of the site, the parallax effect which makes the image livelier was used;</li>
                            <li>site synchronization with Facebook,Twitter, Instagram profiles;</li>
                            <li>opportunity to contact with the company's representatives.</li>
                        </ul>
                    </div>
                </li>
                <li class="imgFromRight" style="text-align: right"><img src="<?=template_url('img');?>cases/centsfactory/3pro.png" alt="case image"/></li>
            </ul>
        </div>
    </div>
</div>
<div id="caseSlide3" class="caseSlide page" style="background-color: #43a047;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li class="imgFromLeft" style="text-align: right"><img src="<?=template_url('img');?>cases/centsfactory/1pro.png" alt="case image"/></li>
                <li style="text-align: left;">
                    <div class="caseDescription" style="color: #f5a623;">Project Challenges:</div>
                    <div class="caseText" style="color: #fff;"> - a сonflict of the libraries when using Parallax.js on the portfolio page, which led to the disappearance of certain graphic elements of the page.</div>
                    <div class="caseDescription" style="color: #f5a623;">Project Solution:</div>
                    <div class="caseText" style="color: #fff;"> - a special processing program that has limited the spread of the parallax effect only on some elements without touching the elements that work with the conflicting library was added.</div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="caseSlide4" class="caseSlide page" style="background-color: #009789;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li>
                    <div class="caseDescription" style="color: #fff;">Project Technology:</div>
                    <div class="caseText" style="color: #7d2dbc;">
                        <ul class="caseUlSmallCents">
                            <li>-	Node.js + Express;</li>
                            <li>-	jQuery;</li>
                            <li>-	JavaScript;</li>
                            <li>-	HTML5;</li>
                            <li>-	CSS3;</li>
                            <li>-	Jade;</li>
                            <li>-	Stylus;</li>
                            <li>-	AJAX;</li>
                            <li>-	Parallax.</li>
                        </ul>
                    </div>
                </li>
                <li class="imgFromRight"><img src="<?=template_url('img');?>cases/centsfactory/cent.png" alt="case image"/></li>
            </ul>
        </div>
    </div>
</div>
<div id="caseSlide5"  class="contactFormBlockMain page" style="background-color: #22984c;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="containerWidth caseContainer">
            <h2 style="color: #efefef;">LET’S CREATE SOMETHING TRULY GREAT</h2>
            <?php require_once ($_SERVER['DOCUMENT_ROOT'].'/application/views/site/_freeQuote-validation.php');?>
            <!--            --><?php //require '/../_freeQuote-validation.php'; ?>
            <form method="post" action="#modal-one" enctype="multipart/form-data">
                <div class="contactForm bottom">
                    <input type="text" name="name" required placeholder="Name">
                    <input type="email" name="email" required placeholder="Email">
                    <input type="hidden" name="marker" value="http://computoolsglobal.com/case-studies/php/csca#caseSlide9">
                    <input type="file" name="attachments" class="attachFiles">
                    <textarea name="idea" required placeholder="Your task/idea"></textarea>
                    <div class="attachments bottom">
                        <div class="icon"><i class="fa fa-paperclip"></i></div>
                        <div class="attachFileName">Attach a file</div>
                    </div>
                </div>
                <input type="submit" class="quote" value="GET A FREE QUOTE">
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
<div id="caseSlide6" class="caseStudies  pageLast" style="background-color: #efefef;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="containerWidth caseContainer">
            <h2 class="fade" style="color: #1a6793;">RELATED CASE STUDIES</h2>
            <ul class="caseStudiesList">
                <li class="fade">
                    <a href="http://computoolsglobal.com/case-studies/aspnet/fda">
                    <div class="caseContent">
                        <div class="hover">
                            <div>
                                <div class="alignCase">
                                    <div>We worked on the development of application FDA Operator, the financial instrument
                                        intended for capital investment in deposit and securities.</div>
                                </div>
                            </div>
                        </div>
                        <img src="<?=template_url('img');?>case3.jpg" alt="FDA - Case Computools"/>
                    </div>
                    </a>
                </li>
                <li class="fade">
                    <a href="http://computoolsglobal.com/case-studies/cpp/workplace-remote">
                        <div class="caseContent">
                            <div class="hover">
                                <div>
                                    <div class="alignCase">
                                        <div>RDD is the system for remote control of your applications on Windows, Mac and Linux using mobile devices.</div>
                                    </div>
                                </div>
                            </div>
                            <img src="<?=template_url('img');?>case4.jpg" alt="RDD - Case Computools"/>
                        </div>
                    </a>
                </li>
            </ul>
            <a class="quote" href="/case-studies">SEE ALL CASE STUDIES</a>
        </div>
    </div>
</div>
<?php require_once ($_SERVER['DOCUMENT_ROOT'].'/application/views/site/_footer_menu.php');?>
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
    <div style="display:inline;"><img height="1" width="1" style="border-style:none;" alt="pagead" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/922620963/?value=0&amp;guid=ON&amp;script=0"/></div>
</noscript>
</body>
</html>