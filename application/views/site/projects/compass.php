<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?=template_url('css');?>main.css" rel="stylesheet">
    <link href="<?=template_url('css');?>main_parts.css" rel="stylesheet">
    <link href="<?=template_url('css');?>cases.css" rel="stylesheet">
    <link href="<?php echo template_url('css');?>media.css" rel="stylesheet">
    <link href="<?php echo template_url('css');?>css/font-awesome.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?=template_url('img');?>favicon.png" type="image/x-icon">
    <title>Compass | COMPUTOOLS</title>
    <script src="<?=template_url('js');?>jquery-1.11.3.min.js"></script>
    <script src="<?=template_url('js');?>cases.js" type="text/javascript"></script>
</head>
<body id="compass" style="background-color: #000;">
<div class="modalLoad"><div id="logoLoad"></div></div>
<h1 style="display: none;">Design - Compass – Computools</h1><!--For SEO-->
<div id="caseSlide1" class="caseSlide page" style="padding-top: 0; background-color: #003757;">
    <?php include '/../_header_menu.php';?>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li class="imgFromLeft" style="text-align: left;"><img src="<?=template_url('img');?>cases/compass1.png" alt="case image"/></li>
                <li>
                    <div class="bigTitle" style="color: #00acac;">COMPASS</div>
                    <div class="caseText" style="text-align: center; color: #fff;">Web приложение созданное для ведения
                        учёта и состояния пациентов. Сбора и хранения
                        результатов анализов и прочих медицинских
                        данных пользователя. Так же есть возможность
                        генерации рекомендаций для пациента и доктора
                        на основании имеющихся данных.</div>
                </li>
            </ul>
            <div class="hiddenImg"><img src="<?=template_url('img');?>cases/compass1.png" alt="case image"/></div>
        </div>
    </div>
</div>
<div id="caseSlide2" class="caseSlide page">
    <div class="backgroundDark"></div>
    <div class="imgSide"></div>
    <div class="colorSide"></div>
    <div class="align">
        <div class="caseContainer">
            <div class="caseDescription" style="color: #efefef;">Project Features</div>
            <ul class="caseUl caseUlRdd">
                <li><div class="caseText" style="color: #003757;">Хранение, просмотр и редактирование медицинских данных</div></li>
                <li class="imgFromRight"><img src="<?=template_url('img');?>cases/compass2.png" alt="case image"/></li>
            </ul>
        </div>
    </div>
</div>
<div id="caseSlide3" class="caseSlide page" style="background-color: #fff;">
    <div class="backgroundDark"></div>
    <div class="colorSide"></div>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li class="imgFromLeft"><img src="<?=template_url('img');?>cases/compass3.png" alt="case image"/></li>
                <li>
                    <div class="caseText" style="color: #efefef;">Привязка персонала (врач, медсестра) к пациенту, так же возможность
                    трансфера пациента</div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="caseSlide4" class="caseSlide page" style="background-color: #6ebdb6;">
    <div class="backgroundDark"></div>
    <div class="imgSide"></div>
    <div class="colorSide"></div>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li><div class="caseText" style="color: #003757;">
                        Гибкая система сбора и хранения данных анализов (возможность корректировки значений в зависимости от страны
                    </div></li>
                <li class="imgFromRight"><img src="<?=template_url('img');?>cases/compass4.png" alt="case image"/></li>
            </ul>
        </div>
    </div>
</div>
<div id="caseSlide5" class="caseSlide page" style="background-color: #fff;">
    <div class="backgroundDark"></div>
    <div class="colorSide"></div>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li class="imgFromLeft"><img src="<?=template_url('img');?>cases/compass5.png" alt="case image"/></li>
                <li>
                    <div class="caseText" style="color: #efefef;">
                        Генерация рекоммендаций, основываясь на особых алгоритмах (как для пациента, так и для доктора)</div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="caseSlide6" class="caseSlide page" style="background-color: #ef7d2d;">
    <div class="backgroundDark"></div>
    <div class="imgSide"></div>
    <div class="colorSide"></div>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li><div class="caseText" style="color: #003757;">
                        Формирование анонимной статистики с возможностью сравнения данных доктор-клиника,
                        клиника-штат, штат-страна и т.д.
                    </div></li>
                <li class="imgFromRight"><img src="<?=template_url('img');?>cases/compass6.png" alt="case image"/></li>
            </ul>
        </div>
    </div>
</div>
<div id="caseSlide7" class="caseSlide page" style="background-color: #fff;">
    <div class="backgroundDark"></div>
    <div class="colorSide"></div>
    <div class="align">
        <div class="caseContainer">
            <ul class="caseUl caseUlRdd">
                <li class="imgFromLeft"><img src="<?=template_url('img');?>cases/compass7.png" alt="case image"/></li>
                <li>
                    <div class="caseText" style="color: #efefef;">
                        Возможность экспорта данных в PDF</div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="caseSlide8" class="caseSlide page" style="background-color: #6ebdb6;">
    <div class="backgroundDark"></div>
    <div class="compassBack"></div>
    <div class="align">
        <div class="caseContainer">
            <div class="caseDescription" style="color: #00acac;">Project Challenges</div>
            <div class="caseText" style="color: #fff;">Проектирование гибкой и производительной структуры БД.</div>
        </div>
    </div>
</div>

<div id="caseSlide9" class="caseSlide page" style="padding-top: 0; background-color: #00acac;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="caseContainer">
            <div class="caseDescription" style="color: #003757;">Project Solution</div>
            <ul class="caseUl caseUlRdd">
                <li style="text-align: left;">
                    <div class="caseText" style="color: #fff;">
                        Front и Back-end построены на основе ASP .Net.
                    </div>
                    <div class="caseText" style="color: #fff;">
                        <span style="color: #003757;">Front</span> часть это Asp Web сайт. Построен с использованием
                        известных технологий (Bootstrap, JQuery и т.д.). Для общения с серверной частью используется AJAX.
                    </div>
                    <div class="caseText" style="color: #fff;">
                        <span style="color: #003757;">Back-end</span> имеет возможность отдавать как html для веб сайта,
                        так и REST API, что позволяет при необходимости создать как настольный, так и мобильный клиент.
                        Для хранения данных используется база данных MSSQL. Так же в проекте используются облачные технологии
                        Microsoft Azure.
                    </div>
                </li>
                <li class="imgFromRight" style="text-align: center;"><img src="<?=template_url('img');?>cases/compass8.png" alt="case image"/></li>
            </ul>
            <!--            <div class="hiddenImg"><img src="--><?//=template_url('img');?><!--cases/upgo1.png" alt="case image"/></div>-->
        </div>
    </div>
</div>

<div id="caseSlide10" class="caseSlide page" style="padding-top: 0; background-color: #003757;">
    <div class="backgroundDark"></div>
    <div class="compassBack"></div>
    <div class="align">
        <div class="caseContainer">
            <div class="caseDescription" style="color: #00acac;">Project Solution</div>
            <ul class="caseUl caseUlRdd">
                <li class="imgFromLeft" style="text-align: center;"><img src="<?=template_url('img');?>cases/compass9.png" alt="case image"/></li>
                <li style="text-align: left;">
                    <div class="caseText" style="color: #003757;">C#</div>
                    <div class="caseText" style="color: #003757;">ASP.NET</div>
                    <div class="caseText" style="color: #003757;">ADO.NET</div>
                    <div class="caseText" style="color: #003757;">HTML5</div>
                    <div class="caseText" style="color: #003757;">Microsoft Azure</div>
                    <div class="caseText" style="color: #003757;">CSS3</div>
                    <div class="caseText" style="color: #003757;">Bootstrap3</div>
                    <div class="caseText" style="color: #003757;">JQuery</div>
                    <div class="caseText" style="color: #003757;">JQuery UI</div>
                    <div class="caseText" style="color: #003757;">JSON</div>
                </li>
            </ul>
            <!--            <div class="hiddenImg"><img src="--><?//=template_url('img');?><!--cases/upgo1.png" alt="case image"/></div>-->
        </div>
    </div>
</div>

<div id="caseSlide11"  class="contactFormBlockMain page" style="background-color: #003757;">
    <div class="backgroundDark"></div>
    <div class="align">
        <div class="containerWidth caseContainer">
            <h2 style="color: #efefef;">LET’S CREATE SOMETHING TRULY GREAT</h2>
            <?php require '/../_freeQuote-validation.php'; ?>
            <form method="post" action="#modal-one" enctype="multipart/form-data">
                <div class="contactForm bottom">
                    <input type="text" name="name" required placeholder="Name">
                    <input type="email" name="email" required placeholder="Email">
                    <input type="hidden" name="marker" value="http://computoolsglobal.com/case-studies/php/csca#caseSlide9">
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

<div id="caseSlide12" class="caseStudies  pageLast" style="background-color: #efefef;">
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
            <a class="quote" href="/case-studies">SEE ALL CASE STUDIES</a>
        </div>
    </div>
</div>
<?php include '/../_footer_menu.php';?>
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