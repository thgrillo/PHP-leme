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
                }, 1500);
               
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

    $("#txtCEP").focusout(function(){
        if ($("#txtCEP").val().length >=5){
            var cep = $("#txtCEP").val().replace("-", "")
            var url = "https://viacep.com.br/ws/" + cep + "/json/";
            $.ajax({
                url: url,
                type: "GET",
                dataType: "JSONP",
                data: {},
            
                success: function(data){
                    console.log(data);
                    $("#txtLogradouro").val(data.logradouro)
                    $("#txtComplemento").val(data.complemento)
                    $("#txtBairro").val(data.bairro)
                    $("#txtLocalidade").val(data.localidade)
                    $("#txtUf").val(data.uf)
                    $("#txtIbge").val(data.ibge)
                    $("#txtGia").val(data.gia)
                    $("#txtDDD").val(data.ddd)
                    $("#txtSiafi").val(data.siafi)
                },
                error: function(error){
                    console.log(error);
                }
            });
        }
    });

});

