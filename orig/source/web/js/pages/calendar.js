
$(document).ready(function() {

    $('#calendar').calendarLite({
        onSelect: function(date) {
            $('#animationContainer').slideDown(1000);
            $('h1').html(date);

        }
    });
    $('#cross').on('click', function(){
        $('#animationContainer').slideUp(1000);
    });

});

