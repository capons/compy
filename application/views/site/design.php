<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?=template_url('css');?>main.min.css" rel="stylesheet">
    <link href="<?php echo template_url('css');?>media.min.css" rel="stylesheet">
    <link href="<?=template_url('css');?>expertise.min.css" rel="stylesheet">
    <link href="<?php echo template_url('css');?>css/font-awesome.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?=template_url('img');?>favicon.png" type="image/x-icon">
    <title> Graphical Design | COMPUTOOLS </title>
    <script src="<?=template_url('js');?>jquery-1.11.3.min.js"></script>
    <script src="<?=template_url('js');?>main.js" type="text/javascript"></script>
    <script src="<?=template_url('js');?>carousel.js" type="text/javascript"></script>
    <script src="<?=template_url('js');?>design.js" type="text/javascript"></script>
</head>
<body>
<div class="modalLoad"><div id="logoLoad"></div></div>
<?php include '_header_menu.php';?>
<div id="designPage">
    <div class="designSlider">
        <div id="desHeadDot">
            <div class="sliderBack fade">
                <h3>Graphic Design</h3><h1>from the Team of Experts</h1>
            </div>
        </div>
    </div>
    <div class="designPageContainer">
        <div class="designTechsContainer">
            <div id="designTechs" class="keyAnchor">
                <h2>We create</h2>
                <div class="createList fade">
                    <div class="createListItem development"><span class="imgDev"></span>
                        <div class="createName">Development of Brandname Style and Brand-book</div>
                    </div>
                    <div class="createListItem experience"><span class="imgExp"></span>
                        <div class="createName">User Experience and User Interface Design, responsive Design</div>
                    </div>
                    <div class="createListItem creation"><span class="imgCre"></span>
                        <div class="createName">Creation of Logotype of trade Mark, other Signs and Symbols</div>
                    </div>
                </div>
            </div>
        </div>
        <div id="designWeWork" class="keyAnchor">
            <h2>How we create Design?</h2>
            <div class="schemeIdea fade"></div>
        </div>
        <div class="page designTechs">
            <div class="align">
                <div class="designTechsContainer containerWidth">
                    <div id="designTechs" class="keyAnchor">
                        <h2>The most Advantage Technologies</h2>
                        <div class="iconRow">
                            <div class="iconRowItem itemPs jump">
                                <div class="iconRowItemImg ps"></div>
                                <div class="iconRowItemDescr">adobe<br/>photoshop</div>
                            </div>
                            <div class="iconRowItem jump">
                                <div class="iconRowItemImg ze"></div>
                                <div class="iconRowItemDescr">zeplin</div>
                            </div>
                            <div class="iconRowItem jump">
                                <div class="iconRowItemImg sk"></div>
                                <div class="iconRowItemDescr">sketch</div>
                            </div>
                            <div class="iconRowItem jump">
                                <div class="iconRowItemImg hy"></div>
                                <div class="iconRowItemDescr">hype</div>
                            </div>
                            <div class="iconRowItem itemAi jump" id="1">
                                <div class="iconRowItemImg ai"></div>
                                <div class="iconRowItemDescr">adobe<br/>illustrator</div>
                            </div>
                            <div class="iconRowItem itemId jump">
                                <div class="iconRowItemImg id"></div>
                                <div class="iconRowItemDescr">adobe<br/>indesign</div>
                            </div>
                            <div class="iconRowItem itemDw jump">
                                <div class="iconRowItemImg dw"></div>
                                <div class="iconRowItemDescr">adobe<br/>dreamweaver</div>
                            </div>
                            <div class="iconRowItem itemAn jump">
                                <div class="iconRowItemImg an"></div>
                                <div class="iconRowItemDescr">adobe<br/>edge animate</div>
                            </div>
                            <div class="iconRowItem itemRf jump">
                                <div class="iconRowItemImg rf"></div>
                                <div class="iconRowItemDescr">adobe<br/>edge reflow</div>
                            </div>
                            <div class="iconRowItem itemLr jump">
                                <div class="iconRowItemImg lr"></div>
                                <div class="iconRowItemDescr">adobe<br/>lightroom</div>
                            </div>
                            <div class="iconRowItem itemBr jump">
                                <div class="iconRowItemImg br"></div>
                                <div class="iconRowItemDescr">adobe<br/>bridge</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="portfolioContainer portfolioContainerMob page">
            <div class="align">
                <div class="containerWidth">
                    <h2>Design Portfolio</h2>
                    <ul>
                        <li>
                            <ul class="fade">
                                <li><img src="<?=template_url('img');?>portfolio_design_1.jpg" alt="case"/></li>
                                <li><img src="<?=template_url('img');?>portfolio_design_2.jpg" alt="case"/></li>
                            </ul>
                        </li>
                        <li class="desktopImg fade"><img src="<?=template_url('img');?>portfolio_design_3.jpg" alt="case"/></li>
                    </ul>
                    <!--            <a href="/work/filters/type-design"><div class="seeWorks">see more</div></a>-->
                    <a href="/case-studies/ui-design"><div class="seeWorks">See more</div></a>
                </div>
            </div>
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
                            <input type="hidden" name="marker" value="http://computoolsglobal.com/design#form">
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
    </div>
</div>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-66007564-1', 'auto');
    ga('send', 'pageview');
    $( document ).ready(function() {
        $('.attachments.top').on("click", function(){$('.top .attachFiles').click();});
        $('.top .attachFiles').change(function(e){$('.top .attachFileName').text($(this).val().split('\\').pop());});
        /*-----------------------------------------------------------------------*/
        $('.attachments.bottom').on("click", function(){$('.bottom .attachFiles').click();});
        $('.bottom .attachFiles').change(function(e){$('.bottom .attachFileName').text($(this).val().split('\\').pop());});
    });
</script>
</body>
</html>