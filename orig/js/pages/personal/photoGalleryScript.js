$(window).ready(function() {

    $('.statistics').click(function() {
        $('.createAlbumDiv').css("display","block");
    });

    $('.closeAlbumFormButton').click(function() {
        $('.createAlbumDiv').css("display","none");
    });

    var options = {
       // target:        '#saveAlbumButton',   // target element(s) to be updated with server response
        success:       showResponse  // post-submit callback
       // url:     '/galleryItem/addAlbum'         // override for form's 'action' attribute
    };

    $('#addAlbumForm').ajaxForm(options);

    function showResponse() {
        alert("ok");
        $('#blogNameInp').attr("value","");
        $('#blogDescrInp').attr("value","");
        $('.createAlbumDiv').css("display","none");

    }

});