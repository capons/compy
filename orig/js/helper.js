var ajax = {
    send: function(data, target, ok, error) {
        $.ajax({
            url: target,
            type: 'POST',
            timeout: -1,
            data: {json: JSON.stringify(data)},
            success: ok,
            error: error
        });
    }
};

var validation = {
    checkLength: function (text,requestLength) {
        if(text.length > requestLength || text.length == 0) return "Превышено количество символов";
         else return '';

    },
    replaceHtml: function(text){
        return text.replace(/<\/?[^>]+>/g,'');
    },
    isUsername: function(username){
        return /^[\w\.@]{2,20}$/.test(username);
    },
    isEmail: function(email){
        var regExpTest =  /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
        if(email.length > 50 || regExpTest == false) return 'Неккоректный e-mail';
        else return '';
    },
    isPassword: function(pass){
        var decimal = /^[\w\.@]{5,50}$/;
        if(decimal.test(pass)) {
            return "";
        } else {
            return "Неккоректный пароль";
        }
    },
    isNumber: function(numberData){
        return /^\d+$/.test(numberData);
    },
    isRePassword: function(password, confirmPassword){
        if(password != confirmPassword) {
            return "Неккоректно";
        }
        else {
            return "";
        }
    },
    visualInput: function(result,target,submitButtonId) {
        if(result == "true") {
            $(target).css("backgroundColor", "red");
            document.getElementById(submitButtonId).disabled = 1;
        }
        else {
            $(target).css("backgroundColor", "white");
            document.getElementById(submitButtonId).disabled = 0;
        }

    }
};
