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
    <title>Remote Desktop Driver | COMPUTOOLS</title>
    <script src="<?=template_url('js');?>jquery-1.11.3.min.js"></script>
    <script src="<?=template_url('js');?>cases.js" type="text/javascript"></script>
</head>
<body id="rdd" style="background-color: #000;">
<div class="modalLoad"><div id="logoLoad"></div></div>
<h1 style="display: none;">Design - Remote Desktop Driver – Computools</h1><!--For SEO-->
<div id="caseSlide1" class="caseSlide page" style="background-color: #374047;  padding-top: 0;">
    <?php require_once ($_SERVER['DOCUMENT_ROOT'].'/application/views/site/_header_menu.php');?>
    <div class="align">
        <div class="caseContainer">
            <div class="hiddenImg">
                <img src="<?=template_url('img');?>cases/logo-RDD.png" alt="case image"/>
            </div>
            <ul class="caseUl caseUlRdd">
                <li class="imgFromLeft" style="text-align: left;"><img src="<?=template_url('img');?>cases/Mac.png" alt="case image"/></li>
                <li class="fade"><img src="<?=template_url('img');?>cases/logo-RDD.png" alt="case image"/></li>
            </ul>
        </div>
    </div>
</div>
<div id="caseSlide2" class="caseSlide page" style="background-color: #fff;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer caseContainerRdd">
            <div class="caseBigDescription" style="text-align: center; color: #374047">
                RDD is a system for remote control of Desktop using mobile devices.
                The main purpose of the project was the development of the cross-platform
                application for remote computer management.
                Our team developers and designers started the project
                with the creation of UI design from scratch.
            </div>
            <ul class="caseUl caseUlRdd">
                <li class="imgFromLeft"><img src="<?=template_url('img');?>cases/phone2.png" alt="case image"/></li>
                <li class="imgFromRight"><img src="<?=template_url('img');?>cases/Macbook---Open---Center.png" alt="case image"/></li>
            </ul>
        </div>
    </div>
</div>
<div id="caseSlide3" class="caseSlide page" style="background-color: #374047;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer caseContainerRdd">
            <div class="caseBigDescription" style="color: #fff; text-align: center">Our team had several basic tasks to overcome:</div>
            <ul class="caseUlSmall caseUlRdd" style="color: #fff;">
                <li class="caseText">to create design architecture;</li>
                <li class="caseText">to create the intuitive design;</li>
                <li class="caseText">to develop the cross-platform solution with the ability to install the Software on anytype of Operating System (Linux, Mac OS, Windows);</li>
                <li class="caseText">to develop the interaction of the mobile device with the desktop application;</li>
                <li class="caseText">compatibility of Mobile devices with Desktop application;</li>
                <li class="caseText">installation of the Software on the Mobile device and Desktop computer for their interaction;</li>
                <li class="caseText">the performance of the following steps: switching on / off the computer, the ability to change the computer&#39;s mode of operation,
                    the creation of a screenshot of the screen, the work with the browser etc;</li>
                <li class="caseText">to provide the control from a mobile device.</li>
            </ul>
        </div>
    </div>
</div>
<div id="caseSlide4" class="caseSlide page" style="background-color: #fff;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer caseContainerRddFull">
            <ul class="caseUl caseUlRdd">
                <li class="imgFromLeft"><img src="<?=template_url('img');?>cases/mini.png" alt="case image"/></li>
                <li style="text-align: left">
                    <div class="redBack imgFromRight">
                        <div style="color: #fff;">Task 1</div><div style="color: #374047;">Creating architecture design.</div>
                    </div>
                    <div class="alignRddLeft">
                        <div class="caseText">
                            The application’s architecture was created from scratch so it was
                            necessary to develop the modular application with the ability to
                            improve and to add additional features. The main goal was to
                            develop a driver that will intercept the event in any application
                            and organize the control from a mobile device.
                        </div>
                        <div class="caseText">
                            Solution: To interact with a mobile device desktop application was
                            designed with the driver using a combination of three technologies
                            WinAPI, Cocoa, X11, which made it possible to unify the functions
                            of making a particular work for each platform separately.The driver
                            receives data from developed API of mobile devices and executes the
                            corresponding commands on the computer.
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

<div id="caseSlide5" class="caseSlide page" style="background-color: #fff;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer caseContainerRddFull">
            <ul class="caseUl caseUlRdd">
                <li>
                    <div class="redBack imgFromLeft">
                        <div style="color: #fff; text-align: right">Task 2</div><div style="color: #374047; text-align: right">The ability to install the Software on any type of Operating System.</div>
                    </div>
                    <div class="alignRddRight">
                        <div class="caseText" style="text-align: right">
                            Goal: Creating the cross-platform applications for Windows, Mac, Linux for the Desktop.
                        </div>
                        <div class="caseText" style="text-align: right">
                            Solution: To create cross-platform applications for Desktop
                            Qt developmentenvironment has been chosen. Qt is the
                            cross-platform Software development tool in theprogramming
                            language C++. Qt environment allowed us to speed up the
                            development andsimplified the application’s adaptation process
                            for each Operating System. We used acombination of three
                            technologies WinAPI, Cocoa, X11. There was a need to implement
                            some of the features for each platform separately.
                        </div>
                    </div>
                </li>
                <li class="imgFromRight" style="text-align: right"><img src="<?=template_url('img');?>cases/Macbook.png" alt="case image"/></li>
            </ul>
        </div>
    </div>
</div>

<div id="caseSlide6" class="caseSlide page" style="background-color: #fff;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer caseContainerRddFull">
            <ul class="caseUl caseUlRdd">
                <li style="text-align: left"><img src="<?=template_url('img');?>cases/phone3.png" alt="case image"/></li>
                <li style="text-align: left">
                    <div class="redBack imgFromRight">
                        <div style="color: #fff;">Task 3</div>
                        <div style="color: #374047;">The interaction of Mobile devices with Desktop applications
                            across the network. The use of a Mobile device as a Software
                            management agent on the Computers.</div>
                    </div>
                    <div class="alignRddLeft">
                        <div class="caseText">
                            Difficulties: The main issue was the task of creating a remote
                            connection between the devices.
                        </div>
                        <div class="caseText">
                            Solution: For remote control of apps from a Mobile device the
                            interaction between the device and the Desktop was implemented
                            using the Internet connection on the same network via Wi-Fi,
                            remote control if you have a static Ip.
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="caseSlide7" class="caseSlide page" style="background-color: #fff;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer caseContainerRddFull">
            <ul class="caseUl caseUlRdd">
                <li>
                    <div class="redBack imgFromLeft">
                        <div style="color: #fff; text-align: right">Task 4</div>
                        <div style="color: #374047; text-align: right">Creating the possibility of changing the keyboard shortcuts
                            combination fordifferent applications, the ability to add
                            custom scripts saved on the selected combination of keyboards.</div>
                    </div>
                    <div class="alignRddRight">
                        <div class="caseText" style="text-align: right">
                            Solution: Its own protocol and a set of procedures are used.
                            It allows you to combinesome of the actions and play them
                            back later. The API is built using specific functionality for
                            each OS.
                        </div>
                        <div class="caseText" style="text-align: right">
                            <div class="title1">Stack of technologies</div>
                            <div class="title2">Desktop version:</div>
                            <div class="text">Qt, Qt Designer, C++, SQLite, X11, Cocoa, WinAPI.</div>
                            <div class="title2">Mobile version:</div>
                            <div class="text">Android, iOS.</div>
                        </div>
                    </div>
                </li>
                <li style="text-align: right"><img src="<?=template_url('img');?>cases/gr-2.png" alt="case image"/></li>
            </ul>
        </div>
    </div>
</div>
<div id="caseSlide8" class="caseSlide page" style="background-color: #374047;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer caseContainerRddFull">
            <div class="caseDescription caseDescriptionCenter" style="color: #fff;">
                The result of our team cooperation was the creation of a remote PC cross-platform mobile
                device management application. In fact, the program translates user actions and presents
                them for each OS in the form of specific messages (events).
            </div>
        </div>
    </div>
</div>
<div id="caseSlide9" class="contactFormBlockMain page" style="background-color: #145855;">
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
                    <input type="hidden" name="marker" value="http://computoolsglobal.com/case-studies/cpp/remote-desktop-driver#caseSlide9">
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
<div id="caseSlide10" class="caseStudies pageLast" style="background-color: #fff;">
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