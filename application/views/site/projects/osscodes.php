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
    <title>OSSCODES | COMPUTOOLS</title>
    <script src="<?=template_url('js');?>jquery-1.11.3.min.js"></script>
    <script src="<?=template_url('js');?>cases.js" type="text/javascript"></script>
</head>
<body id="oss" style="background-color: #000;">
<div class="modalLoad"><div id="logoLoad"></div></div>
<h1 style="display: none;">Design - OSSCODES – Computools</h1><!--For SEO-->
<div id="caseSlide1" class="caseSlide page" style="padding-top: 0; background-color: #53dbd3;">
    <?php require_once ($_SERVER['DOCUMENT_ROOT'].'/application/views/site/_header_menu.php');?>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li class="imgFromLeft"><img src="<?=template_url('img');?>cases/oss/oss1.png" alt="case image"/></li>
                <li>
                    <div class="ossTitle">OSSCODES</div>
                    <div class="caseText">It is the social network that connects the users on the created by them topics.</div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="caseSlide2" class="caseSlide ossBack1 page">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li></li>
                <li>
                    <div class="caseBigDescription">Project task</div>
                    <div class="caseText">Registration and authorization of users in the system.</div>
                    <div class="caseBigDescription">Solution</div>
                    <div class="caseText">The registration form containing the input fields - username, password, repeat password was created.</div>
                    <div class="caseText">The authorization form containing the input fields - username and password was created.</div>
                    <div class="caseText">For data storage, the project uses a relational database in which a user table with fields -  username, password, crypthash is created.</div>
                    <div class="caseText">During the registration the data entered by the user are added to the table, crypthash is generated, and it helps to encrypt the user`s password.</div>
                    <div class="caseText">During the authorization the certain user is obtained from the table, crypthash encrypts the password and the received password is compared with the password in the received user from the database. If the password matches, the user is retained for the current session of the logged in user.</div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="caseSlide3" class="caseSlide page">
    <div class="srtipe">
        <svg version="1.1" id="stripe"
             xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 841.89 121.89"
             style="enable-background:new 0 0 841.89 121.89;" xml:space="preserve">
                <g id="XMLID_26_">
                    <rect class="rect" id="XMLID_23_" x="-0.015" y="0" style="fill:#4daba3;" width="286.283" height="71.887"></rect>
                    <polygon class="polygon1" id="XMLID_24_" style="fill:#53dbd3;" points="487.167,79.625 286.268,0 286.268,71.887 487.167,121.89 	"></polygon>
                    <polygon class="polygon2" id="XMLID_25_" style="fill:#4daba3;" points="841.89,79.625 487.167,79.625 487.167,121.89 841.905,121.89 	"></polygon>
                </g>
        </svg>
        <div class="ossTop">
            <div class="caseContainer">
                <ul class="caseUl caseUlRdd">
                    <li class="ossTitle ossTitleLeft">Task 1</li>
                    <li class="caseTitle">Creation of the newsfeed</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li class="imgFromLeft"><img src="<?=template_url('img');?>cases/oss/oss2.png" alt="case image"/></li>
                <li>
                    <div class="caseBigDescription">Solution:</div>
                    <div class="caseText">A form of the newsfeed creation, in which you can select an image, enter the topic and the description was developed.
                        A table in the database that contains the author of the newsfeed, a topic, a description, the path to the image was created.</div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="caseSlide4" class="caseSlide page">
    <div class="srtipe">
        <svg version="1.1" id="stripe"
             xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 841.89 121.89"
             style="enable-background:new 0 0 841.89 121.89;" xml:space="preserve">
                <g id="XMLID_26_">
                    <rect class="rect" id="XMLID_23_" x="-0.015" y="0" style="fill:#5c949c;" width="286.283" height="71.887"></rect>
                    <polygon class="polygon1" id="XMLID_24_" style="fill:#68b8c5;" points="487.167,79.625 286.268,0 286.268,71.887 487.167,121.89 	"></polygon>
                    <polygon class="polygon2" id="XMLID_25_" style="fill:#5c949c;" points="841.89,79.625 487.167,79.625 487.167,121.89 841.905,121.89 	"></polygon>
                </g>
        </svg>

        <div class="ossTop">
            <div class="caseContainer">
                <ul class="caseUl caseUlRdd">
                    <li class="caseTitle">Write a post in the newsfeed</li>
                    <li class="ossTitle ossTitleRight">Task 2</li>
                </ul>
            </div>
        </div>

    </div>
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li>
                    <div class="caseBigDescription">Solution:</div>
                    <div class="caseText">A form for writing posts in the newsfeed that contains the input field was created.
                        A table in the database that contains the author of the post, and the newsfeed, which the message text is attached to was created.</div>
                </li>
                <li class="imgFromRight"><img src="<?=template_url('img');?>cases/oss/oss3.png" alt="case image"/></li>
            </ul>
        </div>
    </div>
</div>
<div id="caseSlide5" class="caseSlide page">
    <div class="srtipe">
        <svg version="1.1" id="stripe"
             xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 841.89 121.89"
             style="enable-background:new 0 0 841.89 121.89;" xml:space="preserve">
                <g id="XMLID_26_">
                    <rect class="rect" id="XMLID_23_" x="-0.015" y="0" style="fill:#4dab91;" width="286.283" height="71.887"></rect>
                    <polygon class="polygon1" id="XMLID_24_" style="fill:#53dbba;" points="487.167,79.625 286.268,0 286.268,71.887 487.167,121.89 	"></polygon>
                    <polygon class="polygon2" id="XMLID_25_" style="fill:#4dab91;" points="841.89,79.625 487.167,79.625 487.167,121.89 841.905,121.89 	"></polygon>
                </g>
        </svg>

        <div class="ossTop">
            <div class="caseContainer">
                <ul class="caseUl caseUlRdd">
                    <li class="ossTitle ossTitleLeft">Task 3</li>
                    <li class="caseTitle">Adding a user to the contact list</li>
                </ul>
            </div>
        </div>

    </div>
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li class="imgFromLeft"><img src="<?=template_url('img');?>cases/oss/oss4.png" alt="case image"/></li>
                <li>
                    <div class="caseBigDescription">Solution:</div>
                    <div class="caseText">It was created a users table, containing the fields “user” and “friend”. An authorized user can find the user, who wrote the message in the feed and add him to the contact list.</div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="caseSlide6" class="caseSlide page">
    <div class="srtipe">
        <svg version="1.1" id="stripe"
             xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 841.89 121.89"
             style="enable-background:new 0 0 841.89 121.89;" xml:space="preserve">
                <g id="XMLID_26_">
                    <rect class="rect" id="XMLID_23_" x="-0.015" y="0" style="fill:#4daba3;" width="286.283" height="71.887"></rect>
                    <polygon class="polygon1" id="XMLID_24_" style="fill:#53dbd3;" points="487.167,79.625 286.268,0 286.268,71.887 487.167,121.89 	"></polygon>
                    <polygon class="polygon2" id="XMLID_25_" style="fill:#4daba3;" points="841.89,79.625 487.167,79.625 487.167,121.89 841.905,121.89 	"></polygon>
                </g>
        </svg>

        <div class="ossTop">
            <div class="caseContainer">
                <ul class="caseUl caseUlRdd">
                    <li class="caseTitle">Communication between two users</li>
                    <li class="ossTitle ossTitleRight">Task 4</li>
                </ul>
            </div>
        </div>

    </div>
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li>
                    <div class="caseBigDescription">Solution:</div>
                    <ul class="caseUlSmall caseText">
                        <li>It was created a list of the user contacts;</li>
                        <li>It was created  the form to send a message to the contact list, that contains the input field;</li>
                        <li>It was created the table containing the fields “author”, “recipient”, “text”, “date”.</li>
                    </ul>
                </li>
                <li><img class="imgFromRight" src="<?=template_url('img');?>cases/oss/oss5.png" alt="case image"/></li>
            </ul>
        </div>
    </div>
</div>
<div id="caseSlide7" class="caseSlide page">
    <div class="srtipe">
        <svg version="1.1" id="stripe"
             xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 841.89 121.89"
             style="enable-background:new 0 0 841.89 121.89;" xml:space="preserve">
                <g id="XMLID_26_">
                    <rect class="rect" id="XMLID_23_" x="-0.015" y="0" style="fill:#4da5ab;" width="286.283" height="71.887"></rect>
                    <polygon class="polygon1" id="XMLID_24_" style="fill:#53cedb;" points="487.167,79.625 286.268,0 286.268,71.887 487.167,121.89 	"></polygon>
                    <polygon class="polygon2" id="XMLID_25_" style="fill:#4da5ab;" points="841.89,79.625 487.167,79.625 487.167,121.89 841.905,121.89 	"></polygon>
                </g>
        </svg>

        <div class="ossTop">
            <div class="caseContainer">
                <ul class="caseUl caseUlRdd">
                    <li class="ossTitle ossTitleLeft">Task 5</li>
                    <li class="caseTitle">Tracking of the newsfeed</li>
                </ul>
            </div>
        </div>

    </div>
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li class="imgFromLeft"><img src="<?=template_url('img');?>cases/oss/oss6.png" alt="case image"/></li>
                <li>
                    <div class="caseBigDescription">Solution:</div>
                    <div class="caseText">
                        When the user is login the page with two columns is displayed,  the left displays a list of feeds
                        which the user has subscribed to, the right displays a list of tapes in the system that are not
                        signed by the user. The user navigates to a newsfeed page when choosing a feed.
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="caseSlide8" class="caseSlide ossBack2 page">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer">
            <div class="ossTitle">Project Technology</div>
            <div class="caseText"><span>Client part:</span> CSS, HTML, Javascript, JQuery.</div>
            <div class="caseText"><span>Server part:</span> PHP, Codeigniter, MySQL.</div>
        </div>
    </div>
</div>
<div id="caseSlide9" class="contactFormBlockMain page" style="background-color: #47beb7;">
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