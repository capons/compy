<link href="/css/personalPage.css" rel="stylesheet" type="text/css"/>
<link href="/css/mediaPersonalPage.css" rel="stylesheet" type="text/css"/>

<div class="contentBlock">
    <div class="topPersonalPage">
        <div class="personalBlockPhoto">
            <img class="photo_poster" src="./css/img/personalPhoto.png"/>
            <div class="blockInfo">
                <div class="statisticsBlock">
                    <div class="statisticsItem">
                        <p class="statisticsNumber">179</p>
                        <p class="statisticsText">рейтинг</p>
                    </div>
                    <div class="statisticsItem">
                        <p class="statisticsNumber">99</p>
                        <p class="statisticsText">фото</p>
                    </div>
                    <div class="statisticsItem">
                        <p class="statisticsNumber">56</p>
                        <p class="statisticsText">голоса</p>
                    </div>
                    <div class="statisticsItem">
                        <p class="statisticsNumber">678</p>
                        <p class="statisticsText">подписчика</p>
                    </div>
                </div>
                <div class="personalSocialBlock">
                    <a class="personalSkype" href=""><img src="./css/img/personalPageSkype.png"/></a>
                    <a class="personalFacebook" href=""><img src="./css/img/personalPageFacebook.png"/></a>
                    <a class="personalLinkedin" href=""><img src="./css/img/personalPageLinkedin.png"/></a>
                    <a class="personalGoogle" href=""><img src="./css/img/personalPageGoogle.png"/></a>
                    <a class="personalVK" href=""><img src="./css/img/personalPageVK.png"/></a>
                    <a class="personalInstagram" href=""><img src="./css/img/personalPageInstagram.png"/></a>
                    <a class="personalTwitter" href=""><img src="./css/img/personalPageTwitter.png"/></a>
                </div>

            </div>
        </div>
        <div class="personalBlockInfo">
            <p class="personalName">Николай Растаргуев</p>
            <div class="infoAboutPersonal">
                <label class="personalInfo">Фотограф, Киев</label>
                <img src="./css/img/personalLike.png"/>
                <img src="./css/img/personalDontLike.png"/>
            </div>
        </div>

    </div>
    <div class="menuPersonalPage">
        <div class="menuSettings">
            <div class="buttonMenu buttonMenuActive" id="personalPageInfo">Инфо</div>
            <div class="buttonMenu" id="personalPageSearchOrders">Поиск заказов</div>
            <div class="buttonMenu" id="personalPageFriends">Друзья</div>
            <div class="buttonMenu" id="personalPagePortfolio">Портфолио</div>
            <div class="buttonMenu" id="personalPageBlog">Блог</div>
        </div>
    </div>

    <div class="personalPageInfoView">
        <?php $this->load->view('pages\personalPage\personalPageInfo.php') ?>
    </div>

    <div class="personalPageSearchOrdersView">
        <?php $this->load->view('pages\personalPage\personalPageSearchOrders.php') ?>
    </div>

    <div class="personalPageFriendsView">
        <?php $this->load->view('pages\personalPage\personalPageFriends.php') ?>
    </div>

    <div class="personalPagePortfolioView">
        <?php $this->load->view('pages\personalPage\personalPagePortfolio.php') ?>
    </div>

    <div class="personalPageBlogView">
        <?php $this->load->view('pages\personalPage\personalPageBlog.php') ?>
    </div>
</div>
