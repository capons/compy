<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?=template_url('css');?>main.min.css" rel="stylesheet">
    <link href="<?=template_url('css');?>main_parts.css" rel="stylesheet">
    <link href="<?=template_url('css');?>cases.min.css" rel="stylesheet">
    <link href="<?php echo template_url('css');?>media.min.css" rel="stylesheet">
    <link href="<?php echo template_url('css');?>css/font-awesome.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?=template_url('img');?>favicon.png" type="image/x-icon">
    <title>Quike Project | COMPUTOOLS</title>
    <script src="<?=template_url('js');?>jquery-1.11.3.min.js"></script>
    <script src="<?=template_url('js');?>cases.js" type="text/javascript"></script>
</head>
<body id="quike" style="background-color: #000;">
<div class="modalLoad"><div id="logoLoad"></div></div>
<h1 style="display: none;">Design - Quike Project – Computools</h1><!--For SEO-->
<div id="caseSlide1" class="caseSlide page" style="background-color: #680e9d; padding-top: 0; text-align: center;">
    <?php include '_header_menu.php';?>
    <div class="align">
        <div class="caseContainer caseContainerMain">
            <ul class="firstUl caseUl">
                <li>
                    <div class="bigTitle" style="color: #ebea08;">Quike</div>
                    <div class="caseDescription" style="color: #fff;">A platform that provides training program according to its complexity.</div>
                </li>
                <li class="imgFromRight"><img src="<?=template_url('img');?>cases/Macbook---Open---Center3.png" alt="case image"/></li>
            </ul>
        </div>
    </div>
</div>
<div id="caseSlide2" class="caseSlide page" style="background-color: #fff; padding-top: 0; text-align: center;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer caseContainerMain">
            <ul class="firstUl caseUl">
                <li class="imgFromLeft"><img src="<?=template_url('img');?>cases/ipad.png" alt="case image"/></li>
                <li  style="vertical-align: top; text-align: left;">
                    <div class="caseBigDescription" style="color: #680e9d; padding-bottom: 0;">Task:</div>
                    <div class="caseBigDescription" style="color: #25314a; padding: 0;">Providing the layout of the website.</div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="caseSlide3" class="caseSlide quikeBckgrnd page">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer" style="text-align: center;">
            <div class="caseBigDescription" style="color: #ebea08; padding: 0;">Nuances:</div>
            <div class="caseBigDescription quikeDescr" style="color: #fff; padding: 0;">
                The layout of the template for specific CMS and the layout of two templates for different screen resolutions.
            </div>
        </div>
    </div>
</div>
<div id="caseSlide4" class="caseSlide page" style="background-color: #fff;">
    <div class="backgroundDark"></div>
    <div class="quikeBckgrnd2"></div>
    <div class="align">
        <div class="caseContainer  caseContainerCitizen" style="text-align: left;">
            <div class="caseBigDescription quikeBigDescr" style="color: #680e9d; ">Solution:</div>
            <div class="caseDescription quikeDescrLeft" style="color: #313536; padding: 0;">
                The layout was done according to the standards of this CMS. Two separate templates were performed
                and they were connected depending on the device - the decision was proposed by the back-end developers.
            </div>
            <div class="hiddenImg"><img src="<?=template_url('img');?>cases/ipad1.png" alt=""/></div>
        </div>
    </div>
</div>
<div id="caseSlide5" class="caseSlide page" style="background-color: #680e9d; padding-top: 0; text-align: center;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer caseContainerMain caseContainerCitizen">
            <ul class="firstUl caseUl">
                <li style="vertical-align: top;">
                    <div class="caseBigDescription" style="color: #ebea08; padding-top: 0;">Stack of technologies:</div>
                    <ul class="caseUlSmall" style="color: #fff">
                        <li class="caseDescription"><span style="color: #ebea08;">Back-end: </span>PHP, CMS Woordpress.</li>
                        <li class="caseDescription"><span style="color: #ebea08;">Front-end: </span>CSS3, HTML5, JavaScript, JQuery, Bootstrap.</li>
                        <li class="caseDescription"><span style="color: #ebea08;">DataBase: </span>MSSQL.</li>
                        <li class="caseDescription"><span style="color: #ebea08;">Team: </span>3 members.</li>
                        <li class="caseDescription"><span style="color: #ebea08;">Duration: </span>5 months.</li>
                    </ul>
                </li>
                <li><img src="<?=template_url('img');?>cases/ipad-air-black.png" alt="case image"/></li>
            </ul>
        </div>
    </div>
</div>
<div id="caseSlide6" class="caseSlide page" style="background-color: #262c4a;">
    <div>
        <div class="backgroundDark"></div>
        <div class="quikeBckgrnd3"></div>
        <div class="align">
            <div class="caseContainer  caseContainerCitizen caseContainerLast">
                <div class="rightPosition">
                    <div class="caseBigDescription quikeBigDescr" style="color: #ebea08; ">Result:</div>
                    <div class="caseDescription quikeDescrLeft" style="color: #fff; padding: 0;">The result of the web team work was the development of the platform for fitness.</div>
                </div>
                <div class="hiddenImg"><img src="<?=template_url('img');?>cases/Macbook---Open---Left1.png" alt="case image"/></div>
            </div>
        </div>
    </div>
</div>
<div id="caseSlide7" class="contactFormBlockMain page" style="background-color: #145855;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="containerWidth caseContainer">
            <h2>Let’s create something truly great</h2>
            <?php require '_freeQuote-validation.php'; ?>
            <form method="post" action="#modal-one" enctype="multipart/form-data">
                <div class="contactForm bottom">
                    <input type="text" name="name" required placeholder="Name">
                    <input type="email" name="email" required placeholder="Email">
                    <input type="hidden" name="marker" value="http://computoolsglobal.com/case-studies/wordpress/quike-project#caseSlide7">
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
<div id="caseSlide8" class="caseStudies  pageLast" style="background-color: #fff;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="containerWidth caseContainer">
            <h2 class="fade" style="color: #1a6793;">Related Case Studies</h2>
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
                    <a href="http://computoolsglobal.com//case-studies/cpp/remote-desktop-driver">
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
            <a class="quote" href="/case-studies">See all Case Studies</a>
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
    <div style="display:inline;"><img height="1" width="1" style="border-style:none;" alt="pagead" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/922620963/?value=0&amp;guid=ON&amp;script=0"/></div>
</noscript>
</body>
</html>