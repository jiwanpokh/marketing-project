       
$(document).ready(function() {
	$("#country").change(function(){
		
		if($("#country").val()=="other"){

        //$("#othercountryfield").remove();
        $("#othercountryfield").append('<input type="text" name="jiwan" id="othercountry" class="form-control">');
    }

    else
    {

    	$("#othercountry").remove();
    }
       }); 

	$("#duties").change(function(){
		
		if($("#duties").val()=="other2"){

        //$("#othercountryfield").remove();
        $("#dutiesfield").append('<input type="text" name="jiwan" id="duty" class="form-control">');
    }

    else
    {

    	$("#duty").remove();
    }
       	
       });
});
