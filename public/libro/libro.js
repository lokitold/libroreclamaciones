/**
 * Created by victor on 02/06/16.
 */

/*  Formulario registro reclamo */

$(document).ready(function(){
    $('input[type="radio"]').click(function(){
        if($(this).attr("value")=="persona"){
            $(".box").not(".persona").hide();
            $(".persona").show();
        }
        if($(this).attr("value")=="empresa"){
            $(".box").not(".empresa").hide();
            $(".empresa").show();
        }
    });
});