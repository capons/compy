<!--<div class="alignPopup">-->
    <div id="modalSent">
        <form id="modalWindow">
            <img src="<?=template_url('img');?>logoSent.png">
            <p>Thank You!</p>
            <div class="closeModal" onclick="">×</div>
            <p>Your message has been sent!</p>
            <p>Our managers contact you within 24 hours</p>
            <div class="okBtn">
                OK
            </div>
        </form>
    </div>
<!--</div>-->

<script>
    var modal =  $('#modalSent');
    modal.css('margin-top', (modal.outerHeight())*(-1/2));
</script>
