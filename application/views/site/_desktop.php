<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?=template_url('css');?>main.css" rel="stylesheet">
    <link href="<?php echo template_url('css');?>media.css" rel="stylesheet">
    <link href="<?=template_url('css');?>expertise.css" rel="stylesheet">
    <link href="<?php echo template_url('css');?>css/font-awesome.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?=template_url('img');?>favicon.png" type="image/x-icon">
    <title>Desktop Applications | COMPUTOOLS</title>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="<?=template_url('js');?>jquery-1.11.3.min.js"></script>
    <script src="<?=template_url('js');?>main.js" type="text/javascript"></script>
    <!--    <script src="--><?//=template_url('js');?><!--carousel.js" type="text/javascript"></script>-->
    <script src="<?=template_url('js');?>desk.js" type="text/javascript"></script>
</head>
<body>
<?php include '_header_menu.php';?>
<div id="deskHeaderTop">
    <div id="deskHeadDot">
        <div class="sliderBack">
            <h3>desktop app development</h3>
            <h1>from a team of experts</h1>
        </div>
    </div>
</div>
<div id="deskTechnology" class="keyAnchor">
    <div class="deskTechnContainer">
        <h2>the most advanced technologies</h2>
        <p>We use the latest technologies in the field of desktop development in order to<br/>keep up to date with the progress and to make your life easier</p>
        <div class="deskTechnList">
            <div class="technologyDesktop">
                <img src="<?=template_url('img');?>c++.png">
                <div class="technologyDesktopName">#QT5 #WinApi #STL #SDL #Boost #OpenGL #FFmpeg #X11 #MFC #ATL</div>
            </div>
            <div class="technologyDesktop">
                <img src="<?=template_url('img');?>csharp.png">
                <div class="technologyDesktopName">#WinForm #WPF #XAML #XNA #4.0WCF</div>
            </div>
            <div class="technologyDesktop">
                <img src="<?=template_url('img');?>java.png">
                <div class="technologyDesktopName">#JavaFX #AWT #SWT #JavaSE</div>
            </div>
        </div>
    </div>
</div>
<div id="appCategories" class="appCategories">
    <div class="appCatContent">
        <h2>application category</h2>
        <p class="hidden">We create applications for different areas and for solving various tasks</p>
        <div class="categories">
            <div class="category">
                <img src="<?=template_url('img');?>crossp.png">
                <div class="catName">Cross-platform applications of any complexity</div>
            </div>
            <div class="category">
                <img src="<?=template_url('img');?>windows.png">
                <div class="catName">Specialized applications for OS Windows</div>
            </div>
            <div class="category">
                <img src="<?=template_url('img');?>libr.png">
                <div class="catName">Almost all kinds of libraries, including server libraries</div>
            </div>
        </div>
    </div>
</div>
<div id="advantages" class="advantages">
    <div class="advContent">
        <h2>our advantages</h2>
        <p>We try not just to keep up with the progress, but also to outstrip it, constantly <br>studying the latest trends in desktop development</p>
        <div class="advantage">
            <div class="adv">
                <img src="<?=template_url('img');?>crosst.png">
                <div class="advName">
                    <h2>Cross-platform technologies</h2>
                    <p>We use cross-platform technologies to reduce the time and your expenses</p>
                </div>
            </div>
            <div class="adv">
                <img src="<?=template_url('img');?>loupe.png">
                <div class="advName">
                    <h2>The search for new solutions</h2>
                    <p>We are looking for an individual way to solve your problem</p>
                </div>
            </div>
            <div class="adv">
                <img src="<?=template_url('img');?>applic.png">
                <div class="advName">
                    <h2>Complete solution of the problem</h2>
                    <p>We provide a complete solution of the problem with mobile and web application</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="webHowWorks">
    <div class="schContent">
        <h2>scheme of work with us</h2>
        <ul class="phases">
            <li class="analisPhase">
                <div class="phaseHead">analisys phase</div>
                <div class="phaseContent">
                    <img src="<?=template_url('img');?>scheme_loupe.png"/>
                    <ul class="phaseSteps">
                        <li>analyze requirements</li><li>price quote</li><li>document specifications</li>
                    </ul>
                </div>
            </li>
            <li class="developPhase">
                <div class="phaseHead">development phase</div>
                <img src="<?=template_url('img');?>scheme_cog.png" style="transform: rotate(233deg);margin: 8px 0 -20px;"/>
                <ul class="phaseSteps">
                    <li>design look & feel</li><li>design database & architecture</li><li>programming</li><li>testing</li><li>bug fixing</li>
                </ul>
            </li>
            <li class="mainPhase">
                <div class="phaseHead">maintenance phase</div>
                <img src="<?=template_url('img');?>scheme_maintenance.png"/>
                <ul class="phaseSteps">
                    <li>deployment</li><li>maintenance & support</li><li>enhancements</li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<div class="portfolioContainer portfolioContainerDesktop">
    <h2>desktop portfolio</h2>
    <div class="portfolioContainerImage">
        <img src="<?=template_url('img');?>portfolio_desktop.jpg" alt=""/>
    </div>
    <a href="/work/filters/type-desktop%20software"><div class="seeWorks">see more</div></a>
</div>
<div class="contactFormBlockMain pageLast">
    <div class="align">
        <div class="containerWidth">
            <h2>LET’S CREATE SOMETHING TRULY GREAT</h2>
            <?php require '_freeQuote-validation.php'; ?>
            <form method="post" action="#modal-one" enctype="multipart/form-data">
                <div class="contactForm bottom">
                    <input type="text" name="name" required placeholder="Name">
                    <input type="email" name="email" required placeholder="Email">
                    <input type="hidden" name="marker" value="forstartup-bottom">
                    <input type="file" name="attachments" class="attachFiles">
                    <textarea name="idea" required placeholder="Your task/idea"></textarea>
                    <div class="attachments bottom">
                        <div class="icon"><i class="fa fa-paperclip"></i></div>
                        <div class="attachFileName">Attach a file</div>
                    </div>
                </div>
                <div class="quoteContent">
                    <input type="submit" class="quote" value="GET A FREE QUOTE">
                    <div>1</div>
                </div>
            </form>
            <div class="modal" id="modal-one" aria-hidden="true">
                <div class="modal-dialog">
                    <img src="<?=template_url('img');?>logoSent.png">
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
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
    <div style="display:inline;"><img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/922620963/?value=0&amp;guid=ON&amp;script=0"/></div>
</noscript>
</body>
</html>