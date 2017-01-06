<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
    <link href="css/template.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/js/lib/jquery2.1.1.js"></script>
    <script type="text/javascript" src="/js/pages/slider.js"></script>
    <script type="text/javascript" src="/js/helper.js"></script>
    <script type="text/javascript" src="/js/pages/authorizationButton.js"></script>
</head>

<body>

<div class="headBlock">
    <div class="top_menu">

        <?php if($isLogin){?>
            <div id="endSession" class="top_info">End Session</div>
            <div id="cabinet" class="top_info">Cabinet</div>

        <?php } else {?>
        <div id="button_registration" class="top_info" >Реєстрація</div>
        <div id="button_login" class="top_info">ВХІД</div>
        <?php }?>

        <div id="mailin" class="top_info">
        </div>
        <div id="zakaz" class="top_info">
        </div>
        <div id="stiker" class="top_info">
        </div>
        <div id="premium_id" class="top_info">
        </div>
    </div>
<div class="header">
    <div class="logo">
    </div>

    <!--<?php if($isLogin){?>

        <div class="divLoginInOut"><input class="loginInOut" type="button" value="Log Out" id="endSession" /></div>
        <div class="divLoginInOut"><input class="loginInOut" type="button" value="Cabinet" id="personal" /></div>

    <?php } else {?>
        <div class="divLoginInOut"><input class="loginInOut" type="button" value="Sign In/Sign Up" id="authorization" /></div>
    <?php }?>  -->
</div>
</div>




<div id="authorizationBlock">
    <img src="/css/img/close.png" class="cross">
    <?php $this->load->view('pages/authorization'); ?>
</div>
<div class="registrationBlock">
    <img src="/css/img/close.png" class="cross">
    <?php $this->load->view('pages/registration'); ?>
</div>
<div id="background"></div>


<?php if($content != 'authorization' ) $this->load->view('pages/'.$content); ?>
<?php  $this->load->view('includes/'.$content); ?>

<div class="footer">
    <div class ="copyright">
    </div>
    <div class="help">
    </div>
</div>

</body>

</html>