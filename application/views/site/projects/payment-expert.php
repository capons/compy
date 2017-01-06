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
    <title>Payment Expert | COMPUTOOLS</title>
    <script src="<?=template_url('js');?>jquery-1.11.3.min.js"></script>
    <script src="<?=template_url('js');?>cases.js" type="text/javascript"></script>
</head>
<body id="payment">
<div class="modalLoad"><div id="logoLoad"></div></div>
<h1 style="display: none;">Design - Payment Expert – Computools</h1><!--For SEO-->

<div id="caseSlide1" class="caseSlide page" style="padding-top: 0; background-color: #3ca03f;">
    <?php require_once ($_SERVER['DOCUMENT_ROOT'].'/application/views/site/_header_menu.php');?>
    <div class="payBack1"></div>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li>
                    <div>
                        <img class="overImg" src="<?=template_url('img');?>cases/payment/iPhone-6.png" alt="case image"/>
                        <img class="imgFromLeft" src="<?=template_url('img');?>cases/payment/Samsung-Galaxy.png" alt="case image"/>
                    </div>
                </li>
                <li class="payTitle">Payment Expert</li>
            </ul>
        </div>
    </div>
</div>

<div id="caseSlide2" class="caseSlide payBack2 page">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li>
                    <div class="caseBigDescription">Project Description</div>
                    <div class="caseText">It is a service, or rather the project that belongs to the category of IOT (Internet Of Things).
                        The purpose of this application is to help the end users to save a lot of time, as they do not
                        need to open the cash desk for immediate checking the actual amount of money. Instead, the
                        application automatically reads the data from a device using Bluetooth technology, and provides
                        the end users with the data in a convenient format, automatically creates and sends the bank
                        statements, but most importantly, it warns the administration of stores or cash collectors about
                        the suspicious activity of cash desk in order to prevent the unwanted loss of money or break-ins.</div>
                </li>
                <li></li>
            </ul>
        </div>
    </div>
</div>

<div id="caseSlide3" class="caseSlide page" style="background-color: #89c189;">
    <div class="currency euro"></div>
    <div class="currency pound"></div>
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li class="imgFromLeft"><img src="<?=template_url('img');?>cases/payment/pe2.png" alt="case image"/></li>
                <li>
                    <div class="caseBigDescription">Project Features</div>
                    <ul class="caseUlSmall caseText">
                        <li>Ability to view the data of the current cash desk in a convenient format: the total amount of money,
                            the denomination type and its multiplier (for the current bank bag), etc;</li>
                        <li>Ability to view the history of the previous cash desk data (the aforementioned information);</li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>

<div id="caseSlide4" class="caseSlide page" style="background-color: #242a31;">
    <div class="currency dollar"></div>
    <div class="currency yen"></div>
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li>
                    <ul class="caseUlSmall caseText">
                        <li>Finding the extracted bank bags and forming the bank
                            reports based on the received data;</li>
                        <li>Warning about the suspicious cash activity to prevent
                            the theft made by the store employees;</li>
                    </ul>
                </li>
                <li class="imgFromRight"><img src="<?=template_url('img');?>cases/payment/pe3.png" alt="case image"/></li>
            </ul>
        </div>
    </div>
</div>

<div id="caseSlide5" class="caseSlide page" style="background-color: #89c189;">
    <div class="currency cent"></div>
    <div class="currency pound"></div>
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li class="imgFromLeft"><img src="<?=template_url('img');?>cases/payment/pe4.png" alt="case image"/></li>
                <li>
                    <ul class="caseUlSmall caseText">
                        <li>In the application context, to manage the devices (cash desks) by means of Bluetooth,
                            rename and do other operations, without having to go into the settings of Bluetooth;</li>
                        <li>The application access protection with the help of the pin code protection;</li>
                        <li>Apps Sync with Web-Service for the access control of the current user.</li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>

<div id="caseSlide6" class="caseSlide page payBack3">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li>
                    <img class="imgFromLeft firstTel" src="<?=template_url('img');?>cases/payment/botton-2_4.png" alt="case image"/>
                    <img class="imgFromLeft secondTel" src="<?=template_url('img');?>cases/payment/botton-3_4.png" alt="case image"/>
                    <img class="imgFromLeft thirdTel" src="<?=template_url('img');?>cases/payment/Front1.png" alt="case image"/>
                </li>
                <li>
                    <div class="caseBigDescription">Project Challenges</div>
                    <ul class="caseUlSmall caseText">
                        <li>Low-level protocol of communication with the devices implementation;</li>
                        <li>Continuous Apps Sync with Web-Service to control the access rights to the application.</li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>

<div id="caseSlide7" class="caseSlide payBack5 page" style="background-color: #3ca03f;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li>
                    <div class="caseBigDescription">Project Solution</div>
                    <ul class="caseUlSmall caseText">
                        <li>Getting the maximum abstraction of a low-level protocol, so now it is possible to quickly
                            and conveniently receive the human-readable data.
                        </li>
                        <li>Acceleration of data acquisition through the introduction of multi-threading into the system.</li>
                        <li>Optimization of data acquisition in a way that it is not necessary to update all the data
                            over and over again but just only those data that can actually be updated has increased the
                            application performance by 4 times.
                        </li>
                        <li>An intelligent system of work with the data storage was written, so the application works
                            efficiently with the data saving them into memory when the application runs in the background,
                            thereby reducing the number of database requests, and saving the data in case of need to
                            restore them in the following sessions.
                        </li>
                    </ul>
                </li>
                <li class="imgFromRight"><img src="<?=template_url('img');?>cases/payment/pe6.png" alt="case image"/></li>
            </ul>
        </div>
    </div>
</div>
<div id="caseSlide8" class="caseSlide payBack4 page">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li></li>
                <li>
                    <div class="caseBigDescription">Project Technology</div>
                    <ul class="caseUlSmall caseText">
                        <li>C# (CSharp)</li>
                        <li>Xamarin.Android</li>
                        <li>Xamarin.Forms</li>
                        <li>iTextSharp</li>
                        <li>Sqlite Orm</li>
                        <li>RestSharp</li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</div>
<div id="caseSlide9" class="contactFormBlockMain page" style="background-color: #1f2429;">
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
                    <input type="hidden" name="marker" value="main-bottom">
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
<div id="caseSlide10" class="caseStudies  pageLast" style="background-color: #fff;">
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
<!--<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>-->
<noscript>
    <div style="display:inline;"><img height="1" width="1" style="border-style:none;" alt="pagead" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/922620963/?value=0&amp;guid=ON&amp;script=0"/></div>
</noscript>
</body>
</html>