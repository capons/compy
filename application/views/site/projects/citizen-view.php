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
    <title>Citizen View | COMPUTOOLS</title>
    <script src="<?=template_url('js');?>jquery-1.11.3.min.js"></script>
    <script src="<?=template_url('js');?>cases.js" type="text/javascript"></script>
</head>
<body id="citizen" style="background-color: #000;">
<div class="modalLoad"><div id="logoLoad"></div></div>
<h1 style="display: none;">Design - Citizen View – Computools</h1><!--For SEO-->
<div id="caseSlide1" class="caseSlide page citizenBckgrnd" style="padding-top: 0;">
    <div class="citizenBck">
        <?php require_once ($_SERVER['DOCUMENT_ROOT'].'/application/views/site/_header_menu.php');?>
    </div>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li style="color: #000;">
                    <div class="bigTitle">CitizenView</div>
                    <div class="caseDescription" style="text-align: center; color: #4e4f4f;">Federal project to create the database of CCTV cameras.</div>
                </li>
                <li class="imgFromRight" style="text-align: right"><img src="<?=template_url('img');?>cases/phon2.png" alt="case image"/></li>
            </ul>
        </div>
    </div>
</div>
<div id="caseSlide2" class="caseSlide page" style="background-color: #fff;">
        <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li class="imgFromLeft" style="text-align: left;"><img src="<?=template_url('img');?>cases/pad.png" alt="case image"/></li>
                <li class="citizenAlignLeft" style="color: #4e4f4f; text-align: left;">
                    <div class="caseDescription">
                        <span class="caseBigDescription" style="color: #000;">CitizenView</span> is a web portal with
                        marked on the Google map installed cameras for outside and inside observation. Camera data
                        are available to the authorized authority. The owner of surveillance cameras manages the
                        cameras using the administrative panel and submits relevant data about updates.
                    </div>
                    <div class="caseDescription">
                        <span class="caseBigDescription" style="color: #000;">Project goal:</span> The creation of CCTV camera system to speed up the investigation of accidents.
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="caseSlide3" class="caseSlide page" style="background-color: #fff;">
        <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd caseUlCitizen">
                <li style="color: #4e4f4f;">
                    <div class="caseBigDescription" style="color: #000; text-align: left;">Task: Mobile layout setting</div>
                    <div class="caseDescription" style="text-align: left;">
                        Responsive and mobile layout were implemented with the help of CSS3 and HTML5.
                        Responsive design was also carried out for the main pages and for pages for administrative part
                        of the site. Objects on the pages are located in the most intuitive way to save time when working
                        with the application.
                    </div>
                </li>
                <li class="imgFromRight"><img src="<?=template_url('img');?>cases/phone4.png" alt="case image"/></li>
            </ul>
        </div>
    </div>
</div>
<div id="caseSlide4" class="caseSlide page" style="background-color: #fff;">
        <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li class="imgFromLeft" style="text-align: left;"><img src="<?=template_url('img');?>cases/Cinema-Display2.png" alt="case image"/></li>
                <li class="citizenAlignLeft" style="color: #4e4f4f; vertical-align: top;">
                    <div class="caseBigDescription" style="color: #000; text-align: left;">Task: Work with Google maps API.</div>
                    <div class="caseDescription" style="text-align: left;">
                        Google maps were selected for the visually familiar interface. On the map, it is possible to place
                        the camera.
                        The search was implemented through the Google maps API. The integrated search
                        is facilitated by the process of selecting cameras in the desired region. Also, camera selection
                        filter was realized.
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="caseSlide5" class="caseSlide page" style="background-color: #fff;">
        <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer caseContainerCitizen">
            <div class="caseBigDescription" style="color: #000; text-align: left;">Task: Cameras configuration and alert to the client (notification via SMS)</div>
            <div class="caseDescription" style="text-align: left; color: #4e4f4f;">
                For greater mobility, the interface with the owner of the camera is realized. For communication,
                you can use mailing to the registered email, call the number or request a video.
            </div>
            <img class="imgFromLeft" src="<?=template_url('img');?>cases/layerwidth.png" alt="case image"/>
        </div>
    </div>
</div>
<div id="caseSlide6" class="caseSlide page citizenBckgrnd2" style="background-color: #fff;">
        <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer caseContainerCitizen">
            <div class="caseBigDescription" style="color: #000; text-align: left">Example: </div>
            <div class="caseDescription" style="text-align: left; color: #4e4f4f;">
                In the case of an accident, a detective must get a list of cameras from a certain district. For
                these actions detective notes on the map the scene, indicates the region and receives a list of
                cameras with data about the cameras and their owners. There is a possibility to contact the
                owners of cameras, to request the video, to mail the owners.
            </div>
        </div>
    </div>
</div>
<div id="caseSlide7" class="caseSlide page caseSlideLast" style="background-color: #000;">
        <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer caseContainerCitizen">
            <div class="caseDescription caseDescriptionBtm" style="text-align: center; color: #fff;">
                The result of great development team work was the creation of management system for easy
                access to maps with marked cameras and quick access to the camera owners to speed up the
                time required to obtain materials from surveillance cameras.
            </div>
            <div class="caseDescription" style="color: #777777; text-align: left;">Technologies:</div>
            <ul class="caseUlSmall" style="color: #fff; text-align: left;">
                <li class="caseDescription"><span style="color: #d2d2d1;">Back-end: </span>PHP, Symfony2 Framework, Doctrine Orm.</li>
                <li class="caseDescription"><span style="color: #d2d2d1;">DB: </span>MySql, PhpMyAdmin, Doctrine Orm.</li>
                <li class="caseDescription"><span style="color: #d2d2d1;">Front-end: </span>CSS3, HTML5, JavaScript, jQuery, jQuery UI, Google maps API.</li>
            </ul>
        </div>
    </div>
</div>
<div id="caseSlide8" class="contactFormBlockMain page" style="background-color: #145855;">
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
                    <input type="hidden" name="marker" value="http://computoolsglobal.com/case-studies/php/citizen-view#caseSlide8">
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
<div id="caseSlide9" class="caseStudies  pageLast" style="background-color: #fff;">
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