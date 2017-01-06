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
    <title>ERP | COMPUTOOLS</title>
    <script src="<?=template_url('js');?>jquery-1.11.3.min.js"></script>
    <script src="<?=template_url('js');?>cases.js" type="text/javascript"></script>
</head>
<body id="erp" style="background-color: #27afff;">
<div class="modalLoad"><div id="logoLoad"></div></div>
<h1 style="display: none;">Design - ERP – Computools</h1><!--For SEO-->
<div id="caseSlide1" class="caseSlide page">
    <div class="fade">
        <?php require_once ($_SERVER['DOCUMENT_ROOT'].'/application/views/site/_header_menu.php');?>

        <div class="align">
            <div class="caseContainer">
                <ul class="caseUl caseUlRdd">
                    <li>
                        <div class="caseTitle" style="color: #fff;">Enterprise Resource Planning (ERP)</div>
                    </li>
                    <li>
                        <img class="fadeInRight" src="<?=template_url('img');?>cases/erp/erp_sl_1.png" alt="case image"/>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="caseSlide2" class="caseSlide page" style="text-align: right;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li class="imgFromLeft"><img src="<?=template_url('img');?>cases/erp/erp_sl_2.png" alt="case image"/></li>
                <li>
                    <div class="caseText">
                        <div class="itemTitle" style="color: #26aefc;">Project Description:</div>
                        <div class="itemText" style="color: #fff;">Our client was a large German auto parts seller. The client had realized the ERP system in the form of a Windows Form of the client’s applications with communication through a common database (MySQL). In a poorly scalable solution of the architecture and its low flexibility, the system would run slowly consuming a lot of resources. Some part of the customer’s requirements basically couldn’t be implemented, also because of the weak synchronization of the client’s applications which arose a lot of conflicts and it led to the errors in the database or deflection operations and the need to start it again.</div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="caseSlide3" class="caseSlide page" style="padding-top: 0; background-color: #fff;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li>
                    <div class="caseDescription" style="color: #4a4a4a;">
                        <div class="itemText">We have used the customer’s developments, implemented the client-server application on the basis of a light client architecture, thoroughly worked out the logic of the client, saving as Windows forms the core but adding the custom controls using WPF. We have replaced MySQL on more productive in this stack MSSQL. The server has been implemented as a web service (ASP.NET). On the server, the main logic of the application was realized and the load was optimized.</div>
                    </div>
                </li>
                <li class="imgFromRight">
                    <img src="<?=template_url('img');?>cases/erp/erp_sl_3.png" alt="case image"/>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="caseSlide4" class="caseSlide page" style="background-color: #2b9bfe;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li class="imgFromLeft">
                    <img src="<?=template_url('img');?>cases/erp/erp_sl_4.png" alt="case image"/>
                </li>
                <li>
                    <div class="caseDescription" style="color: #fff;">
                        <div class="itemText">
                            Due to the flexible architecture and endpoints (JSON), additional issues have been solved, one of which was the implementation of the customer’s portal and the online shop.
                            <br/>
                            Also, the Customer Support Portal has been developed in Java and implemented. It has been integrated with the client’s applications of the support department through the server.
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="caseSlide5" class="caseSlide page" style="padding-top: 0; background-color: #fff;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li>
                    <div class="caseDescription" style="color: #4a4a4a;">
                        <div class="itemText">Users can track the status of their purchases and get the fast and convenient link to the customer’s support department. As a part of the project, it has been implemented on the popular eCommerce CMS system and was integrated with the ERP module on Java (which provides a bi-directional flow of information and the integrity of the database of the online shop and the ERP system). Endpoints have been implemented to ensure the automation of shops, work with the mobile devices for reading bar codes, the API for working with the client’s applications necessary to the operation of the store.</div>
                    </div>
                </li>
                <li class="imgFromRight">
                    <img src="<?=template_url('img');?>cases/erp/erp_sl_5.png" alt="case image"/>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="caseSlide6" class="caseSlide page" style="background-color: #2b9bfe;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer caseContainerMain">
            <ul class="firstUl caseUl caseUlRdd">
                <li class="imgFromLeft">
                    <img src="<?=template_url('img');?>cases/erp/erp_sl_6.png" alt="case image"/>
                </li>
                <li>
                    <div class="caseDescription" style="color: #fff;">
                        <div class="itemText">These innovations helped to significantly increase the level of automation of business processes of the client. It is possible to optimize the personnel issue in some departments, as well as lower commission - partly to get away from the intermediaries, through the withdrawal of the sales of its own online store. And improve the service - providing the customers with a personal office and a convenient interface to the support department.</div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="caseSlide7" class="caseSlide page" style="background-color: #fff;">
    <div class="erp_bg_7"></div>
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer caseContainerMain">
            <ul class="firstUl caseUl caseUlRdd">
                <li class="caseText">
                    <div class="itemTitle">Used technologies:</div>
                    <div class="itemText">.Net/C#</div>
                    <div class="itemText">Wpf</div>
                    <div class="itemText">Mvc</div>
                    <div class="itemText">Wcf</div>
                    <div class="itemText">EF</div>
                    <div class="itemText">LINQ</div>
                    <div class="itemText">Unit test</div>
                    <div class="itemText">Windows Forms</div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="caseSlide8" class="contactFormBlockMain page" style="background-color: #0068ac;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="containerWidth caseContainer">
            <h2 style="color: #fff;">LET’S CREATE SOMETHING TRULY GREAT</h2>
            <?php require_once ($_SERVER['DOCUMENT_ROOT'].'/application/views/site/_freeQuote-validation.php');?>
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
<div id="caseSlide9" class="caseStudies pageLast" style="background-color: #fff;">
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