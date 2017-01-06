function Update(target,text,type) {
    $(target).click(function() {
        // поставить проверку на 300 символов и делать крестик в случае false
        $(target).attr("src","/css/img/loading.GIF");
        var inf = new Object();
        inf['value'] = $(text).val();
        inf['type'] = type;
        ajax.send(inf,'/personal/changeInformation',function(answer){

            $(target).attr("src","/css/img/save.png");

        },function() {

        });
    });
}

$(document).ready(function() {

    Update('#saveIdea','.idea','idea');
    Update('#saveName','.name','name');
    Update('#saveSurname','.surname','surname');
    Update('#savePatronymic','.patronymic','patronymic');
    Update('#saveWebsite','.website','website');
    Update('#saveSkype','.skype','skype');
    Update('#savePhone_number','.phone_number','phone_number');



});
