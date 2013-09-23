$(document).ready( function() {
    $("#enviar").click(function(e){
        e.preventDefault();
        if(validaFormulario()){
            var data = $("#data").serialize();
            $.ajax({
                url: '/saveuser',
                type:'POST',
                data: data,
                dataType: 'json',
                beforeSend: function () {
                },
                success:function(results){
                    if(results.state == "1" || results.state == "2"){
						$(".modal-header, .modal-footer, .container-fluid, .modal-header").fadeOut("fast", function(){
						    $(".registroOk > .modal-header").show();
						    $(".registroOk").fadeIn();
						});
                    }else{

                    }
                }
            });
        }
        return false;
    });
    
    //Cambiar select comuna
    $("#region_id").change(function(){
        var region_id = $(this).val();
        var optionsSel = '<option value="">Selecciona</option>';
        $.each(comunas, function(index, val){
            if(val.region_id == region_id){
                optionsSel += '<option value="'+val.id+'">'+val.name+'</option>';
            }
        });
        $("#comuna_id").empty().html(optionsSel);
    });
});