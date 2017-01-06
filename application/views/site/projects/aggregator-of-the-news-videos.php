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
    <title>Aggregator of the news videos | COMPUTOOLS</title>
    <script src="<?=template_url('js');?>jquery-1.11.3.min.js"></script>
    <script src="<?=template_url('js');?>cases.js" type="text/javascript"></script>
</head>
<body id="anv" style="background-color: #1c1c1c;">
<div class="modalLoad"><div id="logoLoad"></div></div>
<h1 style="display: none;">Design - Aggregator of the news videos – Computools</h1><!--For SEO-->
<div id="caseSlide1" class="caseSlide page">
    <div class="fade">
        <?php require_once ($_SERVER['DOCUMENT_ROOT'].'/application/views/site/_header_menu.php');?>

        <video poster="<?=template_url('img');?>cases/anv/anv_bg1.jpg" id="bgvid" playsinline autoplay muted loop>
            <source src="<?=template_url('img');?>cases/anv/anv_bg1.webm" type="video/webm">
            <source src="<?=template_url('img');?>cases/anv/anv_bg1.mp4" type="video/mp4">
        </video>
        <div class="align">
            <div class="caseContainer">
                <ul class="caseUl caseUlRdd">
                    <li></li>
                    <li>
                        <div class="caseTitle" style="color: #fff;">Aggregator of the news videos</div>
                        <div class="itemText" style="color: #fff;">Aggregator of the news videos from different sources.</div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div id="caseSlide2" class="caseSlide page" style="padding-top: 0; background-color: #fff;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li>
                    <div class="caseDescription">
                        <div class="itemTitle">Project goal</div>
                        <div class="itemText">To provide the user with videos from various news sites in a single interface, sorting them by the user`s interests.</div>
                    </div>
                </li>
                <li class="imgFromRight">
                    <img src="<?=template_url('img');?>cases/anv/anv_sl_2.png" alt="case image"/>
                </li>
            </ul>
        </div>
    </div>
</div>

<div id="caseSlide3" class="caseSlide page" style="text-align: right;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li class="imgFromLeft"><img src="<?=template_url('img');?>cases/anv/anv_sl_3.png" alt="case image"/></li>
                <li>
                    <div class="caseText">
                        <div class="itemTitle">Project Tasks</div>
                        <div class="itemText">- Implementation of aggregator of the news from various news sources.</div>
                        <div class="itemText">- Development of the aggregator portal of news videos.</div>
                    </div>
                    <div class="caseText">
                        <div class="itemText">- User`s registration and authorization.</div>
                        <div class="itemText">- Implementation of the video catalogs.</div>
                        <div class="itemText">- Implementation of a playlist catalogue and its convenient scrolling.</div>
                    </div>
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
                <li>
                    <div class="caseDescription">
                        <div class="itemTitle">Project Solutions</div>
                        <div class="itemText">A starting system of aggregator in several streams was developed. It was written a separate parser for each source. Some parsers have analyzed a page of the news source and due to the markup chosen the video, which had not previously been entered into the database. The rest has receiving the content directly from the server in the form of XML responses with the specified parameters in the request. The obtained XML was analyzed and new videos were saved in the database.</div>
                        <div class="itemText">Design team has presented a visual template that had been created with the help of HTML and CSS</div>
                    </div>
                    <div class="caseDescription">
                        <div class="itemText">It was created a modal window that contains the input fields “username”, “email”, “password”, “repeat password”, and a table in the database with the fields “username”, “email”, “password”, “slat”. While the user`s registration, “username”, “email”, encrypted “password”, encryption key “slat” are recorded in the table.</div>
                        <div class="itemText">It was created a modal window with a form containing the input fields “email” and “password”. While the user`s authorization, it is a search of user by email. If the user is found, the entered password is encrypted by means of “slat” and is compared to user`s password in the database.</div>
                    </div>
                    <div class="caseDescription">
                        <div class="itemText">In case of the encrypted passwords coincidence, the user logs into the system.</div>
                        <div class="itemText">It was created two video catalogs. The first catalogue includes the videos sorted by date, the second catalogue contains videos sorted by popularity. Both catalogs are also sorted by user interests. </div>
                    </div>
                    <div class="caseDescription">
                        <div class="itemText">The following catalogue behind the assorted videos contains user-created playlists, sorted by creation date.</div>
                        <div class="itemText">Implemented customize scrollbar, allowing to unify the display and scrollbar features in all browsers. There is also an opportunity to scroll the catalogs when you hover mouse pointer on the top or bottom part of the video catalog block.</div>
                    </div>
                </li>
                <li class="imgFromRight">
                    <img src="<?=template_url('img');?>cases/anv/anv_sl_4.png" alt="case image"/>
                </li>
            </ul>
        </div>
    </div>
</div>

<div id="caseSlide5" class="caseSlide page" style="text-align: right;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li class="imgFromLeft">
<!--                    <img class="anv_sl_5_1" src="--><?//=template_url('img');?><!--cases/anv/anv_sl_5_1.png" alt="case image"/>-->
<!--                    <img class="anv_sl_5_2" src="--><?//=template_url('img');?><!--cases/anv/anv_sl_5_1.png" alt="case image"/>-->
<!--                    <img class="anv_sl_5_3" src="--><?//=template_url('img');?><!--cases/anv/anv_sl_5_1.png" alt="case image"/>-->
                    <img src="<?=template_url('img');?>cases/anv/anv_sl_5.png" alt="case image"/>
                </li>
                <li>
                    <div class="caseText">
                        <div class="itemTitle">Project Tasks</div>
                        <div class="itemText">- Playlists development.</div>
                        <div class="itemText">- Development of the playlist interface.</div>
                    </div>
                    <div class="caseText">
                        <div class="itemText">- Changing the video's popularity.</div>
                        <div class="itemText">- Development of a video player.</div>
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
                <li>
                    <div class="caseDescription">
                        <div class="itemTitle">Project Solutions</div>
                        <div class="itemText">Upon user registration, the playlist is automatically created with date of the user registration. In the playlists catalogue there is an opportunity to create a new playlist.</div>
                    </div>
                    <div class="caseDescription">
                        <div class="itemText">The fixed playlist interface block is located at the bottom of the page that contains the playlist controls, as well as videos uploaded to the playlist. When you select a video from the playlist, the playlist is automatically moved that the selected video has been on the center of the block.</div>
                    </div>
                    <div class="caseDescription">
                        <div class="itemText">After a few seconds, the playlist interface is turned off if the user has selected it in the settings. There is an opportunity to share the current playlist and rename it. There is the information about the number of the playlist total time which is concluded from the duration of the each video from the playlist. At the end of the video playback from the playlist, the next video starts to play if the user has selected it in the settings.</div>
                    </div>
                    <div class="caseDescription">
                        <div class="itemText">In the playlist interface, it is possible to raise the popularity of each video by one unit upwards.</div>
                    </div>
                    <div class="caseDescription">
                        <div class="itemText">All the videos from a video catalogs also have this opportunity.</div>
                    </div>
                    <div class="caseDescription">
                        <div class="itemText">It was developed a video player which is based on the html5 video api, that supports the functions of the playlist interface. The design of a video player supports the overall project design.</div>
                    </div>
                </li>
                <li class="imgFromRight">
                    <img src="<?=template_url('img');?>cases/anv/anv_sl_6.png" alt="case image"/>
                </li>
            </ul>
        </div>
    </div>
</div>

<div id="caseSlide7" class="caseSlide page" style="text-align: right;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li class="imgFromLeft">
                    <img class="img1" src="<?=template_url('img');?>cases/anv/anv_sl_7_1.png" alt="case image"/>
                    <img class="img2" src="<?=template_url('img');?>cases/anv/anv_sl_7_2.png" alt="case image"/>
                </li>
                <li>
                    <div class="caseText">
                        <div class="itemTitle">Project Tasks</div>
                        <div class="itemText">- Video search.</div>
                        <div class="itemText">- Advanced Video Search.</div>
                    </div>
                    <div class="caseText">
                        <div class="itemText">- User`s settings.</div>
                        <div class="itemText">- Introducing the possibility of writing comments to the video.</div>
                        <div class="itemText">- Implementation of the project monitoring page.</div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>


<div id="caseSlide8" class="caseSlide page" style="padding-top: 0; background-color: #fff;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li>
                    <div class="caseDescription">
                        <div class="itemTitle">Project Solutions</div>
                        <div class="itemText">At the top of the website header there is the input field of the keywords. When you enter a keywords, the search is automatically begin on the on video titles and video description from the database.The block with a list of the appropriate keywords video is appear at the video catalogs block.</div>
                    </div>
                    <div class="caseDescription">
                        <div class="itemText">Near the keywords entry field for searching, there is an element that manages a Search, and  when clicking on it, it opens a dialog window with the search settings which allows specifying the keywords, range of a video publication date, range of a video rating, video categories, video source.</div>
                    </div>
                    <div class="caseDescription">
                        <div class="itemText">At the top of the page there are the user controls, when you click on the icon gear, opens the settings dialog box. In the dialog box, you can select the following functions: the automatic play of the next video, the automatic  playlist interface shutdown, the initial catalogue when you run the page, change of the user's image, password recovery, email change, the video category for assorted video catalogs, the video sources for assorted video catalogs.</div>
                    </div>
                    <div class="caseDescription">
                        <div class="itemText">Below the block with a video player and the video catalogs it was added a form with text entry field for writing a comment to the video.</div>
                    </div>
                    <div class="caseDescription">
                        <div class="itemText">It was created hidden from the user page with the password. The project administrations have access to the page. The project monitoring page displays the results of the video aggregation system in the video graphics drawn on html5 canvas. The same page has a list of users with the ability to block the user, assign to user a premium account, and block writing comments.</div>
                    </div>
                </li>
                <li class="imgFromRight">
                    <img src="<?=template_url('img');?>cases/anv/anv_sl_8.png" alt="case image"/>
                </li>
            </ul>
        </div>
    </div>
</div>

<div id="caseSlide9" class="caseSlide page" style="text-align: right;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li></li>
                <li>
                    <div class="caseText">
                        <div class="itemTitle">Project Technology</div>
                        <div class="itemText" style="padding-bottom: 10px;">The client part: HTML, CSS, HTML Video API, JavaScript, JQuery.</div>
                        <div class="itemText">The server part: Java 8, Jetty, Spring, Hibernate, PostgreSQL.</div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

<div id="caseSlide10" class="contactFormBlockMain page" style="background-color: #1c1c1c;">
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
<div id="caseSlide11" class="caseStudies pageLast" style="background-color: #fff;">
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