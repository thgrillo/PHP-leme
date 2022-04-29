$(document).ready(function(){
    $("#btnCadastrar").click(function() {
        var obj = {
            txtCEP: $("#txtCEP").val(),
            txtLogradouro: $("#txtLogradouro").val(),
            txtComplemento: $("#txtComplemento").val(),
            txtBairro: $("#txtBairro").val(),
            txtLocalidade: $("#txtLocalidade").val(),
            txtUf: $("#txtUf").val(),
            txtIbge: $("#txtIbge").val(),
            txtGia: $("#txtGia").val(),
            txtDDD: $("#txtDDD").val(),
            txtSiafi: $("#txtSiafi").val()
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
                $("#txtCEP").val(dt[0].split(":")[1])
                $("#txtLogradouro").val(dt[1].split(":")[1])
                $("#txtComplemento").val(dt[2].split(":")[1])
                $("#txtBairro").val(dt[3].split(":")[1])
                $("#txtLocalidade").val(dt[4].split(":")[1])
                $("#txtUf").val(dt[5].split(":")[1])
                $("#txtIbge").val(dt[6].split(":")[1])
                $("#txtGia").val(dt[7].split(":")[1])
                $("#txtDDD").val(dt[8].split(":")[1])
                $("#txtSiafi").val(dt[9].split(":")[1])
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

