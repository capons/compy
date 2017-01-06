
$(document).ready(function(){

    $('#sendAuthorization').click(function() {

        user = new Object();

        user['email'] = $('.email').val();
        user['password'] = $('.password').val();

        ajax.send(user,'/authorization/signIn',function(answer){

            if(answer == '') {
                document.location.href = 'welcome';
            }

            else alert(answer);

        },function(){//error

        })


    })
})