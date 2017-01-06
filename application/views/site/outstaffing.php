<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo template_url('img');?>favicon.png" type="image/x-icon">
    <title>Dedicated remote developers - Outstaffing - Computools</title>
    <meta name="description" content="Computools is professional outsourcing and outstaffing web, desktop, mobile application development company with research and development centres in Ukraine.">
    <script src="<?php echo template_url('js');?>jquery-1.11.3.min.js"></script>
    <link href="<?php echo template_url('css');?>main.css" rel="stylesheet">
    <link href="<?php echo template_url('css');?>main_parts.css" rel="stylesheet">
    <link href="<?php echo template_url('css');?>services.css" rel="stylesheet">
    <link href="<?php echo template_url('css');?>media.css" rel="stylesheet">
    <link href="<?php echo template_url('css');?>css/font-awesome.min.css" rel="stylesheet">
    <script src="<?php echo template_url('js');?>services.js" type="text/javascript"></script>
</head>
<body>
<div class="modalLoad"><div id="logoLoad"></div></div>
<!--for SEO--><h1 style="display: none;">Computools is professional outsourcing and outstaffing web, desktop, mobile application development company with research and development centres in Ukraine.</h1><!--for SEO-->
<div id="popupForm" class="contactFormSelect popupForm">
    <form id="headerForm" action="#modal-one" enctype="multipart/form-data" method="post">
        <div class="closeForm" onclick="openbox('popupForm')">×</div>
        <h2>Request CV of our Specialist</h2>

        <div class="contactForm top">
            <input type="text" name="name" required placeholder="Name">
            <input type="email" name="email" required placeholder="Email">
            <div class="selectTechnologyContainer">
                <div class="selectTechnologyDefault">Technologies</div>
                <div class="selectTechnologyList">
                    <div class="selectTechnology">Java</div>
                    <div class="selectTechnology">Scala</div>
                    <div class="selectTechnology">Angular</div>
                    <div class="selectTechnology">.Net</div>
                    <div class="selectTechnology">Wordpress</div>
                    <div class="selectTechnology">PHP</div>
                    <div class="selectTechnology">C++</div>
                    <div class="selectTechnology">IOS</div>
                    <div class="selectTechnology">Android</div>
                    <div class="selectTechnology">HTML5</div>
                    <div class="selectTechnology">CSS3</div>
                    <div class="selectTechnology">JS</div>
                    <div class="selectTechnology">NodeJS</div>
                    <div class="selectTechnology">Sketch</div>
                    <div class="selectTechnology">Magento</div>
                    <div class="selectTechnology">Objective-C</div>
                    <div class="selectTechnology">Photoshop</div>
                    <div class="selectTechnology">Swift</div>
                </div>
            </div>
            <input type="file" name="attachments" class="attachFiles">
            <input type="hidden" name="marker" value="http://computoolsglobal.com/outstaffing#form1">
            <textarea name="idea" required placeholder="Your task/idea"></textarea>
            <div class="attachments top">
                <div class="icon"><i class="fa fa-paperclip"></i></div>
                <div class="attachFileName">Attach a file</div>
            </div>
        </div>
        <div class="quoteContent">
            <input type="submit" class="quote" value="Get CV"><div>1</div>
        </div>
    </form>
</div>

<div id="form1" class="serviseDevMain head">
    <div class="headerContainerWidth">
        <div id="headerMainIndexPage" class="activeLinkMain"><?php include '_header_menu.php';?></div>
    </div>
    <div class="headAlign">
        <div class="aboutUsHeadContainer fade">
            <h2>Do you need additional developers into your team?<br/>
                Do you experience the lack of expertise in some technologies?
            </h2>
            <div class="get">Get dedicated remote developer right now! Start by clicking "Get CV"
                <div class="checkCv">
                    <img src="<?=template_url('img');?>technologies/cv_arrow.png" alt="Get CV"/>
                    <a class="quote" href="#" onclick="openbox('popupForm', 'Page: Outstaffing; Point : need additional developers');return false;">Get CV</a>
                </div>
            </div>

        </div>
    </div>
    <div id="more" class="scrollDown">
        <img src="<?=template_url('img');?>pc-mouse.png" alt="Scroll Down"/><div>Scroll Down</div>
    </div>
</div>

<div class="partner next">
    <div class="containerWidth">
        <h2>We are the professional outstaffing Partner</h2>
        <ul class="fade">
            <li><p>developers</p><hr/><div>50+</div></li>
            <li><p>customers</p><hr/><div>150+</div></li>
            <li><p>successful projects</p><hr/><div>200+</div></li>
            <li><p>experience</p><hr/><div>7+<br/><span>years</span></div></li>
        </ul>
    </div>
</div>

<div class="model  page">
    <div class="align">
        <div class="containerWidth">
            <h2>We work on outstaffing Model with</h2>
            <ul>
                <li class="jump">
                    <img src="<?=template_url('img');?>technologies/outstaff_model1_2.png" alt="Outsourcing Software Development Companies"/>
                    <h3>Outsourcing Software<br/>
                        Development Companies</h3>
                    <p>Transfer portions of work to outside suppliers and put your idea into action! Our experienced developers help you to reach your development goals.</p>
                </li>
                <li class="jump">
                    <img src="<?=template_url('img');?>technologies/outstaff_model2_2.png" alt="Software Product Companies"/>
                    <h3>Software Product<br/>
                        Companies</h3>
                    <p>Make your business prosper! Our team of professionals investigates the market to develop competitive products for you.</p>
                </li>
                <li class="jump">
                    <img src="<?=template_url('img');?>technologies/outstaff_model3_2.png" alt="Companies with IT Departments"/>
                    <h3>Companies with<br/>
                        IT Departments</h3>
                    <p>Ensure security of your departments! Our dedicated developers provide you with technical support, secure work environment and offer you the best solutions for data management.</p>
                </li>
            </ul>
            <a class="quote" href="#" onclick="openbox('popupForm', 'Page: Outstaffing; Point : We WORK ON THE OUTSTAFFING MODEL WITH');return false;">Get CV</a>
        </div>
    </div>
</div>

<div class="logoTechnologies page">
    <div class="align">
        <div class="containerWidth">
            <h2>What we are experienced in</h2>
            <p>We use the newest development technologies and approaches to solve our client's tasks</p>
            <ul class="logoTechnList">
                <li class="jump"><img src="<?=template_url('img');?>technologies/Java_logo.png" alt="Java"><p>Java</p></li>
                <li class="jump"><img src="<?=template_url('img');?>technologies/Scala_logo.png" alt="Scala"><p>Scala</p></li>
                <li class="jump"><img src="<?=template_url('img');?>technologies/AngularJS-Shield-large-282x300.png" alt="Angular"><p>Angular</p></li>
                <li class="jump"><img src="<?=template_url('img');?>technologies/Microsoft_net.png" alt=".Net"><p>.Net</p></li>
                <li class="jump"><img src="<?=template_url('img');?>technologies/wp.png" alt="Wordpress"><p>Wordpress</p></li>
                <li class="jump"><img src="<?=template_url('img');?>technologies/logo1.png" alt="PHP"><p>PHP</p></li>
                <li class="jump"><img src="<?=template_url('img');?>technologies/C_plus_plus.png" alt="C++"><p>C++</p></li>
                <li class="jump"><img src="<?=template_url('img');?>technologies/ios_logo.png" alt="IOS"><p>IOS</p></li>
                <li class="jump"><img src="<?=template_url('img');?>technologies/logo-android.png" alt="Android"><p>Android</p></li>
                <li class="jump"><img src="<?=template_url('img');?>technologies/HTML5_Logo.png" alt="HTML5"><p>HTML5</p></li>
                <li class="jump"><img src="<?=template_url('img');?>technologies/css3.png" alt="CSS3"><p>CSS3</p></li>
                <li class="jump"><img src="<?=template_url('img');?>technologies/js.png" alt="JS"><p>JS</p></li>
                <li class="jump"><img src="<?=template_url('img');?>technologies/node.png" alt="NodeJS"><p>NodeJS</p></li>
                <li class="jump"><img src="<?=template_url('img');?>technologies/scetch.png" alt="Sketch"><p>Sketch</p></li>
                <li class="jump"><img src="<?=template_url('img');?>technologies/magenta.png" alt="Magento"><p>Magento</p></li>
                <li class="jump"><img src="<?=template_url('img');?>technologies/obj_c.png" alt="Objective-C"><p>Objective-C</p></li>
                <li class="jump"><img src="<?=template_url('img');?>technologies/ps.png" alt="Photoshop"><p>Photoshop</p></li>
                <li class="jump"><img src="<?=template_url('img');?>technologies/swift.png" alt="Swift"><p>Swift</p></li>
            </ul>
            <div class="containerWidth" style="padding-bottom: 30px">
                <a class="quote" href="#" onclick="openbox('popupForm', 'Page: Outstaffing; Point : ARE EXPERIENCED IN');return false;">Get CV</a>
            </div>
        </div>
    </div>
</div>

<!--<div class="developers">-->
<!--    <div class="containerWidth">-->
<!--        <h2>Choose Developer according your tasks:</h2>-->
<!--        <ul>-->
<!--            <li>-->
<!--                <div class="photoContainer">-->
<!--                    <!--                    <div style="background-color: #00acde; width: 100%; height: 100%;">-->
<!--                    <img src="--><?//=template_url('img');?><!--technologies/profile3.jpg">-->
<!--                    <!--                    </div>-->
<!--                </div>-->
<!--                <div class="character">-->
<!--                    <div>Ben Avoda <span><img src="--><?//=template_url('img');?><!--technologies/AngularJS-Shield-large-282x300.png"></span></div>-->
<!--                    <p>Technologies:</p>-->
<!--                    <div class="knowlege">-->
<!--                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.-->
<!--                    </div>-->
<!--                    <p>Expirience:</p>-->
<!--                    <div class="experience">-->
<!--                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.-->
<!--                    </div>-->
<!--                    <div class="devLinks">-->
<!--                        <a class="quote">Hire</a>-->
<!--                        <a class="getLink" href="#" onclick="openbox('popupForm', 'Page: Outstaffing; Point : Choose Developer according tasks');return false;">Get CV</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </li>-->
<!--            <li>-->
<!--                <div class="photoContainer">-->
<!--                    <!--                    <div style="background-color: #00acde; width: 100%; height: 100%;">-->
<!--                    <img src="--><?//=template_url('img');?><!--technologies/profile1.jpg">-->
<!--                    <!--                    </div>-->
<!--                </div>-->
<!--                <div class="character">-->
<!--                    <div>Ben Avoda <span><img src="--><?//=template_url('img');?><!--technologies/ios_logo.png"></span></div>-->
<!--                    <p>Technologies:</p>-->
<!--                    <div class="knowlege">-->
<!--                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.-->
<!--                    </div>-->
<!--                    <p>Expirience:</p>-->
<!--                    <div class="experience">-->
<!--                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.-->
<!--                    </div>-->
<!--                    <div class="devLinks">-->
<!--                        <a class="quote">Hire</a>-->
<!--                        <a class="getLink" href="#" onclick="openbox('popupForm', 'Page: Outstaffing; Point : Choose Developer according tasks');return false;">Get CV</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </li>-->
<!--        </ul>-->
<!--    </div>-->
<!--</div>-->

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

<div id="form2" class="contactFormBlockMain contactFormSelect pageLast">
    <div class="align">
        <div class="containerWidth">
            <h2>Request CV of our Specialist</h2>
            <?php require '_freeQuote-validation.php'; ?>
            <form method="post" action="#modal-one" enctype="multipart/form-data">
                <div class="contactForm bottom">
                    <input type="text" name="name" required placeholder="Name">
                    <input type="email" name="email" required placeholder="Email">
                    <div class="selectTechnologyContainer">
                        <div class="selectTechnologyDefault">Technologies</div>
                        <div class="selectTechnologyList">
                            <div class="selectTechnology">Java</div>
                            <div class="selectTechnology">Scala</div>
                            <div class="selectTechnology">Angular</div>
                            <div class="selectTechnology">.Net</div>
                            <div class="selectTechnology">Wordpress</div>
                            <div class="selectTechnology">PHP</div>
                            <div class="selectTechnology">C++</div>
                            <div class="selectTechnology">IOS</div>
                            <div class="selectTechnology">Android</div>
                            <div class="selectTechnology">HTML5</div>
                            <div class="selectTechnology">CSS3</div>
                            <div class="selectTechnology">JS</div>
                            <div class="selectTechnology">NodeJS</div>
                            <div class="selectTechnology">Sketch</div>
                            <div class="selectTechnology">Magento</div>
                            <div class="selectTechnology">Objective-C</div>
                            <div class="selectTechnology">Photoshop</div>
                            <div class="selectTechnology">Swift</div>
                        </div>
                    </div>
                    <input type="hidden" name="marker" value="http://computoolsglobal.com/outstaffing#form2">
                    <input type="file" name="attachments" class="attachFiles">
                    <textarea name="idea" required placeholder="Your task/idea"></textarea>
                    <div class="attachments bottom">
                        <div class="icon"><i class="fa fa-paperclip"></i></div>
                        <div class="attachFileName">Attach a file</div>
                    </div>
                </div>
                <div class="quoteContent">
                    <input type="submit" class="quote" value="Get CV">
                    <div>1</div>
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