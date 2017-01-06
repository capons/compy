<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?=template_url('css');?>main.min.css" rel="stylesheet">
    <link href="<?=template_url('css');?>main_parts.css" rel="stylesheet">
    <link href="<?=template_url('css');?>cases.min.css" rel="stylesheet">
    <link href="<?php echo template_url('css');?>media.min.css" rel="stylesheet">
    <link href="<?php echo template_url('css');?>css/font-awesome.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?=template_url('img');?>favicon.png" type="image/x-icon">
    <title>FDA | COMPUTOOLS</title>
    <script src="<?=template_url('js');?>jquery-1.11.3.min.js"></script>
    <script src="<?=template_url('js');?>cases.js" type="text/javascript"></script>
</head>
<body id="fda" style="background-color: #000;">
<div class="modalLoad"><div id="logoLoad"></div></div>
<h1 style="display: none;">Design - FDA – Computools</h1><!--For SEO-->
<div id="caseSlide1" class="caseSlide page" style="background-color: #006a55; padding-top: 0; text-align: center;">
<?php include '_header_menu.php';?>
    <div class="align">
        <div class="caseContainer caseContainerMain caseContainerMda">
            <ul class="firstUl caseUl caseUlRdd">
                <li>
                    <div class="caseTitle" style="color: #ffa100;">FDA Operator</div>
                    <div class="caseDescription" style="color: #fff;">We worked on the development of application FDA Operator,
                        the financial instrument intended for capital investment
                        in deposit and securities.</div>
                </li>
                <li class="imgFromRight"><img src="<?=template_url('img');?>cases/phone.png" alt="case image"/></li>
            </ul>
        </div>
    </div>
</div>
<div id="caseSlide2" class="caseSlide page" style="background-color: #ffa100; text-align: center;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer caseContainerMda">
            <div class="caseDescription" style="color: #fff;">
                With the help of this web application, you have an opportunity to buy financial instruments
                calculating incomes and risks. Financial instruments in the project are the stocks
                of the local Australian and large global companies and profitable
                deposit programs of banks. Investing online you can from anywhere in the world.
                Besides, you have the opportunity to buy stocks for risk minimization, for counting incomes
                of holdings of shares you have chosen, for tracing of the market data for the past period.
                The goal of the project was the creation of the online-platform
                for investing in the fastest and the most convenient way.
            </div>
        </div>
    </div>
</div>
<div id="caseSlide3" class="caseSlide page" style="background-color: #fff; text-align: right;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer caseContainerMda">
            <ul class="caseUl caseUlRdd">
                <li class="imgFromLeft"><img src="<?=template_url('img');?>cases/Cinema-Display.png" alt="case image"/></li>
                <li>
                    <div class="caseText" style="color: #004c47;">Implementation of a convenient and
                        intuitive user interface was the start of our project.
                        Further as the main point of the development
                        process was the creation of modules with
                        the story and instrument analytics.
                        A number of statistical methods of analysis
                        were developed. To get maximal profit and
                        risk diversification there is a possibility to buy
                        specific financial instruments.
                        Placement of control elements of financial
                        instruments has been implemented
                        taking into account the ease of operation and use.
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="caseSlide4" class="caseSlide page" style="background-color: #006a55; text-align: left;">
    <div class="caseSlideBackRight fade">
        <div class="backgroundDark"></div>
        <div class="align">
            <div class="caseContainer caseContainerMda">
                <div class="caseDescription" style="color: #fff;">
                    One of the immediate tasks was the creation of the high-speed web app with
                    immediate response to the customer's operation.
                    When analyzing data, a lot of analytical operations are performed and they
                    significantly affect the processing speed. Also, it should be noted that the data
                    was stored in a large volume, that in the early stages of development negatively
                    affected the speed of the application. The developers faced a difficult task - the speed
                    optimization during the development process.
                </div>
                <div class="hiddenImg"><img src="<?=template_url('img');?>cases/Macbook---Open---Right.png" alt="case image"/></div>
                <div class="caseBigDescription" style="color: #ffa100;">To optimize page loading, validation, and update
                    the following technologies were used:</div>
                <div>
                    <ul class="caseUlSmall" style="color: #fff; text-align: left;">
                        <li class="caseDescription"><span style="color: #ffa100;">Razor </span>- for rendering and validation of the data model.</li>
                        <li class="caseDescription"><span style="color: #ffa100;">Entity framework </span>- to maximize the speed of the database.</li>
                        <li class="caseDescription"><span style="color: #ffa100;">jQuery plug-in DataTable API</span> - were used to customize the of tabular data and create the optimum database query
                            to retrieve data.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="caseSlide5" class="caseSlide page" style="background-color: #00a285; text-align: center;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer caseContainerMda">
            <div class="caseDescription" style="color: #fff;">
                All calculations are done based on whether you have shares of only one company (individual calculations)
                or a few companies (group calculations). The statistical calculations are executed very fast using the actual
                data. To optimize the database, with the help of Entity framework the optimal set of data was chosen.
            </div>
        </div>
    </div>
</div>
<div id="caseSlide6" class="caseSlide page" style="background-color: #fff; text-align: right;">
    <div class="caseSlideBackLeft fade">
        <div class="backgroundDark"></div>
        <div class="align">
            <div class="caseContainer caseContainerMda">
                <div class="caseText" style="color: #ffa100;">
                    The next step was the work with virtual tables.
                    It provided a speed boost and the absolute precision of the calculation.
                </div>
                <div class="caseText" style="color: #ffa100;">
                    Another challenge was to get the price, to process and
                    implement the API for reading the processed data. For price download,
                    services for data reading were written from open sources and the API
                    was developed for distribution to external access to the processed data.
                </div>
                <div class="caseText" style="color: #ffa100;">
                    The big team of developers implemented a fast download speed
                    investment system with the user-friendly interface.
                </div>
                <div class="hiddenImg">
                    <img src="<?=template_url('img');?>cases/Macbook---Open---Left.png" alt="case image"/>
                </div>
                <div class="caseBigDescription" style="color: #006a55; text-align: right;">Technologies:</div>
                <ul class="caseUlSmall" style="color: #006a55; text-align: right;">
                    <li class="caseDescription"><span style="color: #ffa100;">Back-end: </span>C#, ASP.NET MVC.</li>
                    <li class="caseDescription"><span style="color: #ffa100;">DB: </span>MSSQL, ADO.NET, Entity framework, LINQ.</li>
                    <li class="caseDescription"><span style="color: #ffa100;">Front-end: </span>CSS3, HTML5, JavaScript, jQuery, Bootstrap, DataTable.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="caseSlide7" class="caseSlide page" style="background-color: #ffa100;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer caseContainerMda">
            <ul class="caseUl caseUlRdd bottomBack">
                <li style="vertical-align: top;">
                    <div class="caseBigDescription" style="color: #006a55;">Example: </div>
                    <div class="caseText" style="color: #fff;">There is a task to buy 100 stocks of a particular company.
                        This operation can be done online from each corner of the world viewing the prices of shares,
                        their dynamics, statistics and forecasts in advance. For risk diversification,
                        it is possible to create a custom basket of products,
                        consisting of 50 shares of company A and 50 stocks of company B.
                        For example, the client creates a case which includes 50% of shares and 50% of deposit.
                    </div>
                    <div class="caseText" style="color: #fff;">
                        The stock market is very dynamic. Shares at the expiration of the period
                        can both go up and lose in price, so the part can be invested in a deposit
                        which will provide specified income. How does this diversification look like?
                        The client invests 25% in shares of company A, 25% in company B and 50% in the commercial
                        deposit which brings specified income in comparison with shares.
                    </div>
                </li>
                <li class="imgFromRight"><img src="<?=template_url('img');?>cases/phone1.png" alt="case image"/></li>
            </ul>
        </div>
    </div>
</div>
<div id="caseSlide8" class="caseSlide page" style="background-color: #006a55; text-align: center;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer caseContainerMda">
            <div class="caseDescription" style="color: #ffa100;">
                As the result, the client has the maximal range of investment instruments with the ability to calculate the risks
                and incomes to gain profit with the ease of operation.
            </div>
        </div>
    </div>
</div>
<div id="caseSlide9" class="contactFormBlockMain page" style="background-color: #145855;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="containerWidth caseContainer">
            <h2>Let’s create something truly great</h2>
            <?php require '_freeQuote-validation.php'; ?>
            <form method="post" action="#modal-one" enctype="multipart/form-data">
                <div class="contactForm bottom">
                    <input type="text" name="name" required placeholder="Name">
                    <input type="email" name="email" required placeholder="Email">
                    <input type="hidden" name="marker" value="http://computoolsglobal.com/case-studies/aspnet/fda#caseSlide9">
                    <input type="file" name="attachments" class="attachFiles">
                    <textarea name="idea" required placeholder="Your task/idea"></textarea>
                    <div class="attachments bottom">
                        <div class="icon"><i class="fa fa-paperclip"></i></div>
                        <div class="attachFileName">Attach a file</div>
                    </div>
                </div>
                <input type="submit" class="quote" value="Get a free Quote">
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
<div id="caseSlide10" class="caseStudies pageLast" style="background-color: #fff;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="containerWidth caseContainer">
            <h2 class="fade" style="color: #1a6793;">Related Case Studies</h2>
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
                    <a href="http://computoolsglobal.com//case-studies/cpp/remote-desktop-driver">
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
            <a class="quote" href="/case-studies">See all Case Studies</a>
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
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
<noscript>
    <div style="display:inline;"><img height="1" width="1" style="border-style:none;" alt="pagead" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/922620963/?value=0&amp;guid=ON&amp;script=0"/></div>
</noscript>
</body>
</html>