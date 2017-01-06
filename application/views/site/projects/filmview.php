<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?=template_url('css');?>main.css" rel="stylesheet">
    <link href="<?=template_url('css');?>animateStyles.css" rel="stylesheet">
    <link href="<?php echo template_url('css');?>media.css" rel="stylesheet">
    <link href="<?php echo template_url('css');?>css/font-awesome.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?=template_url('img');?>favicon.png" type="image/x-icon">
    <link href="<?php echo template_url('css');?>cases.css" rel="stylesheet">
    <title>Filmview Player | COMPUTOOLS</title>
    <script src="<?=template_url('js');?>jquery-1.11.3.min.js"></script>
    <script src="<?=template_url('js');?>cases.js" type="text/javascript"></script>
</head>
<body id="filmview">
<div class="modalLoad"><div id="logoLoad"></div></div>
<h1 style="display: none;">Design - Filmview Player – Computools</h1><!--For SEO-->
<div id="caseSlide1" class="caseSlide page" style="z-index: 99;">
    <div class="containerWidth">
        <div id="headerMainIndexPage">
            <?php require_once ($_SERVER['DOCUMENT_ROOT'].'/application/views/site/_header_menu.php');?>
        </div>
    </div>
    <div class="align">
        <div class="caseContainer">
            <div class="case-text">
                <p class="title">FILMVIEW PLAYER</p>
            </div>
        </div>
    </div>
    <img class="imgFromBottom" src="<?=template_url('img');?>/cases/filmview/2-Macbook---top-views.png" alt="case image"/>
</div>
<div id="caseSlide2" class="caseSlide page" style="z-index: 97;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer">
           <div class="case-text" style="left: 0; text-align: left;">
                <p class="caseBigDescription" style="color:#fff">Project Purpose:</p>
                <p class="caseDescription" style="color:#2c3a96">To provide users with the ability to view the video materials of artistic and documentary character online based on the available quotas or after the payment (by the end of the quota).</p>
            </div>
            <img class="imgFromRight" src="<?=template_url('img');?>/cases/filmview/video-3.png" style="float: right; margin-right: 3%;" alt="case image"/>
        </div>
    </div>
</div>

<div id="caseSlide3" class="caseSlide page" style="z-index: 98;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer">
            <div class="case-text" style="left: 50%; text-align: left;">
                <p class="caseBigDescription" style="color:#f8e71c">Project Tasks:</p>
                <p class="caseDescription" style="color:#fff">to design a local data store, data transmission from the remote site format; to design the resource authentication system that transfers data;</p>
                <p class="caseDescription" style="color:#fff">to implement the authentication of resource that transfers data by means of an encrypted key, and the permissible IP-address pool;</p>
                <p class="caseDescription" style="color:#fff">to implement api for local storage of the film data with the possibility of single / bulk editing in order to accelerate the work of the resource;</p>
                <p class="caseDescription" style="color:#fff">to implement the methods of obtaining data from the storage with the possibility of limits setting and sorting;</p>
                <p class="caseDescription" style="color:#fff">to implement the error handling and recovery system in a data format or the authentication format.</p>
            </div>
            <img class="imgFromLeft" src="<?=template_url('img');?>/cases/filmview/video2.png" style="float: left; margin-left: 3%;" alt="case image"/>
        </div>
    </div>
</div>
<div id="caseSlide4" class="caseSlide page" style="z-index: 95;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer">
            <div class="case-text" style="left: 0; text-align: left;">
                <p class="caseBigDescription" style="color:#fff">Project Challenges:</p>
                <p class="caseDescription" style="color:#7d2dbc">To increase the security of transmitted data, it was given the task to introduce the system of tokens transmission not in the request headers but in its body.</p>
                <p class="caseBigDescription" style="color:#fff">Project Solution:</p>
                <p class="caseDescription" style="color:#7d2dbc">The request format, and the tokens processing were developed.</p>
            </div>
            <img class="imgFromRight" src="<?=template_url('img');?>/cases/filmview/MBP_angled-left.png" style="float: right; margin-right: 3%;" alt="case image"/>
        </div>
    </div>
</div>
<div id="caseSlide5" class="caseSlide page" style="z-index: 95;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer">
            <div class="case-text" style="left: 0; text-align: center;">
                <p class="caseBigDescription" style="color:#fff">Project Technology:</p>
                <p class="caseDescription" style="color:#f5a623">the server part: Node.js (ECMAScript 6) (frameworks and body-parser, express, mongoose, babel, jade libraries).</p>
                <p class="caseDescription" style="color:#f5a623">the client part: HTML5, CSS3, javascript (frameworks and jQuery, React.js libraries).</p>
            </div>
        </div>
    </div>
</div>
<div id="caseSlide6" class="contactFormBlockMain page" style="background-color: #2c3a96;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="containerWidth caseContainer">
            <h2>LET’S CREATE SOMETHING TRULY GREAT</h2>
            <?php require_once ($_SERVER['DOCUMENT_ROOT'].'/application/views/site/_freeQuote-validation.php');?>
            <!--            --><?php //require '/../_freeQuote-validation.php'; ?>
            <form method="post" action="#modal-one" enctype="multipart/form-data">
                <div class="contactForm bottom">
                    <input type="text" name="name" required placeholder="Name">
                    <input type="email" name="email" required placeholder="Email">
                    <input type="hidden" name="marker" value="http://computoolsglobal.com/case-studies/wordpress/build-a-head#caseSlide8">
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
<div id="caseSlide6" class="caseStudies pageLast" style="background-color: #fff;">
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