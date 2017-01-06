<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?=template_url('css');?>main.min.css" rel="stylesheet">
    <link href="<?php echo template_url('css');?>media.min.css" rel="stylesheet">
    <link href="<?=template_url('css');?>expertise.min.css" rel="stylesheet">
    <link href="<?php echo template_url('css');?>css/font-awesome.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?=template_url('img');?>favicon.png" type="image/x-icon">
    <title>Mobile Applications | COMPUTOOLS</title>
    <script src="<?=template_url('js');?>jquery-1.11.3.min.js"></script>
    <script src="<?=template_url('js');?>main.js" type="text/javascript"></script>
    <script src="<?=template_url('js');?>mobile.js" type="text/javascript"></script>
</head>
<body>
<div class="modalLoad"><div id="logoLoad"></div></div>
<?php include '_header_menu.php';?>
<div id="mobHeaderTop">
    <div id="mobHeadDot">
        <div class="sliderBack">
            <h3>Mobile App Development</h3><h1>from the Team of Experts</h1>
        </div>
    </div>
</div>
<div class="mobPageContainer">
    <div id="mobAdvantages" class="mobAdvantages page">
        <div class="align">
            <div class="mobAdvContent containerWidth">
                <h2>Our Advantages</h2>
                <div class="mobAdvantage">
                    <div class="mobAdvLine">
                        <div class="mobAdv">
                            <img src="<?=template_url('img');?>loupe.png" alt="advantage">
                            <div class="mobAdvName">
                                <h2>Latest Technologies</h2><p>Our Company develops Android, IOS,
                                    WinPhone Applications of any Complexity, Providing the final Product of the highest Quality</p>
                            </div>
                        </div>
                        <div class="mobAdv">
                            <img src="<?=template_url('img');?>applic.png" alt="advantage">
                            <div class="mobAdvName">
                                <h2>Integrated Solution</h2><p>Working with us, you will receive a complete Application, which will work together
                                    with your Website or Desktop Application</p>
                            </div>
                        </div>
                        <div class="mobAdv">
                            <img src="<?=template_url('img');?>50.png" alt="advantage">
                            <div class="mobAdvName">
                                <h2>More than 15 000 Hours of Coding</h2><p>We have already worked on a huge Number of Projects connected
                                    with the Mobile Development</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="mobAdv">
                            <img src="<?=template_url('img');?>individual.png" alt="advantage">
                            <div class="mobAdvName">
                                <h2>Individual Approach</h2><p>Is your project a complicated technical Task or is it more Entertaining App
                                    for Recreation? Do not worry, we will find the unique Solution of your Problem</p>
                            </div>
                        </div>
                        <div class="mobAdv">
                            <img src="<?=template_url('img');?>creative.png" alt="advantage">
                            <div class="mobAdvName">
                                <h2>Creative Solutions</h2><p>Despite the large Number of Projects, we never repeat the same, so that your Product
                                    will be always Unique</p>
                            </div>
                        </div>
                        <div class="mobAdv">
                            <img src="<?=template_url('img');?>_team.png" alt="advantage">
                            <div class="mobAdvName">
                                <h2>Experienced Team</h2><p>We work in the Field of IT-Development and applying to us, you will absolutely get a
                                    Quality Product</p>
                            </div>
                        </div>
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
    <div class="portfolioContainer portfolioContainerMob">
        <h2>Mobile Portfolio</h2>
        <div class="portfolioContainerImage"><img src="<?=template_url('img');?>portfolio_mobile.jpg" alt="case"/></div>
<!--        <a href="/work/filters/type-mobile%20application"><div class="seeWorks">see more</div></a>-->
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
                        <input type="hidden" name="marker" value="http://computoolsglobal.com/mobile#form">
                        <input type="file" name="attachments" class="attachFiles">
                        <textarea name="idea" required placeholder="Your task/idea"></textarea>
                        <div class="attachments bottom">
                            <div class="icon"><i class="fa fa-paperclip"></i></div>
                            <div class="attachFileName">Attach a file</div>
                        </div>
                    </div>
                    <div class="quoteContent">
                        <input type="submit" class="quote" value="Get a free Quote">
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
</div>
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
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
<noscript>
    <div style="display:inline;"><img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/922620963/?value=0&amp;guid=ON&amp;script=0"/></div>
</noscript>
</body>
</html>