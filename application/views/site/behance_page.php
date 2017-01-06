<!DOCTYPE html>
<html>
<head lang="en">
    <meta name="robots" content="nofollow" />
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="UI/UX Design – Computools">
    <meta name="description" content="Computools consistently goes beyond its Client's expectations by bringing together innovation, technology, and talent.">
    <link href="<?=template_url('css');?>main.css" rel="stylesheet">
    <link href="<?=template_url('css');?>media.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?=template_url('img');?>favicon.png" type="image/x-icon">
    <title>UI/UX Design</title>
    <script src="<?=template_url('js');?>jquery-1.11.3.min.js"></script>
    <script src="<?=template_url('js');?>main.js" type="text/javascript"></script>
    </head>
<body>
<div class="modalLoad"><div id="logoLoad"></div></div>
<div class="behHead">
    <?php include '_header_menu.php';?>
</div>
<h1 style="display: none;">UI/UX Design – Computools</h1><!--For SEO-->
   <div class="behContent">
       <?php
       switch ($_SERVER['REQUEST_URI']) {
           case '/case-studies/ui-design/learn-reader':
               echo '<img src="../../../templates/site/img/cases_Beh/learn_reader.jpg" alt="learn reader"/>';
               break;
           case '/case-studies/ui-design/orange-chat':
               echo '<img src="../../../templates/site/img/cases_Beh/orange.jpg" alt="orange chat"/>';
               break;
           case '/case-studies/ui-design/healthy-meals':
               echo '<img src="../../../templates/site/img/cases_Beh/healthy.jpg" alt="healthy meals"/>';
               break;
           case '/case-studies/ui-design/concept-design-ifree':
               echo '<img src="../../../templates/site/img/cases_Beh/concept.jpg" alt="concept design ifree"/><img src="../../../templates/site/img/cases_Beh/concept_3.jpg" alt="concept design ifree"/>';
               break;
           case '/case-studies/ui-design/quarters-website':
               echo '<img src="../../../templates/site/img/cases_Beh/quarters.jpg" alt="quarters website"/>';
               break;
           case '/case-studies/ui-design/gfs-group':
               echo '<img src="../../../templates/site/img/cases_Beh/gfc.jpg" alt="gfs group"/>';
               break;
           case '/case-studies/ui-design/ezatik-online-store':
               echo '<img src="../../../templates/site/img/cases_Beh/ezatik.jpg" alt="ezatik online store"/>';
               break;
           case '/case-studies/ui-design/pc-duck-cleaner':
               echo '<img src="../../../templates/site/img/cases_Beh/pcduck.jpg" alt="pc duck cleaner"/>';
               break;
           case '/case-studies/ui-design/autoshop-online-store':
               echo '<img src="../../../templates/site/img/cases_Beh/crw.jpg" alt="autoshop online store"/>';
               break;
           case '/case-studies/ui-design/bird-muvinteractive':
               echo '<img src="../../../templates/site/img/cases_Beh/bird.jpg" alt="bird muvinteractive"/>';
               break;
           case '/case-studies/ui-design/trip-swell':
               echo '<img src="../../../templates/site/img/cases_Beh/trip.jpg" alt="trip swell"/>';
               break;
           case '/case-studies/ui-design/audio-task-manager':
               echo '<img src="../../../templates/site/img/cases_Beh/atm.jpg" alt="audio task manager"/>';
               break;
           case '/case-studies/ui-design/traveloom':
               echo '<img src="../../../templates/site/img/cases_Beh/traveloom.jpg" alt="traveloom"/>';
               break;
           case '/case-studies/ui-design/employee-confidential':
               echo '<img src="../../../templates/site/img/cases_Beh/econf.jpg" alt="employee confidential"/>';
               break;
           case '/case-studies/ui-design/quickie':
               echo '<img src="../../../templates/site/img/cases_Beh/quickie.jpg" alt="quickie"/>';
               break;
           case '/case-studies/ui-design/easy-to-give':
               echo '<img src="../../../templates/site/img/cases_Beh/easy.jpg" alt="easy to give"/>';
               break;
           case '/case-studies/ui-design/spa-development-equipment':
               echo '<img src="../../../templates/site/img/cases_Beh/spa.jpg" alt="spa development equipment"/>';
               break;
           case '/case-studies/ui-design/nbd-auctions':
               echo '<img src="../../../templates/site/img/cases_Beh/nbd.jpg" alt="nbd auctions"/>';
               break;
           case '/case-studies/ui-design/dinner-lab-chefs':
               echo '<img src="../../../templates/site/img/cases_Beh/dinner.jpg" alt="dinner lab chefs"/>';
               break;
           case '/case-studies/ui-design/wurdey':
               echo '<img src="../../../templates/site/img/cases_Beh/wurdey.jpg" alt="wurdey"/>';
               break;
           case '/case-studies/ui-design/mini-sentinel':
               echo '<img src="../../../templates/site/img/cases_Beh/mini.jpg" alt="mini sentinel"/>';
               break;
           case '/case-studies/ui-design/build-a-head':
               echo '<img src="../../../templates/site/img/cases_Beh/build.jpg" alt="build a head"/>';
               break;
           case '/case-studies/ui-design/phoenix':
               echo '<img src="../../../templates/site/img/cases_Beh/phoenix.jpg" alt="phoenix"/>';
               break;
           case '/case-studies/ui-design/pgi-direct':
               echo '<img src="../../../templates/site/img/cases_Beh/pgi.jpg" alt="pgi"/>';
               break;
           case '/case-studies/ui-design/detox-my-pc':
               echo '<img src="../../../templates/site/img/cases_Beh/detox.jpg" alt="detox my pc"/>';
               break;
           case '/case-studies/ui-design/workplace-remote':
               echo '<img src="../../../templates/site/img/cases_Beh/workplace.jpg" alt="workplace remote"/>';
               break;
       }
       ?>
   </div>
<?php include '_footer_menu.php';?>
</body>
</html>