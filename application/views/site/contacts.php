<?php session_start();?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?=template_url('css');?>main.min.css" rel="stylesheet">
    <link href="<?=template_url('css');?>media.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?=template_url('img');?>favicon.png" type="image/x-icon">
    <title>Computools Ukraine, Canada, Germany Contact Details</title>
    <script src="<?=template_url('js');?>jquery-1.11.3.min.js"></script>
    <script src="<?=template_url('js');?>main.js" type="text/javascript"></script>
    <link href="<?php echo template_url('css');?>css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<div class="modalLoad"><div id="logoLoad"></div></div>
<div id="contactsBack" class="contactsOverlay page">
    <div class="headerContainerWidth">
        <div id="headerMainIndexPage"><?php include '_header_menu.php';?></div>
    </div>
    <div class="align">
        <div class="containerWidth">
            <div class="contactFormBlockMain">
                <!--for SEO--><h1 style="display: none;">Contact Us - Computools Ukraine, Canada, Germany Contact Details</h1><!--for SEO-->
                <h2>Contact Us</h2>
                <h2>Get in touch! We can't wait to start working with you!</h2>
                <div class="contactsPageBlock">
<!--                    <div id="contactUSA" class="contact contactAdress">-->
<!--                        <p>computools usa</p><div class="address">Chicago, USA</div>-->
<!--                        <div>Contacts</div>-->
<!--                        <div class="person">-->
<!--                            <span>Miroslav Alexandrovich</span><br/>VP of Sales, USA<br/>+1 224 202 0012-->
<!--                        </div>-->
<!--                    </div>-->
                    <div id="contactUkraine" class="contact contactAdress">
                        <p>Computools Ukraine</p><div class="address">Zaporizhia, Ukraine</div>
                        <div>Contacts</div>
                        <div class="person">
                            <span>Grigorii Shadara</span><br/> CCO, Ukraine <br/><a href="skype:grigoriy_shadara" rel="nofollow" class="skypelinkcco"></a>+38 098 072 72 71
                        </div>
                    </div>
                    <div id="contactCanadaNew" class="contact contactAdress">
                        <p>Computools Canada</p><div class="address">Winnipeg, Canada</div>
                        <div>Contacts</div>
                        <div class="person">
                            <span>Denys Smolianytskyi</span><br/>VP of Sales, Canada<br/>+1 204 688 2743
                        </div>
                    </div>
                    <div id="contactCanada" class="contact contactAdress">
                        <p>Computools Canada</p><div class="address">Laval, Canada</div>
                        <div>Contacts</div>
                        <div class="person">
                            <span>Roger Marion</span><br/>VP of Sales, Canada  <br/>+1 514 823 9419
                        </div>
                    </div>
                    <div id="contactGermany" class="contact contactAdress">
                        <p>Computools Germany</p><div class="address">Dresden, Germany</div>
                        <div>Contacts</div>
                        <div class="person">
                            <span>Dr. Volodymyr V. Maslyuk</span><br/>VP of Sales, Germany<br/>+49 172 905 1193
                        </div>
                    </div>
                    <div class="contactBtns">
<!--                        <div class="contactBtn contactBtnUSA">USA</div>-->
                        <div class="contactBtn contactBtnUkraine contactBtnActive">UKRAINE</div>
                        <div class="contactBtn contactBtnCanadaNew">Winnipeg, CANADA</div>
                        <div class="contactBtn contactBtnCanada">Laval, CANADA</div>
                        <div class="contactBtn contactBtnGermany">GERMANY</div>
                    </div>
                </div>
                <?php require '_freeQuote-validation.php'; ?>
                <form method="post" action="#modal-one" enctype="multipart/form-data">
                    <div class="contactForm bottom">
                        <input type="text" name="name" required placeholder="Name">
                        <input type="email" name="email" required placeholder="Email">
                        <input type="hidden" name="marker" value="http://computoolsglobal.com/contacts#contactsBack">
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
</div>
<script>

    $( document ).ready(function() {
        $('.attachments.top').on("click", function(){$('.top .attachFiles').click();});
        $('.top .attachFiles').change(function(e){$('.top .attachFileName').text($(this).val().split('\\').pop());});
        /*-----------------------------------------------------------------------*/
        $('.attachments.bottom').on("click", function(){$('.bottom .attachFiles').click();});
        $('.bottom .attachFiles').change(function(e){$('.bottom .attachFileName').text($(this).val().split('\\').pop());});

        var block = $('#contactsBack');
        var container = $('.contactsPageBlockContainer');
        $('#persData textarea[name=userMessage]').focusout(function () {block.css({'height': container.height()+130});});
        $('#persData textarea[name=userMessage]').focusin (function(){block.css({'height': block.height()+136});});
        if (windowObj.width() <=1440) {block.css({'height': block.height()});}
        if(windowObj.height() < container.height()) {block.css({'height': container.height()+130})}
    });    
</script>
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