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

    $("#btnConsultar").click(function(){
        $.ajax({
            url: "action/usuarioAction.php?req=2",
            type: "GET",
            dataType: "text",
            data: {},
           
            success: function(data){
                console.log(data);
                $("#pResult").html(data);
                var dt = data.split("|")
                $("#txtNome").val(dt[0].split(":")[1])
                $("#txtEmail").val(dt[1].split(":")[1])
                $("#txtTel").val(dt[2].split(":")[1])
            },
            error: function(error){
                console.log(error);
            }
        });
    });

});

