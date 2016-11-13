$(document).ready(function(){
    $("#midi_instrument_change li a").click(function(){
    	if ($(this).text().length > 0){
    		$("#midi_instrument_show").html($(this).text() + ' <span class="caret"></span>');
//    		alert($(this).attr("index"));
    		$.post("Midi_control/program_change/" + $(this).attr("index")); 
    	}       
    });
});