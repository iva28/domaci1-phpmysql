
$(document).ready(function() {
    displayData();

    $("#").keyup(function() {
        var input = $(this).val();
        if (input != "") {
            $.ajax({
                url: "",
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


function obrisiTermin(deleteid) {
    $.ajax({
        url: "db/delete.php",
        type: 'post',
        data: {
            deletesend: deleteid
        },
        success: function(data, status) {
            displayData();
        }
    })
}

