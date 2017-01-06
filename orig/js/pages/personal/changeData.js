
var mainData = Object();
var sendData = Object();
var errorData = Object();
infReturn = 0;


mainData = {
    emailInp: '#emailError',
    passwordInp: '#passwordError',
    rePasswordInp: '#rePasswordError',
    ideaInp: '#ideaError',
    phraseInp: '#phraseError',
    achievementsInp: '#achievementsError',
    interestsInp: '#interestsError',
    aboutInp: '#aboutError',
    nameInp: '#nameError',
    surnameInp: '#surnameError',
    birth_dateInp: '#birth_dateError',
    genderInp: '#genderError',
    cityInp: '#cityError',
    phone_numberInp: '#phone_numberError',
    skypeInp: '#skypeError',
    icqInp: '#icqError',
    vkInp: '#vkError',
    facebookInp: '#facebookError'
};

function output(input,chClass,writing) {

    if(input != "") {
        $(chClass).css("border-color","red");
        $(writing).text(input);
        $(chClass).addClass('errorInput');
        if($('#emailError').text()!="ok"){
            $('#emailError').removeClass('textOk').addClass('textError');
        }
        if($('#passwordError').text()!="ok"){
            $('#passwordError').removeClass('textOk').addClass('textError');
        }
        if($('#rePasswordError').text()!="ok"){
            $('#rePasswordError').removeClass('textOk').addClass('textError');
        }
        if($('#statusError').text()!="ok"){
            $('#statusError').removeClass('textOk').addClass('textError');
        }
        if($('#nameError').text()!="ok"){
            $('#nameError').removeClass('textOk').addClass('textError');
        }
        if($('#surnameError').text()!="ok"){
            $('#surnameError').removeClass('textOk').addClass('textError');
        }
        if($('#birth_dateError').text()!="ok"){
            $('#birth_dateError').removeClass('textOk').addClass('textError');
        }

        if($('#phone_numberError').text()!="ok"){
            $('#phone_numberError').removeClass('textError').addClass('textOk');
        }
        if($('#skypeError').text()!="ok"){
            $('#skypeError').removeClass('textError').addClass('textOk');
        }
        if($('#icqError').text()!="ok"){
            $('#icqError').removeClass('textError').addClass('textOk');
        }
        if($('#vkError').text()!="ok"){
            $('#vkError').removeClass('textError').addClass('textOk');
        }
        if($('#facebookError').text()!="ok"){
            $('#facebookError').removeClass('textError').addClass('textOk');
        }
        return false;

    } else {
        $(chClass).css("border-color","green");
        $(writing).text('ok');
        $(chClass).removeClass('errorInput');
        if($('#emailError').text()=="ok"){
            $('#emailError').removeClass('textError').addClass('textOk');
        }
        if($('#passwordError').text()=="ok"){
            $('#passwordError').removeClass('textError').addClass('textOk');
        }
        if($('#rePasswordError').text()=="ok"){
            $('#rePasswordError').removeClass('textError').addClass('textOk');
        }
        if($('#statusError').text()=="ok"){
            $('#statusError').removeClass('textError').addClass('textOk');
        }
        if($('#nameError').text()=="ok"){
            $('#nameError').removeClass('textError').addClass('textOk');
        }
        if($('#surnameError').text()=="ok"){
            $('#surnameError').removeClass('textError').addClass('textOk');
        }
        if($('#birth_dateError').text()=="ok"){
            $('#birth_dateError').removeClass('textError').addClass('textOk');
        }

        if($('#phone_numberError').text()=="ok"){
            $('#phone_numberError').removeClass('textError').addClass('textOk');
        }
        if($('#skypeError').text()=="ok"){
            $('#skypeError').removeClass('textError').addClass('textOk');
        }
        if($('#icqError').text()=="ok"){
            $('#icqError').removeClass('textError').addClass('textOk');
        }
        if($('#vkError').text()=="ok"){
            $('#vkError').removeClass('textError').addClass('textOk');
        }
        if($('#facebookError').text()=="ok"){
            $('#facebookError').removeClass('textError').addClass('textOk');
        }
        return true;

    }
}

function clean(chClass,writing,placeholderBack) {

    $(chClass).css("border-color","initial");
    $(writing).text('');
    $(chClass).attr("placeholder",placeholderBack);

}


$(document).ready(function() {

    $("input[class='inputFields']").change(function() {

            thisInp = '#'+(this).id;
            forMainData = (this).id;
            inputedData = $(thisInp).val();
            placeholder = $(thisInp).attr("placeholder");

            if(inputedData != '') {


                if (forMainData == "emailInp") infReturn = validation.isEmail(inputedData);
                if (forMainData == "passwordInp") infReturn = validation.isPassword(inputedData);
                if (forMainData == "rePasswordInp") infReturn = validation.isRePassword(inputedData,$('#passwordInp').val());
                if (forMainData != 'emailInp' && forMainData != 'passwordInp' && forMainData != "rePasswordInp") infReturn = validation.checkLength(inputedData,50);

               result =  output(infReturn,thisInp,mainData[forMainData]);

               if( result == false) {
                   errorData[forMainData] = false ;
               } else {
                   errorData[forMainData] = true ;
               }

                counter = 0;

                for(var item in errorData) {
                    if (errorData[item] == false) counter++ ;
                }

                if( counter > 0) {
                    $('.save_2').attr("disabled", true);
                }
                if(counter == 0) {
                    $('.save_2').attr("disabled", false);
                }



                if(mainData[forMainData] == 'rePassword') {

                } else {
                    sendData[mainData[forMainData]] = inputedData;
                }


            } else {
                clean( thisInp, mainData[forMainData],placeholder);
            }

    });



     $('.save_2').click(function() {

        $('.loading').css("display","block");

         ajax.send(sendData,'/personal/changeInformation',function(answer){

            $('.loading').css("display","none");
             alert("OK");

         },function() {//error
             })
     });





});