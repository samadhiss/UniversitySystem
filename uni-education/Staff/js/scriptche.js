
$(document).ready(function(e){
	$("#first").hide();
    $("#second").hide();
	$("#button").click(function(){
		if($("#select1").val()=="Consumable")
        {
            $("#first").hide();
            $("#second").show();

        }
        if($("#select1").val()=="Electronic")
        {
            $("#second").hide();
            $("#first").show();
        }
	});
	});
