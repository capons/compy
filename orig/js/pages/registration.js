$(document).ready(function(){

    $("input[class='emailCheck']").change(function() {

        email = $('.emailCheck').val();

        ajax.send(email,'/registration/checkEmail',function(change) {

            if(validation.isEmail(email) != '' || change == "true") {
                boolean = "true";
            } else {
                boolean = "";
            }
            validation.visualInput(boolean,'.emailCheck','sendRegistration');
        })


    });

    $("input[class='passwordCheck']").change(function() {

        password = $('.passwordCheck').val();

        if(validation.isPassword(password) != '') {boolean = "true"}
        else {boolean = ""}

            validation.visualInput(boolean, '.passwordCheck', 'sendRegistration');



        });

    $("input[class='confirmPassword']").change(function() {

        password = $('.passwordCheck').val();
        rePassword = $('.confirmPassword').val();

        if(validation.isRePassword(password,rePassword) != '') {boolean = "true"}
        else {boolean = ""}

        validation.visualInput(boolean, '.confirmPassword', 'sendRegistration');



    });


    $('#sendRegistration').click(function() {
       var user = new Object();
       var message = "";

       user['email'] = $('.emailCheck').val();
       user['password'] = $('.passwordCheck').val();
       user['confirmPassword'] = $('.confirmPassword').val();

       if (user['email'] == '') {
           message += "Вы не ввели email. ";
       }
       else if(validation.isEmail(user['email']) != '') {
           message += "Неккоректный email. ";
       }

       if (user['password'] == '' || user['confirmPassword'] == '') {
           message += "Вы не ввели пароль. ";
       }
       else if (user['password'].length <6 ) {
           message += "Пароль должен быть длинее 6 символов. "
       }
       else if(user['password'] != user['confirmPassword']) {
           message += "Пароли не совпадают. "
       }

       user['message'] = message;
       ajax.send(user,'/registration/register',function(answer){

         if(answer == '') {
             document.location.href = 'welcome';
         }

           else alert(answer);

       },function(){//error

       })
   });
});