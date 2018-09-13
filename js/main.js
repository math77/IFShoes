/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function(){

    $("#foto-perfil").change(function(){
        var reader = new FileReader();
            reader.readAsDataURL($("#foto-perfil")[0].files[0]);

        reader.onload = function (event) {
            $("#preview-perfil").attr('src', event.target.result);
        };
    });

    $(".slide ul").cycle({
      fx: 'cover',
      speed: 2000,
      timeout: 1000
    });
    
    $(".close").click(function(){
       $("#modalInfo").hide(); 
    });
});

function openModal(conteudo){
    $("#conteudo").html(conteudo);
    $("#modalInfo").show();
}
