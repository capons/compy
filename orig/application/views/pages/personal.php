<link href="/css/personal.css" rel="stylesheet" type="text/css"/>
<link href="/css/mediaPersonl.css" rel="stylesheet" type="text/css"/>

<div class="content">

    <div class="personal_info">
        <div class="top_info_user">
            Борис Свет
        </div>
        <div class="foto_user">
        </div>
        <div class="privateOffice" id="settingsP">Личный кабинет
        </div>
        <div class="menu_settings">
            <div class="button_menu" id="changeP">Профиль</div>
            <div class="button_menu" id="photoGalleryP">Фотогалерея</div>
            <div class="button_menu" id="calendarP">Календарь</div>
            <div class="button_menu" id="BlogPersonalS">Блог</div>
            <div class="button_menu" id="OrderP">История заказов</div>
            <div class="button_menu" id="AddOrderP">Создание заказа</div>
        </div>
    </div>

    <div class="settingsPage">
        <?php $this->load->view('pages\personal\settings.php') ?>
    </div>

    <div class="changePage">
        <?php $this->load->view('pages\personal\change.php') ?>
    </div>

    <div class="photoAlbumPage">
        <?php $this->load->view('pages\personal\photoGallery.php') ?>
    </div>

    <div class="calendarPersonPage">
        <?php $this->load->view('pages\personal\calendar.php') ?>
    </div>

    <div class="BlogPersonal">
        <?php $this->load->view('pages\personal\blog.php') ?>
    </div>

    <div class="HistoryOrderPage">
        <?php $this->load->view('pages\personal\history_order.php') ?>
    </div>

    <div class="AddOrderPage">
        <?php $this->load->view('pages\personal\add_order.php') ?>
    </div>
</div>
