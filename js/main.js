//tabela se prikazuje
$(document).ready(function() {
    displayData();

    $("#live-search").keyup(function() {
        var input = $(this).val();
        if (input != "") {
            $.ajax({
                url: "live-search.php",
                method: "POST",
                data: {
                    input: input
                },
                success: function(data) {
                    $("#displayDataTable").html(data);
                }
            })
        } else {
            displayData();
        }
    })
})

//select.php
function displayData() {
    var displayData = "true";
    $.ajax({
        url: "db/select.php",
        type: 'post',
        data: {
            displaySend: displayData
        },
        success: function(data, status) {
        
            $('#displayDataTable').html(data);
        }
    })
}

//insert.php
function zakaziTermin() {
    var datumAdd = $('#completeDatum').val();
    var tretmanAdd = $('#completeTretman').val();
    var radnikAdd = $('#completeRadnik').val();

    $.ajax({
        url: "db/insert.php",
        type: 'post',
        data: {
            datumSend: datumAdd,
            tretmanSend: tretmanAdd,
            radnikSend: radnikAdd

        },
        success: function(data, status) {
        
            $('#completeModal').modal('hide');
            displayData();
        }
    })
}
