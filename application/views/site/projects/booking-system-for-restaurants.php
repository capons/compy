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
    <title>Booking System for Restaurants | COMPUTOOLS</title>
    <script src="<?=template_url('js');?>jquery-1.11.3.min.js"></script>
    <script src="<?=template_url('js');?>cases.js" type="text/javascript"></script>
</head>
<body id="BS_Restaurants" style="background-color: #000;">
<div class="modalLoad"><div id="logoLoad"></div></div>
<h1 style="display: none;">Design - Booking System for Restaurants – Computools</h1><!--For SEO-->
<div id="caseSlide1" class="caseSlide page">
    <div class="caseSlideBackLeft fade">
<!--        <div class="imgBg"></div>-->
        <?php require_once ($_SERVER['DOCUMENT_ROOT'].'/application/views/site/_header_menu.php');?>


        <img class="overImg fadeInLeft" src="<?=template_url('img');?>cases/BS_Restaurants/phone.png" alt="case image"/>

        <div class="align">
            <div class="caseContainer">
                <ul class="caseUl caseUlRdd">
                    <li></li>
                    <li>
                        <div class="caseTitle" style="color: #fd9920;">Booking System for Restaurants</div>
                        <div class="caseText">It is the Android application that works according
                            to the booking system type, and helps to get the information
                            about the restaurants and other establishments which provide
                            the opportunity to reserve a table, a menu in advance.
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>
<div id="caseSlide2" class="caseSlide page" style="background-color: #fff7d0; text-align: right;">
    <div class="backgroundDark"></div>
    <div class="align" style="z-index: 2;">
        <div class="caseContainer caseContainerMda">
            <ul class="caseUl caseUlRdd">
                <div class="titleCenter">Project Features</div>
               <li>
                    <div class="caseText" style="color: #696969;">
                        <div class="itemText">view the information about the establishment (menu, prices, reviews);</div>
                        <div class="itemText">creation of a route from the current location to certain establishment
                            by means of Google Maps;</div>
                        <div class="itemText">table and menu reservation in the chosen establishment;</div>
                        <div class="itemText">ability to rate the establishment and leave a testimonial;</div>
                        <div class="itemText">ability to add the establishment to favourites;</div>
                        <div class="itemText">ability to view the own orders;</div>
                        <div class="itemText">detailed description of each meal, including proteins, fats,
                            carbohydrates;</div>
                        <div class="itemText">establishments sorting by various criteria (the nearest, the best rating,
                            the type);</div>
                        <div class="itemText">getting the user`s location through the Internet connection;</div>
                        <div class="itemText">calculation of the distance to the establishment from the current
                            location, and the required time for its reaching.</div>
                    </div>
                </li>
                <li class="imgFromRight">
                    <div style="text-align: right;">
                        <img class="img1" src="<?=template_url('img');?>cases/BS_Restaurants/sl2_img1.png" alt="case image"/>
                        <img class="img2" src="<?=template_url('img');?>cases/BS_Restaurants/sl2_img2.png" alt="case image"/>
                        <img class="img3" src="<?=template_url('img');?>cases/BS_Restaurants/sl2_img3.png" alt="case image"/>
                    </div>
                </li>

            </ul>
        </div>
    </div>

    <img class="slide2_bg" src="<?=template_url('img');?>cases/BS_Restaurants/skide2_bg.png" alt="case image"/>

</div>
<div id="caseSlide3" class="caseSlide page" style="padding-top: 0; text-align: center;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer caseContainerMain caseContainerMda">
            <div class="titleCenter">Project Challenges</div>
            <ul class="firstUl caseUl caseUlRdd">
                <li>
                     <div class="caseDescription" style="color: #fff;">
                         <div class="itemText">formation of the route from the current location to arrival
                             point by means of Google Maps;
                         </div>
                         <div class="itemText">creation of the Administration Mode.
                             <br/>
                             Administration mode is designed for users who are the owners
                             of establishments or just want to add their restaurant to
                             the application.
                         </div>
                     </div>
                    <div class="caseDescription" style="color: #fff;">
                        <div class="smallTitle">This mode should provide the next features:</div>
                        <div class="lineItem">edit the establishment`s contact information;</div>
                        <div class="lineItem">edit a menu of the establishment (photos, meals descriptions, categories);</div>
                        <div class="lineItem">edit a preview that the user sees when opening the page of establishment to get the information about it.</div>
                       </div>
                </li>
                <li class="imgFromRight">
                    <div style="text-align: right;">
                        <img class="img2" src="<?=template_url('img');?>cases/BS_Restaurants/sl3_img2.png" alt="case image"/>
                        <img class="img1" src="<?=template_url('img');?>cases/BS_Restaurants/sl3_img1.png" alt="case image"/>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="caseSlide4" class="caseSlide page" style="background-color: #000; text-align: right;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer caseContainerMda">
            <div class="titleCenter">Project Solution</div>
            <ul class="caseUl caseUlRdd">
                <li class="imgFromLeft"><img src="<?=template_url('img');?>cases/BS_Restaurants/BS_Restaurants_img3.png" alt="case image"/></li>
                <li>
                    <div class="caseText" style="color: #fff;">
                        <div class="itemText">Route formation occurs by getting user's current location and his final destination, then there is a “Get” request to Google Direction Api which gives the answer of the json-type. The answer provides us with: time for movement, path length, and a coded route. The route is decoded and added to Google Map.</div>
                        <div class="itemText">Creation of the administration mode occurs in this way. First, the registered users goes into the application settings. In the settings there is a special section "Add the establishment" (perhaps, it will be renamed). By clicking on this section the user opens the registration window where step by step he fills the necessary information. Upon completion of the registration, the notification which says that the application will be processed in the course of time is displayed. Once the application is processed, the user (henceforth - the administrator) sees the menu "Edit an establishment." By clicking on this section the editing window opens.</div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="caseSlide5" class="caseSlide page" style="background-color: #000; padding-top: 0; text-align: center;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer caseContainerMain caseContainerMda">
            <ul class="firstUl caseUl caseUlRdd">
                <li>
                    <div class="caseDescription" style="color: #fff;">
                        <div class="smallTitle">In the window administrator can select one of the options:</div>
                        <div class="lineItem">- edit the contact information;</div>
                        <div class="lineItem">- edit a menu;</div>
                        <div class="lineItem">- edit a preview.</div>
                    </div>
                    <div class="caseDescription" style="color: #fff;">
                        <div class="smallTitle">The administrator edits the following contact information:</div>
                        <div class="lineItem">- working hours;</div>
                        <div class="lineItem">- type of cuisine;</div>
                        <div class="lineItem">- phone;</div>
                        <div class="lineItem">- address (not editable, is selected only when registering).</div>
                    </div>
                    <div class="caseDescription" style="color: #fff;">
                        <div class="smallTitle">The menu editing allows:</div>
                        <div class="lineItem">- adding the meal`s category (name, icon (choose from the already available icons, and if they are not appropriate - write to us));</div>
                        <div class="lineItem">- adding the meal to certain category (name, image, description, calories, grams per serving, price);</div>
                    </div>
                    <div class="caseDescription" style="color: #fff;">
                        <div class="smallTitle">The preview editing allows:</div>
                        <div class="lineItem">- adding several photos of the establishment;</div>
                        <div class="lineItem">- description.</div>
                    </div>
                </li>
                <li class="imgFromRight">
                    <div style="text-align: right;">
                        <img class="img1" src="<?=template_url('img');?>cases/BS_Restaurants/sl5_img1.png" alt="case image"/>
                        <img class="img2" src="<?=template_url('img');?>cases/BS_Restaurants/sl5_img2.png" alt="case image"/>
                        <img class="img3" src="<?=template_url('img');?>cases/BS_Restaurants/sl5_img3.png" alt="case image"/>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="caseSlide6" class="caseSlide page" style="background-color: #f5f5f5; text-align: right;">
    <div class="imgBg"></div>
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer caseContainerMda">
            <div class="titleCenter">Project Technology</div>
            <ul class="caseUl caseUlRdd">
                <li class="imgFromLeft">
                    <div style="text-align: left;">
                        <img class="img1" src="<?=template_url('img');?>cases/BS_Restaurants/sl6_img1.png" alt="case image"/>
                        <img class="img2" src="<?=template_url('img');?>cases/BS_Restaurants/sl6_img2.png" alt="case image"/>
                        <img class="img3" src="<?=template_url('img');?>cases/BS_Restaurants/sl6_img3.png" alt="case image"/>
                    </div>
                </li>
                <li>
                    <div class="caseText" style="color: #292929;">
                        <div class="lineItem">Android SDK;</div>
                        <div class="lineItem">Java;</div>
                        <div class="lineItem">Google Play services;</div>
                        <div class="lineItem">Google Technologies
                            (Google maps, Google Directions);</div>
                        <div class="lineItem">Reactive Extensions
                            (RxJava, RxAndroid, RxBindings);</div>
                        <div class="lineItem">Retrofit 2;</div>
                        <div class="lineItem">ButterKnife;</div>
                        <div class="lineItem">JSON.</div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="caseSlide7" class="contactFormBlockMain page" style="background-color: #ff8c00;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="containerWidth caseContainer">
            <h2 style="color: #fff7d0;">LET’S CREATE SOMETHING TRULY GREAT</h2>
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