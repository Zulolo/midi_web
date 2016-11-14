$(document).ready(function(){
    $("#midi_instrument_change li a").click(function(){
    	if ($(this).text().length > 0){
    		$("#midi_instrument_show").html($(this).text() + ' <span class="caret"></span>');
    		$.post("Midi_control/program_change/", {channel: $("#midi_channel").val(), instrument: $(this).attr("index")}); 
    	}       
    });
    $("#midi_set_volume").click(function(){
    	if ($("#midi_volume").val().length > 0){
    		$.post("Midi_control/set_volume/", {volume: $("#midi_volume").val()}); 
    	}       
    });
});