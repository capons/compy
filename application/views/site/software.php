<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?=template_url('css');?>main.min.css" rel="stylesheet">
    <link href="<?php echo template_url('css');?>media.min.css" rel="stylesheet">
    <link href="<?=template_url('css');?>expertise.min.css" rel="stylesheet">
    <link href="<?php echo template_url('css');?>css/font-awesome.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?=template_url('img');?>favicon.png" type="image/x-icon">
    <title>Software Applications | COMPUTOOLS</title>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="<?=template_url('js');?>jquery-1.11.3.min.js"></script>
    <script src="<?=template_url('js');?>main.js" type="text/javascript"></script>
    <script src="<?=template_url('js');?>desk.js" type="text/javascript"></script>
</head>
<body>
<div class="modalLoad"><div id="logoLoad"></div></div>
<?php include '_header_menu.php';?>
<div id="deskHeaderTop">
    <div id="deskHeadDot">
        <div class="sliderBack fade">
            <h3>Desktop App Development</h3>
            <h1>from the Team of Experts</h1>
        </div>
    </div>
</div>
<div id="deskTechnology" class="keyAnchor">
    <div class="deskTechnContainer">
        <h2>The most advanced Technologies</h2>
        <p>We use the latest Technologies in the Field of Desktop Development in order to<br/>keep up to Date with the Progress and to make your Life easier</p>
        <div class="deskTechnList fade">
            <div class="technologyDesktop jump">
                <img src="<?=template_url('img');?>c++.png" alt="c++">
                <div class="technologyDesktopName">#QT5 #WinApi #STL #SDL #Boost #OpenGL #FFmpeg #X11 #MFC #ATL</div>
            </div>
            <div class="technologyDesktop jump">
                <img src="<?=template_url('img');?>csharp.png" alt="c#">
                <div class="technologyDesktopName">#WinForm #WPF #XAML #XNA #4.0WCF</div>
            </div>
            <div class="technologyDesktop jump">
                <img src="<?=template_url('img');?>java.png" alt="java">
                <div class="technologyDesktopName">#JavaFX #AWT #SWT #JavaSE</div>
            </div>
        </div>
    </div>
</div>
<div id="appCategories" class="appCategories">
<!--    <div class="align">-->
        <div class="appCatContent containerWidth fade">
            <h2>Application Category</h2>
            <p class="hidden">We create Applications for different Areas and for sSolving various Tasks</p>
            <div class="categories">
                <div class="category">
                    <img src="<?=template_url('img');?>crossp.png" alt="category"/>
                    <div class="catName">Cross-platform Applications of any Complexity</div>
                </div>
                <div class="category">
                    <img src="<?=template_url('img');?>windows.png" alt="category"/>
                    <div class="catName">Specialized Applications for OS Windows</div>
                </div>
                <div class="category">
                    <img src="<?=template_url('img');?>libr.png" alt="category"/>
                    <div class="catName">Almost all Kinds of Libraries, including Server Libraries</div>
                </div>
            </div>
        </div>
<!--    </div>-->
</div>
<div id="advantages" class="advantages">
    <div class="advContent">
        <h2>Our Advantages</h2>
        <p>We try not just to keep up with the Progress, but also to outstrip it, constantly <br>Studying the latest Trends in Desktop Development</p>
        <div class="advantage">
            <div class="adv jump">
                <img src="<?=template_url('img');?>crosst.png" alt="advantage"/>
                <div class="advName">
                    <h2>Cross-platform Technologies</h2>
                    <p>We use Cross-platform Technologies to reduce the Time and your Expenses</p>
                </div>
            </div>
            <div class="adv jump">
                <img src="<?=template_url('img');?>loupe.png" alt="advantage"/>
                <div class="advName">
                    <h2>The Search for new solutions</h2>
                    <p>We are looking for an individual Way to solve your Problem</p>
                </div>
            </div>
            <div class="adv jump">
                <img src="<?=template_url('img');?>applic.png" alt="advantage"/>
                <div class="advName">
                    <h2>Complete Solution of the Problem</h2>
                    <p>We provide a complete Solution of the Problem with Mobile and Web Application</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="webHowWorks" class="keyAnchor page">
    <div class="align">
        <!--                <div>-->
        <div class="schContent containerWidth">
            <h2>Scheme of the Work with us</h2>
            <ul class="phases">
                <li class="analisPhase fade">
                    <div class="phaseHead">Analisys Phase</div>
                    <div class="phaseContent">
                        <img src="<?=template_url('img');?>scheme_loupe.png" alt="phase"/>
                        <ul class="phaseSteps">
                            <li>Analyze Requirements</li>
                            <li>Price Quote</li>
                            <li>Document Specifications</li>
                        </ul>
                    </div>
                </li>
                <li class="developPhase fade">
                    <div class="phaseHead">Development Phase</div>
                    <img src="<?=template_url('img');?>scheme_cog.png" style="transform: rotate(233deg);margin: 8px 0 -20px;" alt="phase"/>
                    <ul class="phaseSteps">
                        <li>Design Look & Feel</li>
                        <li>Design Database & Architecture</li>
                        <li>Programming</li>
                        <li>Testing</li>
                        <li>Bug Fixing</li>
                    </ul>
                </li>
                <li class="mainPhase fade">
                    <div class="phaseHead">Maintenance Phase</div>
                    <img src="<?=template_url('img');?>scheme_maintenance.png" alt="phase"/>
                    <ul class="phaseSteps">
                        <li>Deployment</li>
                        <li>Maintenance & Support</li>
                        <li>Enhancements</li>
                    </ul>
                </li>
            </ul>
        </div>
        <!--                </div>-->
    </div>
</div>
<div class="portfolioContainer portfolioContainerDesktop">
    <h2>Desktop Portfolio</h2>
    <div class="portfolioContainerImage fade">
        <img src="<?=template_url('img');?>portfolio_desktop.jpg" alt="case"/>
    </div>
<!--    <a href="/work/filters/type-desktop%20software"><div class="seeWorks">see more</div></a>-->
    <a href="/case-studies"><div class="seeWorks">See more</div></a>
</div>
<div id="form" class="contactFormBlockMain pageLast">
    <div class="align">
        <div class="containerWidth">
            <h2>Let’s create something truly great</h2>
            <?php require '_freeQuote-validation.php'; ?>
            <form method="post" action="#modal-one" enctype="multipart/form-data">
                <div class="contactForm bottom">
                    <input type="text" name="name" required placeholder="Name">
                    <input type="email" name="email" required placeholder="Email">
                    <input type="hidden" name="marker" value="http://computoolsglobal.com/software#form">
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
    $( document ).ready(function() {
        $('.attachments.top').on("click", function(){$('.top .attachFiles').click();});
        $('.top .attachFiles').change(function(e){$('.top .attachFileName').text($(this).val().split('\\').pop());});
        /*-----------------------------------------------------------------------*/
        $('.attachments.bottom').on("click", function(){$('.bottom .attachFiles').click();});
        $('.bottom .attachFiles').change(function(e){$('.bottom .attachFileName').text($(this).val().split('\\').pop());});
    });
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
    <div style="display:inline;"><img height="1" width="1" style="border-style:none;" alt="pagead" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/922620963/?value=0&amp;guid=ON&amp;script=0"/></div>
</noscript>
</body>
</html>