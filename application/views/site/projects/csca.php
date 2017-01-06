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
    <title>CSCA | COMPUTOOLS</title>
    <script src="<?=template_url('js');?>jquery-1.11.3.min.js"></script>
    <script src="<?=template_url('js');?>cases.js" type="text/javascript"></script>
</head>
<body id="upgo" style="background-color: #000;">
<div class="modalLoad"><div id="logoLoad"></div></div>
<h1 style="display: none;">Design - CSCA – Computools</h1><!--For SEO-->
<div id="caseSlide1" class="caseSlide page" style="padding-top: 0; background-color: #332b62;">
    <?php require_once ($_SERVER['DOCUMENT_ROOT'].'/application/views/site/_header_menu.php');?>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li class="imgFromLeft" style="text-align: left;"><img src="<?=template_url('img');?>cases/upgo1.png" alt="case image"/></li>
                <li>
                    <div class="emplTitle" style="color: #ff6a00;">CSCA</div>
                    <div class="caseDescription" style="text-align: center; color: #efefef;">System for management and control of the administration.</div>
                </li>
            </ul>
            <div class="hiddenImg"><img src="<?=template_url('img');?>cases/upgo1.png"alt="case image"/></div>
        </div>
    </div>
</div>
<div id="caseSlide2" class="caseSlide page" style="background-color: #ef7d2d;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li style="text-align: left;">
                    <div class="caseDescription" style="color: #332b62;">Project goal:</div>
                    <div class="caseText" style="color: #efefef;">The system was developed for independent work of administration.</div>
                    <div class="caseDescription" style="color: #332b62;">Project task:</div>
                    <div class="caseText" style="color: #efefef;">Transferring the documentation system of all organizations and storing of information for each organization separate was one of the main goals of the project.</div>
                </li>
                <li class="imgFromRight" style="text-align: right"><img src="<?=template_url('img');?>cases/upgo2.png" alt="case image"/></li>
            </ul>
        </div>
    </div>
</div>
<div id="caseSlide3" class="caseSlide page" style="background-color: #efefef;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li class="imgFromLeft" style="text-align: right"><img src="<?=template_url('img');?>cases/upgo3.png" alt="case image"/></li>
                <li style="text-align: left;">
                    <div class="caseDescription" style="color: #6ebdb6;">Task:</div>
                    <div class="caseText" style="color: #332b62;">Create the possibility to add organizations and to make the restriction on the organization.</div>
                    <div class="caseDescription" style="color: #6ebdb6;">Details:</div>
                    <div class="caseText" style="color: #332b62;">It was necessary to perform a limit of already existing entities and to
                        add the user to the system depending on the organization.</div>
                    <div class="caseDescription" style=" color: #6ebdb6;">Solution:</div>
                    <div class="caseText" style="color: #332b62;">There was a separate entity created for the organizations and all the necessary
                        attributes. &quot;Organization&quot; attribute was added to the other entity. The limit is applied according to a user&#39;s organization - if the user doesn’t have the membership of the organization, there is no data access.</div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="caseSlide4" class="caseSlide page" style="background-color: #6ebdb6;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li style="text-align: left;">
                    <div class="caseDescription" style="color: #efefef;">Task:</div>
                    <div class="caseText" style="color: #332b62;">The constructor for notifications.</div>
                    <div class="caseDescription" style="color: #efefef;">Details:</div>
                    <div class="caseText" style="color: #332b62;">“Notification” attribute, the amount of output of data and
                        the display time of the record in notifications could be different.</div>
                    <div class="caseDescription" style="color: #efefef;">Solution:</div>
                    <div class="caseText" style="color: #332b62;">
                        In the development process, the algorithm constructor for
                        displaying data according to the attribute and the period has been established. The constructor
                        had the restriction on the attribute display of notifications and had no limitations in the data
                        output. The period of data display in reminders was set as the number of the days, which was
                        used to determine the time range for display of notifications.
                    </div>
                </li>
                <li class="imgFromRight" style="text-align: right"><img src="<?=template_url('img');?>cases/upgo4.png" alt="case image"/></li>
            </ul>
        </div>
    </div>
</div>
<div id="caseSlide5" class="caseSlide page" style="background-color: #332b62;">
        <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li class="imgFromLeft" style="text-align: right"><img src="<?=template_url('img');?>cases/upgo5.png" alt="case image"/></li>
                <li style="text-align: left;">
                    <div class="caseDescription" style="color: #ef7d2d;">Task:</div>
                    <div class="caseText" style="color: #efefef;">Edits for staffing schedule.</div>
                    <div class="caseDescription" style="color: #ef7d2d;">Details:</div>
                    <div class="caseText" style="color: #efefef;">Editing tree data structures and information output units. Adding a filter for the organization.</div>
                    <div class="caseDescription" style="color: #ef7d2d;">Solution:</div>
                    <div class="caseText" style="color: #efefef;">
                        The base of staffing has already been developed, it was necessary to perform the correct map
                        of staffing. The restriction on the organization and a filter on the organizations were added
                        additionally. Filter mappings depend on the role of the user. During the finalization, the display
                        of units was done in a tree structure, and display of staffing for selected unit without reloading
                        the page.
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="caseSlide6" class="caseSlide page" style="background-color: #ef7d2d;">
        <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li style="text-align: left;">
                    <div class="caseDescription" style="color: #332b62;">Task:</div>
                    <div class="caseText" style="color: #efefef;">Development of vocabulary &quot;positions&quot; and
                        adding the dictionary to the essence of &quot;employee&quot; and &quot;staffing&quot;.</div>
                    <div class="caseDescription" style="color: #332b62;">Details:</div>
                    <div class="caseText" style="color: #efefef;">All created positions should have the affiliation to the organization and additional information.</div>
                    <div class="caseDescription" style="color: #332b62;">Solution:</div>
                    <div class="caseText" style="color: #efefef;">
                        Added dictionary &quot;positions&quot; with the necessary attributes to existing dictionaries, one of the
                        attributes was the attribute &quot;organization&quot;, according to which does limit. In essence, the entry
                        &quot;employee&quot; and &quot;staffing&quot; entry from the dictionary is used for communication, one-to- one,
                        eliminating the duplication of entries in the dictionary attributes of entities.
                    </div>
                </li>
                <li class="imgFromRight" style="text-align: right"><img src="<?=template_url('img');?>cases/upgo8.png" alt="case image"/></li>
            </ul>
        </div>
    </div>
</div>
<div id="caseSlide7" class="caseSlide page" style="background-color: #efefef;">
        <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li class="imgFromLeft" style="text-align: right"><img src="<?=template_url('img');?>cases/upgo6.png" alt="case image"/></li>
                <li style="text-align: left;">
                    <div class="caseDescription" style="color: #ef7d2d;">Task:</div>
                    <div class="caseText" style="color: #332b62;">Downloading of output documents by employees, generation of logs and reports.</div>
                    <div class="caseDescription" style="color: #ef7d2d;">Details:</div>
                    <div class="caseText" style="color: #332b62;">A variety of different templates and data templates.</div>
                    <div class="caseDescription" style="color: #ef7d2d;">Solution:</div>
                    <div class="caseText" style="color: #332b62;">While working on the functionality to generate and
                        upload the document (reports), the templates of generated documents have been developed
                        that were filled with the necessary data.</div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="caseSlide8" class="caseSlide page" style="background-color: #6ebdb6;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li style="text-align: left;">
                    <div class="caseDescription" style="color: #efefef; text-align: left;">Used technologies:</div>
                    <div class="caseDescription"><span style="color: #efefef;">Back-end: </span>PHP, CMS Wordpress.</div>
                    <div class="caseDescription"><span style="color: #efefef;">Front-end: </span>CSS3, HTML5, JavaScript, JQuery, Bootstrap.</div>
                    <div class="caseDescription"><span style="color: #efefef;">DataBase: </span>MySql.</div>
                </li>
                <li class="imgFromRight" style="text-align: right"><img src="<?=template_url('img');?>cases/upgo7.png"alt="case image"/></li>
            </ul>
        </div>
    </div>
</div>
<div id="caseSlide9"  class="contactFormBlockMain page" style="background-color: #332B62;">
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
<div id="caseSlide10" class="caseStudies  pageLast" style="background-color: #efefef;">
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