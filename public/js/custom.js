/* ---------- AJAX SETUP ---------- */
$.ajaxSetup({
    error: function(XMLHttpRequest, textStatus, errorThrown) {
        var msg = '';
        var file = '';
        var line = '';
        if(XMLHttpRequest.responseText != null){
            msg = XMLHttpRequest.responseJSON.message;
            file = XMLHttpRequest.responseJSON.file ;
            line = XMLHttpRequest.responseJSON.line ;
            console.log(XMLHttpRequest.responseText);
            console.log(XMLHttpRequest);
        }
        if (XMLHttpRequest.readyState == 4) {
            // HTTP error (can be checked by XMLHttpRequest.status and XMLHttpRequest.statusText)
            iziToast.warning({
                title: 'ERROR '+ XMLHttpRequest.status,
                message: XMLHttpRequest.statusText + '<br>' + msg + '<br>' + file + '<br>Line: ' + line,
                position: 'topCenter',
                close: false,
            });
        }
        else if (XMLHttpRequest.readyState == 0) {                
            // Network error (i.e. connection refused, access denied due to CORS, etc.)
            iziToast.warning({
                title: 'ERROR '+ XMLHttpRequest.status,
                message: 'Network Error',
                position: 'topCenter',
                close: false,
            });
        }
        else {
            iziToast.warning({
                title: 'ERROR',
                message: 'Unknown Error',
                position: 'topCenter',
                close: false,
            });
            // something weird is happening
        }
    }
});

/* ---------- ONLOAD FUNCTION ---------- */

$(document).ajaxStart(function(){
    $("#wait").css("display", "block");
});
$(document).ajaxComplete(function(){
    $("#wait").css("display", "none");
});

$(document).ready(function() {
    loadplantTbl();    
});

/* ---------- FUNCTIONS ---------- */
function loadplantTbl(text,url = 'plants')
{
    $.ajax({
        type		: "get",
        url		    : url,
        data: {
            'text': text
        },
        /* global: false, */
        success		: function(data) {
            $("html, body").animate({ scrollTop: 0 }, "smooth");				
            $('#plants-table-div').html(data);
        }
    });
}
function addplant()
{
    var data = $('#add-plants-form').serialize();
    $.ajax({
        type		: "POST",
        url		    : 'plants',
        data: data,
        success		: function(data) {					
            if(data.type == 'success'){                
                iziToast.success({
                    message: data.message,
                    position: 'topCenter'
                });
            }
            else{
                iziToast.error({
                    message: data.message,
                    position: 'topCenter'
                });
            }
            loadplantTbl();
            $('#add-plants-form').trigger('reset');
            $('#plantsModal').modal('hide');
        }
    });
}

/* ---------- EVENTS ---------- */
$('#add-plant-btn').on('click', function(e){
    $('#plantsModal').modal('show');
});
$('#add-plant-submit').on('click', function(){
    addplant();
});
$('#search-tb').on('keypress', function(e){
    if(e.keyCode == 13 && $(this).val() != '')
    {
        loadplantTbl($(this).val());
    }
});