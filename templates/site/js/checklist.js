$(document).ready(function() {

    var modalChecklist = document.getElementById('formChecklist');
    var close = document.getElementsByClassName("close")[0];
    var getTheCheckList = document.getElementsByClassName("getBtn")[0];


    function showForm() {
        modalChecklist.style.display = "block";
    }

    /*setTimeout(showForm, 30000);*/

    close.onclick = function() {
        modalChecklist.style.display = "none";
    };

    window.onclick = function(event) {
        if (event.target == modalChecklist) {
            modalChecklist.style.display = "none";
        }
    };

    getTheCheckList.onclick = function()
    {
        ga('send', 'event', 'popup', 'send');
    };

});
