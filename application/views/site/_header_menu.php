<!--Intercom login -->
<?php include 'intercom-login.php'; ?>
<div id="headerMain">
    <div class="headerMainContainer expanded">
        <div class="logoFull">
            <a href="/" id="homeLogo">
                <img id="headLogoTxt" src="<?=template_url('img');?>logo_13.05.png" alt="logo Computools">
            </a>
        </div>
        <div id="navIcon"></div>
        <ul id="navMenu">
            <li><a href="/case-studies">case studies</a></li>
<!--            <li><a href="/services">services</a></li>-->
            <li><a href="/aboutus">about us</a></li>
            <li><a href="/expertise">expertise</a></li>
            <li><a href="/testimonials">testimonials</a></li>
            <li><a href="/careers">careers</a></li>
            <li><a href="/blog">blog</a></li>
            <li><a href="/contacts">contact us</a></li>
        </ul>
        <div id="navMenuSmall">
            <ul>
                <li><a href="/case-studies">case studies</a></li>
<!--                <li><a href="/services">services</a></li>-->
                <li><a href="/aboutus">about us</a></li>
                <li><a href="/expertise">expertise</a></li>
                <li><a href="/testimonials">testimonials</a></li>
                <li><a href="/careers">careers</a></li>
                <li><a href="/blog">blog</a></li>
                <li><a href="/contacts">contact us</a></li>
            </ul>
        </div>
    </div>
</div>
<script>
    var btn = $("#navIcon");
    var menu = btn.parent();
    var menuSmall = menu.find('#navMenuSmall');

    $(document).ready(function() {
//        headerFixed();

        $('#navMenu a[href^="/' + location.pathname.split("/")[1] + '"]').parent("li").addClass('activeLink');

//        function headerFixed() {
//            var headerFix = $('#headerMain').offset().top;
//            $(window).on('load scroll', function() {
//                var y = $(this).scrollTop();
//                if ( y >= headerFix) {
//                    $('#headerMain').addClass('fixed');
//                } else {
//                    $('#headerMain').removeClass('fixed');
//                }
////                if ( y >= 107 ) {
//                if ( y >= 53 ) {
//                    $('#headerMain').addClass('float-header');
//                } else {
//                    $('#headerMain').removeClass('float-header');
//                }
//            });
//        }

        btn.click(function() {
            btn.css({"background-image": "url('/templates/site/img/close.png')"});
            if (menu.hasClass("expanded")) {
                menu.removeClass('expanded').addClass('collapsed');
                menuSmall.slideDown();
                if (windowObj.width() <= 600) {
                    $('.logoFull').hide();
//                    btn.css({"left": "10px"});
                }
            }
            else if (menu.hasClass("collapsed")) {
                closeMenu();
            }
        });
        $(document).mouseup(function (e) {
            if (!menu.is(e.target) && menu.has(e.target).length === 0) {
                closeMenu();
            }
        });
        function closeMenu(){
            menuSmall.slideUp();
            $('.logoFull').show();
            btn.css({"background-image": "", "left": ""});
            menu.removeClass('collapsed').addClass('expanded');
        }
    });
</script>