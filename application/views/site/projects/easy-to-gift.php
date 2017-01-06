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
    <title>Easy To Gift | COMPUTOOLS</title>
    <script src="<?=template_url('js');?>jquery-1.11.3.min.js"></script>
    <script src="<?=template_url('js');?>cases.js" type="text/javascript"></script>
</head>
<body id="easy" style="background-color: #000;">
<div class="modalLoad"><div id="logoLoad"></div></div>
<h1 style="display: none;">Design - Easy To Gift – Computools</h1><!--For SEO-->
<div id="caseSlide1" class="caseSlide page" style="background-color: #fff;  padding-top: 0;">
    <div class="easyBck">
        <?php require_once ($_SERVER['DOCUMENT_ROOT'].'/application/views/site/_header_menu.php');?>
    </div>
    <div class="align">
        <div class="caseContainer caseContainerEasy">
            <ul class="caseUl caseUlRdd">
                <li class="fade"><img src="<?=template_url('img');?>cases/2.png" alt="case image"/></li>
                <li class="imgFromLeft"><img src="<?=template_url('img');?>cases/man.png" alt="case image"/></li>
                <li class="imgFromRight"><img src="<?=template_url('img');?>cases/2.png" alt="case image"/></li>
            </ul>
        </div>
    </div>
</div>
<div id="caseSlide2" class="caseSlide page" style="background-color: #555658;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer caseContainerEasy">
            <div class="caseBigDescription" style="color: #b89f6d; text-align: center">It is specialized service for the complete cycle of giving gifts online.</div>
            <ul class="caseUl caseUlEasy">
                <li style="color: #fff">
                    <div class="caseBigDescription">The program includes the following possibilities:</div>
                    <ul class="caseUlSmall caseUlEasySmall" style="text-align: left;">
                        <li class="caseDescription">donate money online</li>
                        <li class="caseDescription">send congratulations</li>
                        <li class="caseDescription">add photos or greetings</li>
                    </ul>
                    <div class="easySmallText easyAlign" style="text-align: center">
                        The main goal of the web app is to give presents to the newlyweds.
                        Technically the idea was implemented using the Umbarco CMS and ASP.Net.
                        This application allows to select the day of the wedding of
                        newlyweds, to write greetings. You can also leave your private
                        data, and also send money just from the site.
                        Besides, there is a possibility to send a present at once, money
                        will be taken out during 6 months.
                    </div>
                </li>
                <li class="imgFromRight" style="text-align: right"><img src="<?=template_url('img');?>cases/Cinema-Display1.png" alt="case image"/></li>
            </ul>
        </div>
    </div>
</div>
<div id="caseSlide3" class="caseSlide page" style="background-color: #fff;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer caseContainerEasy">
            <div class="caseBigDescription" style="color: #555658;">
                CMS Umbarco work setting
            </div>
            <div class="caseDescription" style="color: #b89f6d;">
                To speed up the development process we worked out CMS Umbarco connection.
                This simplified the process of development expanding existing modules.
            </div>
            <img class="fade" src="<?=template_url('img');?>cases/Macbook---Open---Center2.png" alt="case image"/>
        </div>
    </div>
</div>
<div id="caseSlide4" class="caseSlide page" style="background-color: #fff;">
    <div class="backgroundDark"></div>
    <div class="caseSlideBackEasy imgFromRight"></div>
    <div class="align">
        <div class="caseContainer caseContainerEasy" style="color: #b89f6d; text-align: justify">
            <div class="caseBigDescription" style="color: #555658;">Creating mobile layout and cross-browser compatibility</div>
            <div class="hiddenImg"><img src="<?=template_url('img');?>cases/phon.png" alt="case image"/></div>
            <div class="caseDescription">To simplify the work with the site we made mobile responsive layout.
                The layout was made compatible for all screen extensions starting from
                the small screens of smartphones with a diagonal 4-inch screen, tablets,
                desktop PC and laptops.
                Optimization during the development process.</div>
            <div class="caseDescription">Cross-browser setting. All the pages were adapted to all major browsers -
                Chrome, Opera, Mozilla, Internet Explorer, Safari.</div>
            <div class="caseDescription">As result, the user got user-friendly interface and the full functionality of
                each page regardless of the device and the preferred browser.</div>
        </div>
    </div>
</div>
<div id="caseSlide5" class="caseSlide page" style="background-color: #fff;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer caseContainerEasy">
            <div class="caseBigDescription" style="color: #555658;">The payment system implementation</div>
            <ul class="caseUl caseUlRdd">
                <li class="imgFromLeft"><img src="<?=template_url('img');?>cases/pay_syst.png" alt="case image"/></li>
                <li style="text-align: right; color: #b89f6d;">
                    <div class="caseDescription">The main task in the congratulation is the ability to send a money gift.
                        To solve this problem, several payment systems have been added.
                    </div>
                    <div class="caseDescription">With the help of the payment system it is possible
                        to send a money gift to the card user.
                        Payment can be split into parts. In this case,
                        the commission will be automatically calculated
                        and the total amount to be withdrawn will be displayed.
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="caseSlide6" class="caseSlide page" style="background-color: #fff;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer caseContainerEasy">
            <div class="caseBigDescription" style="color: #555658;">Adding photos and videos</div>
            <ul class="caseUl caseUlRdd">
                <li style="text-align: left; color: #b89f6d;">
                    <div class="caseDescription">When writing greetings there is the option to load the cards or
                        make a photo / selfie or photo directly from your device.
                        To connect to the camera we worked with the API. Photos
                        can be made from any mobile device, regardless of operating system,
                        laptop camera or camera connected with desktop computers.
                    </div>
                </li>
                <li><img class="imgFromRight" src="<?=template_url('img');?>cases/phon1.png" alt="case image"/></li>
            </ul>
        </div>
    </div>
</div>
<div id="caseSlide6" class="caseSlide page" style="background-color: #555658;">
    <div class="backgroundDark"></div>
    <div class="caseContainer caseContainerEasy">
        <div class="caseBigDescription" style="color: #ffa100;">
            The result of a great development team work and excellent management was implemented
            on-line cash gifting system, which helped to speed up and simplify the procedure of giving
            gifts in the case when you have no opportunity to congratulate personally.
        </div>
        <ul class="caseUl caseUlEasyLast ">
        <li style="text-align: left">
            <div class="caseBigDescription" style="color: #b89f6d;">Technologies:</div>
            <ul class="caseUlSmall" style="color: #fff">
                <li class="caseDescription"><span style="color: #b89f6d;">Back-end: </span>C#, ASP.NET MVC.</li>
                <li class="caseDescription"><span style="color: #b89f6d;">DB: </span>MSSQL, ADO.NET, Entity framework, LINQ.</li>
                <li class="caseDescription"><span style="color: #b89f6d;">Front-end: </span>CSS3, HTML5, JavaScript, jQuery, Bootstrap, DataTable.</li>
            </ul>
        </li>
        <li class="imgFromRight"><img src="<?=template_url('img');?>cases/phone0.png" alt="case image"/></li>
        </ul>
    </div>
</div>
<div id="caseSlide7" class="contactFormBlockMain page" style="background-color: #145855;">
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
                    <input type="hidden" name="marker" value="http://computoolsglobal.com/case-studies/aspnet/easy-to-gift#caseSlide7">
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
<div id="caseSlide8" class="caseStudies pageLast" style="background-color: #fff;">
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
    <div style="display:inline;"><img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/922620963/?value=0&amp;guid=ON&amp;script=0"/></div>
</noscript>
</body>
</html>