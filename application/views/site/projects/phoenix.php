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
    <title>Phoenix | COMPUTOOLS</title>
    <script src="<?=template_url('js');?>jquery-1.11.3.min.js"></script>
    <script src="<?=template_url('js');?>cases.js" type="text/javascript"></script>
</head>
<body id="phoenix" style="background-color: #000;">
<div class="modalLoad"><div id="logoLoad"></div></div>
<h1 style="display: none;">Design - Phoenix – Computools</h1><!--For SEO-->
<div id="caseSlide1" class="caseSlide page" style="background-color: #4b2b4c; text-align: right;">
    <?php require_once ($_SERVER['DOCUMENT_ROOT'].'/application/views/site/_header_menu.php');?>
    <div class="align">
        <div class="caseContainer caseContainerMda">
            <ul class="caseUl caseUlRdd">
                <li class="imgFromLeft"><img src="<?=template_url('img');?>cases/phoenix/phoenix_img1.png" alt="case image"/></li>
                <li>
                    <div class="caseText mainTitle caseTitle" style="color: #a9b7df;">Phoenix</div>
                    <div class="caseText" style="color: #fff;">
                        It is the CRM system which allows organizing the work of staff as efficiently as possible in the following steps: initially, it evaluates the work of the company employees, and depending on the evaluation you can give them the tasks and then estimate the performance of tasks presenting the obtained data in the form of graphs and schemes.
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="caseSlide2" class="caseSlide page" style="background-color: #a9b7df; padding-top: 0; text-align: center;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer caseContainerMain caseContainerMda">
            <ul class="firstUl caseUl caseUlRdd">
                <li>
                    <div class="caseDescriptionTitle" style="color: #183669;">Project Features</div>
                    <div class="caseDescription" style="color: #4b2b4c;">Assessment of the employees' opportunities, their rights, and roles in the project.</div>
                </li>
                <li class="imgFromRight"><img src="<?=template_url('img');?>cases/phoenix/phoenix_img2.png" alt="case image"/></li>
            </ul>
        </div>
    </div>
</div>
<div id="caseSlide3" class="caseSlide page" style="background-color: #f5f5f5; text-align: right;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer caseContainerMda">
            <ul class="caseUl caseUlRdd">
                <li class="imgFromLeft"><img src="<?=template_url('img');?>cases/phoenix/phoenix_img3.png" alt="case image"/></li>
                <li>
                    <div class="caseTextTitle" style="color: #4b2b4c;">Project Challenges</div>
                    <div class="caseText" style="color: #183669;">
                        We've faced such challenges as analysis of the user roles work, in some cases, the correction of the access levels. Correction and addition of the fields for entering the required information, and the subsequent restructuring of the graphics according to the changes have been made.
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="caseSlide5" class="caseSlide page" style="background-color: #a9b7df; text-align: left;">
    <div class="caseSlideBackLeft fade">
        <div class="backgroundDark"></div>
        <div class="align">
            <div class="caseContainer caseContainerMda">
                <div class="caseDescription">
                    <div class="caseText" style="color: #4b2b4c;">
                        <div class="caseTextTitle" style="color: #183669;">Industry Focus</div>The companies need it as well as any CRM system.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="caseSlide4" class="caseSlide page" style="background-color: #183669; text-align: left;">
    <div class="caseSlideBackRight fade">
        <div class="backgroundDark"></div>
        <div class="align">
            <div class="caseContainer caseContainerMda">
                <div class="caseDescription">
                    <div class="caseTextTitle" style="color: #a9b7df;">Project Technology</div>
                    <div class="caseText" style="color: #f5f5f5;">
                        The project was written earlier - we've just
                        expanded it and provided the support of the project.
                        Codeigniter - the lightweight PHP framework,
                        MySQL - Database were used.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="caseSlide6" class="contactFormBlockMain page" style="background-color: #4b2b4c;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="containerWidth caseContainer">
            <h2 style="color: #fff;">LET’S CREATE SOMETHING TRULY GREAT</h2>
            <?php require_once ($_SERVER['DOCUMENT_ROOT'].'/application/views/site/_freeQuote-validation.php');?>
            <!--            --><?php //require '/../_freeQuote-validation.php'; ?>
            <form method="post" action="#modal-one" enctype="multipart/form-data">
                <div class="contactForm bottom">
                    <input type="text" name="name" required placeholder="Name">
                    <input type="email" name="email" required placeholder="Email">
                    <input type="hidden" name="marker" value="http://computoolsglobal.com/case-studies/php/phoenix#caseSlide6">
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
<div id="caseSlide7" class="caseStudies pageLast" style="background-color: #fff;">
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