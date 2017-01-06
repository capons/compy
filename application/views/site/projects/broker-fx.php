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
    <title>BROKER FX | COMPUTOOLS</title>
    <script src="<?=template_url('js');?>jquery-1.11.3.min.js"></script>
    <script src="<?=template_url('js');?>cases.js" type="text/javascript"></script>
</head>
<body id="brokerFX" style="background-color: #fff;">
<div class="modalLoad"><div id="logoLoad"></div></div>
<h1 style="display: none;">Design - BROKER FX – Computools</h1><!--For SEO-->
<div id="caseSlide1" class="caseSlide page">
    <div class="fade">
        <?php require_once ($_SERVER['DOCUMENT_ROOT'].'/application/views/site/_header_menu.php');?>

        <div class="backgroundImg"></div>

        <div class="align">
            <div class="caseContainer">
                <ul class="caseUl caseUlRdd">
                    <li class="fadeIn">
                        <div class="caseTitle" style="color: #fedd1e;">BROKER FX</div>
                    </li>
                    <li class="imgFromRight">
                        <img src="<?=template_url('img');?>cases/brokerFX/brokerFX_sl_1.png" alt="case image"/>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div id="caseSlide2" class="caseSlide page" style="padding-top: 0; background-color: #fff;">
<!--    <div class="backgroundDark"></div>-->

    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li>
                    <div class="caseDescription">
                        <div class="itemTitle">Project goal</div>
                        <div class="blueLine"></div>
                    </div>
                    <div class="caseDescription">
                        <div class="itemText" style="text-align: center;">Development of a system for the analysis and calculation of the buyers and shop owners economic activity, as well as the rebate of interest of each spent Dollar.</div>
                    </div>
                    <div class="caseDescription imgFromBottom">
                        <img src="<?=template_url('img');?>cases/brokerFX/brokerFX_sl_2.png" alt="case image"/>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

<div id="caseSlide3" class="caseSlide page" style="text-align: right; background-color: #fff;">
    <div class="backgroundDark"></div>
    <div class="backgroundImg"></div>

    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li>
                    <div class="caseDescription">
                        <div class="itemTitle">Project Features:</div>
                        <div class="blueLine"></div>
                    </div>
                    <div class="caseDescription">
                        <div class="itemText">A number of websites where you can get information on FX trading company, open live and/or demo account;</div>
                    </div>
                    <div class="caseDescription">
                        <div class="itemText">Regularly updated information on current situation at FX trading markets; Ability for users (FX company employees) to manage fresh, cold and hot leads using Pardot and Salesforce system set up as per the company specific requirements;</div>
                    </div>
                    <div class="caseDescription">
                        <div class="itemText">Ability to use country/language/region specific version of site – in progress Visitors can register and study using company education materials – in progress;</div>
                    </div>
                </li>
                <li class="imgFromRight">
                    <img src="<?=template_url('img');?>cases/brokerFX/brokerFX_sl_3.png" alt="case image"/>
                </li>
            </ul>
        </div>
    </div>
</div>

<div id="caseSlide4" class="caseSlide page" style="padding-top: 0; background-color: #fff;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li class="imgFromLeft"><img src="<?=template_url('img');?>cases/brokerFX/brokerFX_sl_4.png" alt="case image"/></li>
                <li>
                    <div class="caseText">
                        <div class="itemTitle">Project Challenges:</div>
                        <div class="blueLine"></div>
                    </div>
                    <div class="caseText">
                        <div class="itemText">- Redesign and cleaning previous Salesforce system in use that was not used as per the Salesforce standards - that led to improper structure of data and failure to explore the benefits of Salesforce system and conflicts with the corresponding records in the Pardot system;</div>
                    </div>
                    <div class="caseText">
                        <div class="itemText">- Implement pardot forms on different sites using iframes or form handlers and Pardot API, so the form performance won’t differ or make the outlook improper;</div>
                    </div>
                    <div class="caseText">
                        <div class="itemText">- As all the data eventually need to be stored in Salesforce and Pardot, use Pardot forms to create a step-by-step set of forms for leads registration process without having to spend time on external system design to reproduce the same process and send the relevant data to Pardot system;</div>
                    </div>
                    <div class="caseText">
                        <div class="itemText">- Member portal for education.</div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

<div id="caseSlide5" class="caseSlide page" style="text-align: center;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li>
                    <div class="caseText">
                        <div class="itemTitle">Project Solution:</div>
                        <div class="blueLine"></div>
                    </div>
                    <div class="caseText">
                        <div class="itemText">- After exploring the previous way the leads were treated and converted and studying company’s inner processes the new system for Salesforce and Pardot was designed by changing the object usage in CRM, adding Person Account support and deduplication of leads in the Database;</div>
                    </div>
                    <div class="caseText">
                        <div class="itemText">- Designing custom templates for each site and placeholder to utilize the space in a way that made the form output look great visually and without loosing the functionality needed;</div>
                    </div>
                    <div class="caseText">
                        <div class="itemText">- Using Pardot in-built functionality to create forms, the set of forms with the necessary fields and behaviour was created using custom javascript and Pardot “after-form-submission” script functionalityDesigning custom templates for each site and placeholder to utilize the space in a way that made the form output look great visually and without loosing the functionality needed.</div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

<div id="caseSlide6" class="caseSlide page" style="padding-top: 0; background-color: #fff;">
    <div class="backgroundDark"></div>

    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li class="imgFromLeft">
                    <img class="img1" src="<?=template_url('img');?>cases/brokerFX/brokerFX_sl_6_1.png" alt="case image"/>
                    <img class="img2" src="<?=template_url('img');?>cases/brokerFX/brokerFX_sl_6_2.png" alt="case image"/>
                </li>
                <li>
                    <div class="caseDescription">
                        <div class="itemTitle">Project Technology:</div>
                    </div>
                    <div class="caseDescription">
                        <div class="itemText">- PHP 5 and WordPress;</div>
                    </div>
                    <div class="caseDescription">
                        <div class="itemText">- jQuery;</div>
                    </div>
                    <div class="caseDescription">
                        <div class="itemText">- JavaScript;</div>
                    </div>
                    <div class="caseDescription">
                        <div class="itemText">- HTML5;</div>
                    </div>
                    <div class="caseDescription">
                        <div class="itemText">- CSS3;</div>
                    </div>
                    <div class="caseDescription">
                        <div class="itemText">- Salesforce;</div>
                    </div>
                    <div class="caseDescription">
                        <div class="itemText">- Pardot.</div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>


<div id="caseSlide7" class="contactFormBlockMain page" style="background-color: #5886a5;">
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