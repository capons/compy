<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo template_url('img');?>favicon.png" type="image/x-icon">
    <title>Development and support of startup for various industries - Computools</title>
    <meta name="description" content="Computools is professional outsourcing and outstaffing web, desktop, mobile application development company with research and development centres in Ukraine.">
    <script src="<?php echo template_url('js');?>jquery-1.11.3.min.js"></script>
    <link href="<?php echo template_url('css');?>main.css" rel="stylesheet">
    <link href="<?php echo template_url('css');?>main_parts.css" rel="stylesheet">
    <link href="<?php echo template_url('css');?>services.css" rel="stylesheet">
    <link href="<?=template_url('css');?>animateStyles.css" rel="stylesheet">
    <link href="<?php echo template_url('css');?>media.css" rel="stylesheet">
    <link href="<?php echo template_url('css');?>css/font-awesome.min.css" rel="stylesheet">
    <script src="<?php echo template_url('js');?>services.js" type="text/javascript"></script>
</head>
<body>
<div class="modalLoad"><div id="logoLoad"></div></div>
<div id="popupForm" class="popupForm">
    <form id="headerForm" action="#modal-one" enctype="multipart/form-data" method="post">
        <div class="closeForm" onclick="openbox('popupForm')">×</div>
        <h2>Let’s develop your Startup truly great</h2>
        <div class="contactForm top">
            <input type="text" name="name" required placeholder="Name">
            <input type="email" name="email" required placeholder="Email">
            <input type="file" name="attachments" class="attachFiles">
            <input type="hidden" name="marker" value="http://computoolsglobal.com/forstartup#form1">
            <textarea name="idea" required placeholder="Your task/idea"></textarea>
            <div class="attachments top">
                <div class="icon"><i class="fa fa-paperclip"></i></div>
                <div class="attachFileName">Attach a file</div>
            </div>
        </div>
        <div class="quoteContent">
            <input type="submit" class="quote" value="Get a free Quote"><div>1</div>
        </div>
    </form>
</div>

<div id="form1" class="serviseStartup head">
    <div class="headerContainerWidth">
        <div id="headerMainIndexPage" class="activeLinkMain"><?php include '_header_menu.php';?></div>
    </div>
    <div class="headAlign">
        <div class="aboutUsHeadContainer fade">
            <h2>Using our knowledge and expertise we can develop your startup as we have already done it for our 150+ clients</h2>
            <div class="get">Are you ready to start?
                <div class="checkCv">
                    <a class="quote" href="#" onclick="openbox('popupForm', 'AreYouRadyToStart');return false;">Get a free Quote</a><img src="<?=template_url('img');?>technologies/cv_arrow.png" alt="Get a free Quote"/>
                </div>
            </div>
        </div>
    </div>
    <div id="more" class="scrollDown">
        <img src="<?=template_url('img');?>pc-mouse.png" alt="Scroll Down"/><div>Scroll Down</div>
    </div>
</div>

<div class="industries next page">
    <div class="align">
        <div class="containerWidth">
            <h2>We have developed Web, Mobile and Software Applications for
                the Clients from the following Industries:</h2>
            <ul>
                <li class="jump"><img src="<?=template_url('img');?>technologies/ind_1.png" alt="Software and Hi-Tech"/><p>Software and<br/>Hi-Tech</p></li>
                <li class="jump"><img src="<?=template_url('img');?>technologies/ind_2.png" alt="Retail and Distribution"/><p>Retail and<br/>Distribution</p></li>
                <li class="jump"><img src="<?=template_url('img');?>technologies/ind_3.png" alt="Financial Services"/><p>Financial<br/>Services</p></li>
                <li class="jump"><img src="<?=template_url('img');?>technologies/ind_4.png" alt="Media and Entertainment"/><p>Media and<br/>Entertainment</p></li>
                <li class="jump"><img src="<?=template_url('img');?>technologies/ind_5.png" alt="Emerging Verticals"/><p>Emerging<br/>Verticals</p></li>
                <li class="jump"><img src="<?=template_url('img');?>technologies/ind_6.png" alt="Travel and Hospitality"/><p>Travel and<br/>Hospitality</p></li>
            </ul>
            <a class="quote" href="#" onclick="openbox('popupForm', 'OUTSTAFFING_MODEL');return false;">Get a free Quote</a>
        </div>
    </div>
</div>

<div class="using page">
    <div class="align">
        <div class="containerWidth">
            <!--            <h2>USING NEWEST IT-TECHNOLOGIES AND APPROACHES TO THE DEVELOPMENT</h2>-->
            <h2>We use newest IT-Technologies and Approaches in the Software Development</h2>
            <ul>
                <li class="fade">
                    <div>
                        <a href="/webapps" ><p>Web Application<br/>Development</p></a>
                        <img src="<?=template_url('img');?>technologies/Java_logo.png" alt="Java">
                        <img src="<?=template_url('img');?>technologies/logo1.png" alt="Php">
                        <img src="<?=template_url('img');?>technologies/Microsoft_net.png" alt=".Net">
                        <img src="<?=template_url('img');?>technologies/node.png" alt="Node">
                        <img src="<?=template_url('img');?>technologies/wp.png" alt="Wordpress">
                        <img src="<?=template_url('img');?>technologies/magenta.png" alt="Magenta">
                        <img src="<?=template_url('img');?>technologies/Scala_logo.png" alt="Scala">
                        <img src="<?=template_url('img');?>technologies/HTML5_Logo.png" alt="HTML5">
                        <img src="<?=template_url('img');?>technologies/css3.png" alt="CSS3">
                        <img src="<?=template_url('img');?>technologies/js.png" alt="JS">
                    </div>
                    <div><img src="<?=template_url('img');?>technologies/settings.png" alt="Web"></div>
                </li>
                <li class="fade">
                    <div>
                        <a href="/software" ><p>Software Application<br/>Development</p></a>
                        <img src="<?=template_url('img');?>technologies/C_plus_plus.png" alt="C++">
                        <img src="<?=template_url('img');?>technologies/Microsoft_net.png" alt=".Net">
                        <img src="<?=template_url('img');?>technologies/Java_logo.png" alt="Java">
                    </div>
                    <div><img src="<?=template_url('img');?>technologies/monitor2.png" alt="Software"></div>
                </li>
                <li class="fade">
                    <div>
                        <a href="/mobile" ><p>Mobile Application<br/>Development</p></a>
                        <img src="<?=template_url('img');?>technologies/ios_logo.png" alt="Ios">
                        <img src="<?=template_url('img');?>technologies/logo-android.png" alt="Android">
                        <img src="<?=template_url('img');?>technologies/swift.png" alt="Swift">
                        <img src="<?=template_url('img');?>technologies/C_plus_plus.png" alt="C++">
                        <img src="<?=template_url('img');?>technologies/techn_mob.png" alt="">
                    </div>
                    <div><img src="<?=template_url('img');?>technologies/smartphone.png" alt="Mobile"></div>
                </li>
                <li class="fade">
                    <div>
                        <a href="/design" ><p>UI/UX design</p></a>
                        <img src="<?=template_url('img');?>technologies/techn_ps.png" alt="Adobe Photoshop">
                        <img src="<?=template_url('img');?>technologies/techn_ai.png" alt="Adobe Illustrator">
                        <img src="<?=template_url('img');?>technologies/techn_id.png" alt="Adobe ID">
                        <img src="<?=template_url('img');?>technologies/techn_ae.png" alt="Adobe After Effects">
                        <img src="<?=template_url('img');?>technologies/techn_br.png" alt="Adobe Bridge">
                        <img src="<?=template_url('img');?>technologies/techn_fl.png" alt="Adobe Flash Player">
                        <img src="<?=template_url('img');?>technologies/techn_cd.png" alt="Corel Draw">
                        <img src="<?=template_url('img');?>technologies/techn_sk.png" alt="Sketch">
                    </div>
                    <div><img src="<?=template_url('img');?>technologies/paint.png" alt="UI/UX design"></div>
                </li>
            </ul>
            <a class="quote" href="#" onclick="openbox('popupForm', 'USING NEWEST IT-TECHNOLOGIES');return false;">Get a free Quote</a>
        </div>
    </div>
</div>

<div class="valuesDescription">
    <div class="containerWidth">
        <ul class="valuesDescriptionList">
            <li class="fade">
                <img src="<?=template_url('img');?>technologies/like.png"  alt="mission"/>
                <h3>Our<br/>Mission:</h3>
                <div class="valueDescr">
                    Promote prosperity of your business, offering full cycle of outsourcing and outstaffing
                    software development services, so you could concentrate on your core tasks
                </div>
            </li>
            <li class="fade">
                <img src="<?=template_url('img');?>technologies/principles.png"  alt="principles"/>
                <h3>Our<br/>Principles:</h3>
                <ul class="valueDescr">
                    <li>Honesty</li>
                    <li>Achieving good results</li>
                    <li>Respectful attitude</li>
                    <li>Opennes</li>
                    <li>Consensus and democracy</li>
                    <li>Responsibility</li>
                </ul>
            </li>
            <li class="fade">
                <img src="<?=template_url('img');?>technologies/monitor.png"  alt="you get"/>
                <h3>What do you<br/>get:</h3>
                <ul class="valueDescr">
                    <li>Save up to 60% of budget compared to local agencies</li>
                    <li>Less risky and more confidence in result</li>
                    <li>Only trusted, skilled, and experienced developers</li>
                    <li>No barriers in communication</li>
                    <li>Grow up your development resources at any time</li>
                    <li>Possibility to manage your team as you desire</li>
                </ul>
            </li>
        </ul>
    </div>
</div>

<div class="ourOffices">
    <div class="ourOfficesContent">
        <div class="containerWidth">
            <div class="ourOfficesContainer fade">
                <h2>Our Offices:</h2>
                <p>We believe that the IT excites the feelings, awakens consciousness and changes the World</p>
                <div class="contactsPageBlock">
                    <!--                    <div id="contactUSA" class="contact contactAdress">-->
                    <!--                        <p>computools usa</p><div class="address">Chicago, USA</div><div>Contacts</div>-->
                    <!--                        <div>Miroslav Alexandrovich<br/>VP of Sales, USA<br/>+1 224 202 0012</div>-->
                    <!--                    </div>-->
                    <div id="contactUkraine" class="contact contactAdress">
                        <p>Computools Ukraine</p><div class="address">Zaporizhia, Ukraine</div><div>Contacts</div>
                        <div>Grigorii Shadara<br/> CCO, Ukraine <br/><a href="skype:grigoriy_shadara" rel="nofollow" class="skypelinkcco"></a>+38 098 072 72 71</div>
                    </div>
                    <div id="contactCanadaNew" class="contact contactAdress">
                        <p>Computools Canada</p><div class="address">Winnipeg, Canada</div><div>Contacts</div>
                        <div>Denys Smolianytskyi<br/>VP of Sales, Canada<br/>+1 204 688 2743</div>
                    </div>
                    <div id="contactCanada" class="contact contactAdress">
                        <p>Computools Canada</p><div class="address">Laval, Canada</div><div>Contacts</div>
                        <div>Roger Marion<br/>VP of Sales, Canada  <br/>+1 514 823 9419</div>
                    </div>
                    <div id="contactGermany" class="contact contactAdress">
                        <p>Computools Germany</p><div class="address">Dresden, Germany</div><div>Contacts</div>
                        <div>Dr. Volodymyr V. Maslyuk<br/>VP of Sales, Germany<br/>+49 172 905 1193</div>
                    </div>
                    <div class="contactBtns">
                        <!--                        <div class="contactBtn contactBtnUSA">USA</div>-->
                        <div class="contactBtn contactBtnUkraine contactBtnActive">UKRAINE</div>
                        <div class="contactBtn contactBtnCanadaNew">Winnipeg, CANADA</div>
                        <div class="contactBtn contactBtnCanada">Laval, CANADA</div>
                        <div class="contactBtn contactBtnGermany">GERMANY</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="latest">
    <div class="latestContainer">
        <div id="sliderProjects">
            <ul>
                <li>
                    <div class="projectContent">
                        <div class="imgLatest beforeFadeInLeft"><img src="<?=template_url('img');?>cases/Mac.png" style="width: 742px;" alt="Some project"/></div>
                        <div class="projectContentDescription">
                            <!--                            <h2>Latest projects</h2>-->
                            <h2>Some of developed Projects</h2>
                            <p>Implementing new technologies, combined with creativeness and expertise our developers
                                successfully finished a lot of interesting and competitive projects.
                                Interested?
                            </p>
                            <p>Enjoy the reading!</p>
                            <div class="project">
                                <p class="proj_Name">Remote Desktop Driver</p>
                                <p class="proj_Descr">
                                    RDD is a system for remote control of Desktop using mobile devices.
                                    The main purpose of the project was the development of the cross-platform application for remote computer management.
                                    Our team developers and designers started the project with the creation of UI design from scratch.
                                </p>
                                <div class="technicList">
                                    <!--                                    <div><div>CLIENT</div>Shining Web</div>-->
                                    <div><div>TECHNOLOGY USED</div>Qt, Qt Designer, C++, SQLite, X11, Cocoa, WinAPI
                                    </div>
                                    <!--                                    <div><div>DELIVERED ON</div>31 December 2016</div>-->
                                </div>
                                <a class="quote" href="/case-studies/cpp/workplace-remote">View project</a>
                            </div>
                            <div class="projArrows">
                                <div class="projArrow projArrowLeft"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
                                <div class="projArrow projArrowRight"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="projectContent">
                        <div class="imgLatest beforeFadeInLeft"><img src="<?=template_url('img');?>technologies/latest_1.png" alt="Audio Task Manager"/></div>
                        <div class="projectContentDescription">
                            <!--                            <h2>Latest projects</h2>-->
                            <h2>Some of developed Projects</h2>
                            <p>Implementing new technologies, combined with creativeness and expertise our developers
                                successfully finished a lot of interesting and competitive projects.
                                Interested?
                            </p>
                            <p>Enjoy the reading!</p>
                            <div class="project">
                                <p class="proj_Name">Audio Task Manager</p>
                                <p class="proj_Descr">
                                    Audio Task Manager is the project for composers and clients. It’s a project management tool
                                    designed specifically for audio professionals. The main goal of the project was the creation
                                    of the tool to support joint audio projects of composers and their customers. The user-friendly
                                    interface was implemented, AJAX technology was chosen for the development.</p>
                                <!--                                <div class="technicList">-->
                                <!--                                    <div><div>CLIENT</div>Shining Web</div>-->
                                <!--                                    <div><div>TECHNOLOGY USED</div>HTML, CSS, HTML Audio API, Javascript, Jquery, Bootstrap, ava 8, Jetty, Spring, Hibernate, PostgreSQL, ffmpeg</div>-->
                                <!--                                    <div><div>DELIVERED ON</div>31 December 2016</div>-->
                                <!--                                </div>-->
                                <div class="technicListUl">
                                    <ul><li>CLIENT</li><li>Shining Web</li></ul>
                                    <ul><li>TECHNOLOGY USED</li>
                                        <li>HTML, CSS, HTML Audio API, Javascript, Jquery, Bootstrap, ava 8, Jetty, Spring, Hibernate, PostgreSQL, ffmpeg</li></ul>
                                    <ul><li>DELIVERED ON</li><li>31 December 2016</li></ul>
                                </div>
                                <a class="quote" href="/case-studies/java/audio-task-manager">View project</a>
                            </div>
                            <div class="projArrows">
                                <div class="projArrow projArrowLeft">
                                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                                </div>
                                <div class="projArrow projArrowRight">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <a class="quote" href="/case-studies">See all Case Studies</a>
</div>

<div class="clientsSlider fade">
    <h2>OUR CLIENTS</h2>
    <div class="wrapper">
        <input type="radio" name="point" id="slide1">
        <input type="radio" name="point" id="slide2" checked>
        <input type="radio" name="point" id="slide3">
        <div class="sliderClients">
            <div class="slides slide1">
                <ul>
                    <li><img src="<?=template_url('img');?>clients_logo/1.png" alt="BIZ"/></li>
                    <li><img src="<?=template_url('img');?>clients_logo/2.png" alt="Workplace Remote"/></li>
                    <li><img src="<?=template_url('img');?>clients_logo/3.png" alt="Jason Media"/></li>
                    <li><img src="<?=template_url('img');?>clients_logo/4.png" alt="Viewpoint"/></li>
                </ul>
            </div>
            <div class="slides slide2">
                <ul>
                    <li><img src="<?=template_url('img');?>clients_logo/5.png" alt="Pally Soft"/></li>
                    <li><img src="<?=template_url('img');?>clients_logo/6.png" alt="Employee Confidential"/></li>
                    <li><img src="<?=template_url('img');?>clients_logo/7.png" alt="Webifly"/></li>
                    <li><img src="<?=template_url('img');?>clients_logo/8.png" alt="Granat Studios"/></li>
                </ul>
            </div>
            <div class="slides slide3">
                <ul>
                    <li><img src="<?=template_url('img');?>clients_logo/9.png" alt="Itm house"/></li>
                    <li><img src="<?=template_url('img');?>clients_logo/10.png" alt="Innovazion"/></li>
                    <li><img src="<?=template_url('img');?>clients_logo/11.png" alt="Intellectsoft"/></li>
                    <li><img src="<?=template_url('img');?>clients_logo/12.png" alt="CRW-carparts"/></li>
                </ul>
            </div>
        </div>
        <div class="controls">
            <label for="slide1"></label>
            <label for="slide2"></label>
            <label for="slide3"></label>
        </div>
    </div>
</div>

<div id="form2" class="contactFormBlockMain pageLast">
    <div class="align">
        <div class="containerWidth">
            <!--            <h2>LET’S CREATE SOMETHING TRULY GREAT</h2>-->
            <h2>Let’s develop your Startup truly great</h2>
            <?php require '_freeQuote-validation.php'; ?>
            <form method="post" action="#modal-one" enctype="multipart/form-data">
                <div class="contactForm bottom">
                    <input type="text" name="name" required placeholder="Name">
                    <input type="email" name="email" required placeholder="Email">
                    <input type="hidden" name="marker" value="http://computoolsglobal.com/forstartup#form2">
                    <input type="file" name="attachments" class="attachFiles">
                    <textarea name="idea" required placeholder="Your task/idea"></textarea>
                    <div class="attachments bottom">
                        <div class="icon"><i class="fa fa-paperclip"></i></div>
                        <div class="attachFileName">Attach a file</div>
                    </div>
                </div>
                <div class="quoteContent">
                    <input type="submit" class="quote" value="Get a free Quote"><div>1</div>
                </div>
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
<?php include '_footer_menu.php';?>

<!-- Google Code for Remarketing Tag main -->
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
<noscript><div style="display:inline;"><img height="1" width="1" style="border-style:none;" alt="pagead" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/922620963/?value=0&amp;guid=ON&amp;script=0"/></div></noscript>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-72776162-1', 'auto');
    ga('send', 'pageview');

    $( document ).ready(function() {
        $('.attachments.top').on("click", function(){$('.top .attachFiles').click();});
        $('.top .attachFiles').change(function(e){$('.top .attachFileName').text($(this).val().split('\\').pop());});
        /*-----------------------------------------------------------------------*/
        $('.attachments.bottom').on("click", function(){$('.bottom .attachFiles').click();});
        $('.bottom .attachFiles').change(function(e){$('.bottom .attachFileName').text($(this).val().split('\\').pop());});
    });
    function openbox(id, marker, tt) {
        var div = document.getElementById(id);
        var tt_div = document.getElementById(headerForm);
        $('#popupForm input[name="marker"]').val(marker);
        if(div.style.display == 'block') {
            div.style.display = 'none';
        }
        else {
            div.style.display = 'block';
        }
    }
</script>
</body>
</html>