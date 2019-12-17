$(document).ready(function() {

    $.ajax({
        type: 'GET',
        url: 'getRestaurantes.php',
        dataType: 'json',
        success: function(result){
            $.each(result, function(index,element) {
                $('#restaurantes').append("<option value=\"" + element.id_rest + "\">" + element.nombre + "</option>");
            });
        }
    });

    $("#restaurantes").change( function(){
        //RESET
        var elem = {
            "restaurante": $("#restaurantes").val()
        };

        $.ajax({
            type: 'POST',
            data: elem,
            url: 'algo.php',
            dataType: 'json',
            success: function(result){
                
            }
        });

    });

});