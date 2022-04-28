$(document).ready(function(){
    $("#btnCadastrar").click(function() {
        var obj = {
            txtNome: $("#txtNome").val(),
            txtEmail: $("#txtEmail").val(),
            txtTel: $("#txtTel").val()
        };
        console.log(obj);

        $.ajax({
            url: "action/usuarioAction.php?req=1",
            type: "POST",
            dataType: "text",
            data: obj,
            beforeSend: function(){
                $("#spResult").html("Processando.");
            },
            success: function(data){
                console.log(data);
                setTimeout(function(){ 
                    $("#spResult").html("Enviado.");
                }, 1500)
            },
            error: function(error){
                console.log(error);
            }
        });
    });

});

