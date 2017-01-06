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
    <title>Audio Task Manager | COMPUTOOLS</title>
    <script src="<?=template_url('js');?>jquery-1.11.3.min.js"></script>
    <script src="<?=template_url('js');?>cases.js" type="text/javascript"></script>
</head>
<body id="atm" style="background-color: #000;">
<div class="modalLoad"><div id="logoLoad"></div></div>

<h1 style="display: none;">Audio Task Manager – Computools</h1><!--For SEO-->
<div id="caseSlide1" class="caseSlide page" style="padding-top: 0; background-color: #0089fe;">
    <?php require_once ($_SERVER['DOCUMENT_ROOT'].'/application/views/site/_header_menu.php');?>
    <div class="atmGradiient">
        <div class="fade">
            <div class="caseTitle" style="color: #0089fe;">Audio Task Manager</div>
            <div class="caseDescription" style="color: #f5f5f5;">New project for composers and clients</div>
        </div>
    </div>
    <div class="align">
        <div class="caseContainer">
            <div class="hiddenText">
                <div class="caseTitle" style="color: #005BA6;">Audio Task Manager</div>
                <div class="caseDescription" style="color: #f5f5f5;">New project for composers and clients</div>
            </div>
            <ul class="caseUl caseUlRdd">
                <li class="imgFromLeft"><img src="<?=template_url('img');?>cases/atm/atm1.png" alt="case image"/></li><li></li>
            </ul>
        </div>
    </div>
</div>

<div id="caseSlide2" class="caseSlide atmBack1 page" style="background-color: #fff;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer">
            <div class="caseDescription" style="color: #22364c;">The main purpose of the project</div>
            <div class="caseText" style="color: #f5f5f5;">
                The main purpose of the project creation was to develop a management system to maintain mutual projects between the composers and their clients with the user-friendly interface based on the AJAX technology.
                In the early stages, we studied a lot of similar programs to develop the audio task manager for our client in the best possible way implementing new features. We have set a few iterations...and started with the development of the user pages.
            </div>
        </div>
    </div>
</div>

<div id="caseSlide3" class="caseSlide page" style="background-color: #005ba6;">
    <div class="backgroundDark"></div>
    <div class="rhombus rhombus1"></div>
    <img class="rhombusSmall rhombusSmall1" src="<?=template_url('img');?>cases/atm/rhombus2.png" alt="case image"/>
    <img class="rhombusSmall rhombusSmall2" src="<?=template_url('img');?>cases/atm/rhombus1.png" alt="case image"/>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li style="color: #4e4f4f;">
                    <div class="caseText" style="color: #ff530b; text-align: left;">The development of the page of non-authorized user</div>
                    <div class="atmText" style="text-align: left; color: #fff;">
                        Despite the request in the address bar when the user is not logged in, a page with the description of the project
                        and the ability to sign in or register is being displayed. Our design team created intuitive design and provided
                        the welcome page template to make the layout, adapting the ready design to different screen sizes of devices and restrictions.
                    </div>
                    <div class="caseText" style="color: #ff530b; text-align: left;">The development of the page of authorized user</div>
                    <div class="atmText" style="text-align: left; color: #fff;">
                        In cooperation with the customer, a ready Bootstrap template was chosen with the further customization of the theme.
                    </div>
                </li>
                <li class="imgFromRight"><img src="<?=template_url('img');?>cases/atm/atm2.png" alt="case image"/></li>
            </ul>
        </div>
    </div>
</div>

<div id="caseSlide4" class="caseSlide page" style="background-color: #fff;">
    <div class="backgroundDark"></div>
    <div class="rhombus rhombus2"></div>
    <img class="rhombusSmall rhombusSmall3" src="<?=template_url('img');?>cases/atm/rhombus5.png" alt="case image"/>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li class="imgFromLeft"><img src="<?=template_url('img');?>cases/atm/atm3.png" alt="case image"/></li>
                <li>
                    <div class="caseText" style="color: #ff530b; text-align: left;">Development of the user registration form</div>
                    <div class="atmText" style="text-align: left; color: #005ba6;">
                        This step involved the development of the modal window on the welcome page with the form for the user registration. It contained
                        the fields to input the e-mail and password (repeat password). When changing the e-mail field, the system automatically checks the
                        e-mail on its persistence in the database. If the e-mail already exists in the system, it is not possible to send the form on the server.
                        When sending the form the user will be automatically authorized in the system and he will be redirected on the page Project Management.
                    </div>
                    <div class="caseText" style="color: #ff530b; text-align: left;">Development of the user authorization</div>
                    <div class="atmText" style="text-align: left; color: #005ba6;">
                        The next step was to develop a modal window on the welcome page with the form for the user’s authorization, which contained the input fields
                        for e-mail and password. When sending a form without updating the page, the system notifies the user in the case of an error if the e-mail
                        and password are the same. If they are approved by the system, the user is redirected on the page Management of the projects where
                        the user sees the projects that he has created or those he was joined to.
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

<div id="caseSlide5" class="caseSlide atmBack2 page" style="background-color: #fff;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li>
<!--                    <div class="caseText" style="color: #f5f5f5; text-align: left;">Страница управления проектами</div>-->
<!--                    <div class="atmText" style="text-align: left; color: #003341;">-->
<!--                        На странице проектов пользователь видит проекты, которые-->
<!--                        он создал и к которым его прикрепили.-->
<!--                    </div>-->
                    <div class="caseText" style="color: #f5f5f5; text-align: left;">Creation of the project</div>
                    <div class="atmText" style="text-align: left; color: #003341;">
                        On the page Creation of the Project, a form was developed for the input of the Project Title and Project Description
                        into a form. The user also gained the opportunity to add other users to the project that is being created by the e-mail
                        incl. non-authorized users. After successful creation of the project, the user is redirected on the Project Page.
                    </div>
                </li>
                <li class="imgFromRight"><img src="<?=template_url('img');?>cases/atm/atm4.png" alt="case image"/></li>
            </ul>
        </div>
    </div>
</div>

<div id="caseSlide6" class="caseSlide page" style="background-color: #ff5005;">
    <div class="backgroundDark"></div>
    <img class="rhombusSmall rhombusSmall4" src="<?=template_url('img');?>cases/atm/rhombus7.png" alt="case image"/>
    <img class="rhombusSmall rhombusSmall5" src="<?=template_url('img');?>cases/atm/rhombus8.png" alt="case image"/>
    <div class="rhombus rhombus3"></div>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li class="imgFromLeft"><img src="<?=template_url('img');?>cases/atm/atm5.png" alt="case image"/></li>
                <li>
                    <div class="caseText" style="color: #003341; text-align: left;">The panel of the page elements creation</div>
                    <div class="caseText" style="text-align: left; color: #fff;">
                        On the top of the project page, the block for adding page elements was placed with the possibility to add sound files,
                        a to-do list, notes or any other files to the project, to invite the users.
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

<div id="caseSlide7" class="caseSlide page" style="background-color: #005ba6;">
    <div class="backgroundDark"></div>
    <img class="rhombusSmall rhombusSmall6" src="<?=template_url('img');?>cases/atm/rhombus9.png" alt="case image"/>
    <div class="rhombus rhombus4"></div>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li class="imgFromLeft"><img src="<?=template_url('img');?>cases/atm/atm6.png" alt="case image"/></li>
                <li>
                    <div class="caseText" style="color: #003341; text-align: left;">Adding of an audio file to the project</div>
                    <div class="caseText" style="text-align: left; color: #fff;">
                        When adding an audio file to the project, a form for adding audio files will be opened animated with the fields
                        Audio Title, Audio File, Bit rate, Allow Download, Beeps, Watermark. When the file is successfully added to a project,
                        on the page automatically appears the block with the audio file player, the previous revisions for its watching are blocked.
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

<div id="caseSlide8" class="caseSlide atmBack3 page" style="background-color: #fff;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li>
                    <div class="caseText" style="color: #005ba6; text-align: left;">Watermark uploading into the user’s profile</div>
                    <div class="atmText" style="text-align: left; color: #fefefe;">
                        The user in his account can download his own variations of the watermark-signal with
                        pointing the diapason.
                    </div>
                    <div class="caseText" style="color: #005ba6; text-align: left;">Adding of the watermark to the audio file</div>
                    <div class="atmText" style="text-align: left; color: #fefefe;">
                        When downloading the audio file, there is a possibility to set a watermark on the audio file from already downloaded into the user’s profile.
                    </div>
                </li>
                <li class="imgFromRight"><img src="<?=template_url('img');?>cases/atm/atm7.png" alt="case image"/></li>
            </ul>
        </div>
    </div>
</div>

<div id="caseSlide9" class="caseSlide page" style="background-color: #fff;">
    <div class="backgroundDark"></div>
    <div class="rhombus rhombus5"></div>
    <img class="rhombusSmall rhombusSmall7" src="<?=template_url('img');?>cases/atm/rhombus11-3.png" alt="case image"/>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li>
                    <div class="caseText" style="color: #ff5005; text-align: left;">Bit rate changing of the audio file</div>
                    <div class="atmText" style="text-align: left; color: #0089fe;">
                        When uploading the audio file the user can point out the further bit rate of the file that is being downloaded.
                    </div>
                    <div class="caseText" style="color: #ff5005; text-align: left;">Adding beeps to the audio track</div>
                    <div class="atmText" style="text-align: left; color: #0089fe;">
                        To protect the file from unauthorized download while its uploading there is the possibility to set the beep with an interval.
                    </div>
                </li>
                <li class="imgFromRight"><img src="<?=template_url('img');?>cases/atm/atm8.png" alt="case image"/></li>
            </ul>
        </div>
    </div>
</div>

<div id="caseSlide10" class="caseSlide atmBack4 page" style="background-color: #fff;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li class="imgFromLeft"><img src="<?=template_url('img');?>cases/atm/atm9.png" alt="case image"/></li>
                <li>
                    <div class="caseText" style="color: #ff5005; text-align: left;">The audio file player</div>
                    <div class="atmText" style="text-align: left; color: #fefefe;">
                        In the meantime, the audio file player has been developed on the base of HTML5 Audio API.  When downloading a file,
                        it is being analyzed and according to the data the JSON file with the audio samples is being formed. This development step
                        was one of the biggest challenges within the project that we had to overcome. We had to draw the audio wave and
                        this process is like jewelry work. Using the data, the audio wave is being created in the audio player on the HTML5 Canvas object.
                        As the result, the user can reproduce the file with the bit rate configuration, watermark, and beeps chosen before the upload.
                    </div>
                    <div class="caseText" style="color: #ff5005; text-align: left;">Possibility to comment the chosen audio file track</div>
                    <div class="atmText" style="text-align: left; color: #fefefe;">
                        There is a possibility to read comments to the particular area of the audio file on the audio player.
                        The users also have the ability to leave comments to the particular pieces of the audio file in the selected range.
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

<div id="caseSlide11" class="caseSlide page" style="background-color: #ff5005;">
    <div class="backgroundDark"></div>
    <div class="rhombus rhombus6"></div>
    <img class="rhombusSmall rhombusSmall8" src="<?=template_url('img');?>cases/atm/rhombus13.png" alt="case image"/>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li>
                    <div class="caseText" style="color: #2070b1; text-align: left;">Adding the to-do list to the project</div>
                    <div class="atmText" style="text-align: left; color: #fff;">
                        When adding a to-do list, automatically the to-do list block will be created where the user can add the task.
                        The user can mark the task as resolved and delete a to-do list.
                    </div>
                </li>
                <li class="imgFromRight"><img src="<?=template_url('img');?>cases/atm/atm10.png" alt="case image"/></li>
            </ul>
        </div>
    </div>
</div>

<div id="caseSlide12" class="caseSlide page" style="background-color: #005ba6;">
    <div class="backgroundDark"></div>
    <div class="rhombus rhombus7"></div>
    <img class="rhombusSmall rhombusSmall9" src="<?=template_url('img');?>cases/atm/rhombus16.png" alt="case image"/>
    <img class="rhombusSmall rhombusSmall10" src="<?=template_url('img');?>cases/atm/rhombus17.png" alt="case image"/>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li class="imgFromLeft"><img src="<?=template_url('img');?>cases/atm/atm11.png" alt="case image"/></li>
                <li>
                    <div class="caseText" style="color: #003341; text-align: left;">Adding notes to the project</div>
                    <div class="atmText" style="text-align: left; color: #feffff;">
                        If the user wants to add a note, automatically an element is being created and stylized as a note with the yellow background
                        and the possibility of its editing when clicking.
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

<div id="caseSlide13" class="caseSlide atmBack5 page">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li>
                    <div class="caseText" style="color: #003341; text-align: left;">Inviting the user to the project</div>
                    <div class="atmText" style="text-align: left; color: #feffff;">
                        This function provides the possibility to invite users to the project on e-mail. If the user isn’t checked in in the system,
                        he/she gets an invitation to join the project.
                    </div>
                </li>
                <li class="imgFromRight"><img src="<?=template_url('img');?>cases/atm/atm12.png" alt="case image"/></li>
            </ul>
        </div>
    </div>
</div>

<div id="caseSlide14" class="caseSlide atmBack6 page">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer">
            <div class="caseDescription" style="color: #003341; text-align: center;">Technologies:</div>
            <div class="caseText" style="text-align: left; color: #feffff;">
                <span class="caseDescription" style="color: #003341;">The client side: </span>HTML, CSS, HTML Audio API, Javascript, Jquery, Bootstrap
            </div>
            <div class="caseText" style="text-align: left; color: #feffff;">
                <span class="caseDescription" style="color: #003341;">The server side: </span>Java 8, Jetty, Spring, Hibernate, PostgreSQL, ffmpeg.
            </div>
        </div>
    </div>
</div>

<div id="caseSlide15" class="contactFormBlockMain page" style="background-color: #003341;">
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

<div id="caseSlide16" class="caseStudies  pageLast" style="background-color: #fff;">
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
<!--<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>-->
<noscript>
    <div style="display:inline;"><img height="1" width="1" style="border-style:none;" alt="pagead" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/922620963/?value=0&amp;guid=ON&amp;script=0"/></div>
</noscript>
</body>
</html>