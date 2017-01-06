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
    replaceHtml: function(text){
        return text.replace(/<\/?[^>]+>/g,'');
    },
    isUsername: function(username){
        return /^[\w\.@]{2,20}$/.test(username);
    },
    isEmail: function(email){
        var regExpTest =  /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
        if(email.length > 50) return false;
        return regExpTest;
    },
    isPassword: function(pass){
        return /^[\w\.@]{5,50}$/.test(pass);
    },
    isNumber: function(numberData){
        return /^\d+$/.test(numberData);
    },
    isRePassword: function(password, confirmPassword){
        return password == confirmPassword;
    }
};