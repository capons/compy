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
    <title>Scottsdale Cryo | COMPUTOOLS</title>
    <script src="<?=template_url('js');?>jquery-1.11.3.min.js"></script>
    <script src="<?=template_url('js');?>cases.js" type="text/javascript"></script>
</head>
<body id="scottsdale" style="background-color: #000;">
<div class="modalLoad"><div id="logoLoad"></div></div>
<h1 style="display: none;">Design - Scottsdale Cryo – Computools</h1><!--For SEO-->
<div id="caseSlide1" class="caseSlide page" style="padding-top: 0; background-color: #00569d;">
    <?php require_once ($_SERVER['DOCUMENT_ROOT'].'/application/views/site/_header_menu.php');?>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li>
                    <div class="bigTitle" style="color: #fff;">SCOTTSDALE CRYOTHERAPY</div>
                    <div class="caseDescription" style="text-align: center; color: #f38d00;">
                        The website, that provides information and subscriptions for cryotherapy cosmetic services.
                    </div>
                </li>
                <li class="imgFromRight" style="text-align: right">
                    <img src="<?=template_url('img');?>cases/sc_Cinema-Display3.png" alt="case image"/>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="caseSlide2" class="caseSlide page" style="background-color: #3488ce;">
    <div class="backgroundDark"></div>
    <div class="scBckgrnd imgFromLeft"></div>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li style="text-align: left;">
                    <div class="caseDescription" style="color: #f38d00;">Project goal:</div>
                    <div class="caseText" style="color: #fff;">Providing information on the services and the sale of these services.</div>
                    <div class="caseDescription" style="color: #f38d00;">Project task:</div>
                    <div class="caseText" style="color: #fff;">Creating the platform for the sale of corporate services.</div>
                </li>
            </ul>
            <div class="hiddenImg"><img src="<?=template_url('img');?>cases/sc_Macbook---Open---Left2.png" alt="case image"/></div>
        </div>
    </div>
</div>
<div id="caseSlide3" class="caseSlide page" style="background-color: #ebf0f4;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li style="text-align: left;">
                    <div class="caseDescription" style="color: #f38d00;">Task:</div>
                    <div class="caseText" style="color: #00569d;">Website layout.</div>
                    <div class="caseDescription" style="color: #f38d00;">Nuances:</div>
                    <div class="caseText" style="color: #00569d;">The website was developed on the CMS that uses templates according to the particular standard.</div>
                    <div class="caseDescription" style=" color: #f38d00;">Solution:</div>
                    <div class="caseText" style="color: #00569d;">The website layout was implemented in accordance with these standards.</div>
                </li>
                <li class="imgFromRight" style="text-align: right"><img src="<?=template_url('img');?>cases/sc_Macbook---Open---Center3.png" alt="case image"/></li>
            </ul>
        </div>
    </div>
</div>
<div id="caseSlide4" class="caseSlide page" style="background-color: #f38d00;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li class="imgFromLeft" style="text-align: left"><img src="<?=template_url('img');?>cases/sc_Macbook---Open---Left3.png" alt="case image"/></li>
                <li style="text-align: left;">
                    <div class="caseDescription" style="color: #00569d;">Task:</div>
                    <div class="caseText" style="color: #fff;">Installation and customizing the WooCommerce plug-in.</div>
                    <div class="caseDescription" style="color: #00569d;">Nuances:</div>
                    <div class="caseText" style="color: #fff;">The standard realization of the plug-in interface didn’t fit into the concept.</div>
                    <div class="caseDescription" style="color: #00569d;">Solution:</div>
                    <div class="caseText" style="color: #fff;">Plug-in style interface has been modified.</div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="caseSlide5" class="caseSlide page" style="background-color: #00569d;">
    <div class="backgroundDark"></div>
    <div class="scBckgrnd2 imgFromRight"></div>
    <div class="align">
        <div class="caseContainer">
            <div class="caseDescription" style="color: #f38d00; text-align: left;">Used technologies:</div>
            <ul class="caseUlSmall" style="color: #fff; text-align: left;">
                <li class="caseDescription"><span style="color: #f38d00;">Back-end: </span>PHP, СMS Wordpress.</li>
                <li class="caseDescription"><span style="color: #f38d00;">Front-end: </span>CSS3, HTML5, JavaScript, JQuery, Bootstrap.</li>
                <li class="caseDescription"><span style="color: #f38d00;">DataBase: </span>MMySql.</li>
            </ul>
            <div class="hiddenImg"><img src="<?=template_url('img');?>cases/sc_Macbook---Open---Right2.png" alt="case image"/></div>
        </div>
    </div>
</div>
<div id="caseSlide6"  class="contactFormBlockMain page" style="background-color: #5d9bce;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="containerWidth caseContainer">
            <h2 style="color: #00569d;">LET’S CREATE SOMETHING TRULY GREAT</h2>
            <?php require_once ($_SERVER['DOCUMENT_ROOT'].'/application/views/site/_freeQuote-validation.php');?>
            <!--            --><?php //require '/../_freeQuote-validation.php'; ?>
            <form method="post" action="#modal-one" enctype="multipart/form-data">
                <div class="contactForm bottom">
                    <input type="text" name="name" required placeholder="Name">
                    <input type="email" name="email" required placeholder="Email">
                    <input type="hidden" name="marker" value="http://computoolsglobal.com/case-studies/wordpress/scottsdale-cryo#caseSlide6">
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
<div id="caseSlide7" class="caseStudies  pageLast" style="background-color: #fff;">
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
                    <a href="http://computoolsglobal.com//case-studies/cpp/workplace-remote">
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