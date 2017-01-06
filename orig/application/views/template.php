<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
    <link href="css/template.css" rel="stylesheet" type="text/css" />
    <link href="css/media.css" rel="stylesheet" type="text/css" />
</head>

<body onload="digitalWatch()">

<header class="header">
    <div id="menu">
        <div id="blockMenu">
            <!-- Logo menu -->
            <div class="menuItems" style="cursor: default;">
                <div id="logo"></div>
                <div id="logoText">emotions.life</div>
            </div>
            <!-- Menu -->
            <div class="menuItems">
                <ul>
                    <li id="Event" class="menuItem"><p>Event</p></li>
                    <li id="Blog" class="menuItem"><p>Blog</p></li>
                    <li id="Gallery" class="menuItem"><p>Gallery</p></li>
                </ul>
            </div>
            <!-- Top info menu -->
            <!--    <div class="menuItems" id="MenuItemsTopInfo">
                    <div id="mailin" class="top_info">
                    </div>
                    <div id="zakaz" class="top_info">
                    </div>
                    <div id="stiker" class="top_info">
                    </div>
                    <div id="premium_id" class="top_info">
                    </div>
                </div>
                <!-- Login in menu -->


            <?php if($isLogin){?>
                <div class="menuItems menuItemsAfterAuthorization">
                   <!-- <div id="authorization">
                        <div id="endSession">Вихід</div>
                        <div class="separator">|</div>
                        <div id="cabinet">Кабінет</div>
                    </div>-->
                    <div id="authorization" class="afterAuthorization">
                        <div id="blockTime"></div>
                        <img id="homeButton" src="./css/img/home.png">
                        <img id="newMessageButton" src="./css/img/newMessage.png">
                        <!--<img id="newOrderButton" src="./css/img/message.png">-->
                        <img id="homeButton" src="./css/img/newOrder.png">
                        <!--<img id="orderButton" src="./css/img/order.png">-->
                        <img id="stickerButton" src="./css/img/sticker.png">
                        <img id="batteryButton" src="./css/img/battery.png">
                        <img id="endSession" src="./css/img/exit.png">
                    </div>
                </div>


            <?php } else {?>
                <div class="menuItems">
                    <div id="authorization">
                        <div id="button_login">Вхід</div>
                        <div class="separator">|</div>
                        <div id="button_registration">Реєстрація</div>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>


    <div class="logo">
    </div>
    <div id="authorizationBlock">
        <!-- <img src="/css/img/close.png" class="cross"> -->
        <?php $this->load->view('pages/authorization'); ?>
    </div>
    <div class="registrationBlock">
        <!-- <img src="/css/img/close.png" class="cross"> -->
        <?php $this->load->view('pages/registration'); ?>
    </div>
    <div id="background"></div>

    <!--<?php if($isLogin){?>

        <div class="divLoginInOut"><input class="loginInOut" type="button" value="Log Out" id="endSession" /></div>
        <div class="divLoginInOut"><input class="loginInOut" type="button" value="Cabinet" id="personal" /></div>

    <?php } else {?>
        <div class="divLoginInOut"><input class="loginInOut" type="button" value="Sign In/Sign Up" id="authorization" /></div>
    <?php }?>  -->
</header>

<?php if($content != 'authorization' ) $this->load->view('pages/'.$content); ?>

<footer class="footer">
    <div id="footerBlock">
        <div class="footerItems">
            <div class="footerItem" style="margin-top: 50px;">Email: emotions@life.com</div>
            <div class="footerItem" style="padding-top: 10px;">Copyright 2015 Emotions.life</div>
        </div>
        <!--<div class="footerItems">
            <img src="/css/img/imgFotter.png" alt="" />
        </div>-->
        <div class="footerItems" id="socialButton">
            <img id="instagram" src="/css/img/instagram.png" alt="" />
            <img id="facebook" src="/css/img/facebook.png" alt="" />
            <img id="vk" src="/css/img/vk.png" alt="" />
            <img id="twitter" src="/css/img/twitter.png" alt="" />
        </div>
        <div class ="copyright">
        </div>
        <div class="help">
        </div>
    </div>
</footer>


<script type="text/javascript" src="/js/lib/jquery2.1.1.js"></script>
<script type="text/javascript" src="/js/pages/slider.js"></script>
<script type="text/javascript" src="/js/helper.js"></script>
<script type="text/javascript" src="/js/pages/authorizationButton.js"></script>
<script type="text/javascript" src="/js/pages/timeBlockMenu.js"></script>
<?php  $this->load->view('includes/'.$content); ?>
</body>

</html>