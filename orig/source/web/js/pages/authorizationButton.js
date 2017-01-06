$(document).ready( function() {

    $('#button_login').click( function() {

        document.getElementById("background").style.display = "block";
        $('#authorizationBlock').fadeIn(1000);

        $('.cross').click( function() {

            $('#authorizationBlock').fadeOut(1000);
            $('#background').fadeOut(1200);

        });

    });

    $('#button_registration').click( function() {

        document.getElementById("background").style.display = "block";
        $('.registrationBlock').fadeIn(1000);

        $('.cross').click( function() {

            $('.registrationBlock').fadeOut(1000);
            $('#background').fadeOut(1200);

        });

    });

});
