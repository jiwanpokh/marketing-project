       
$(document).ready(function() {
	$("#country").change(function(){
		
		if($("#country").val()=="other"){

        //$("#othercountryfield").remove();
        $("#othercountryfield").append('<input type="text" name="adminothercountry" id="othercountry" class="form-control">');
    }

    else
    {
    	$("#othercountry").remove();
    }
       }); 
	$("#duties").change(function(){
		
		if($("#duties").val()=="other2"){

        //$("#othercountryfield").remove();
        $("#dutiesfield").append('<input type="text" name="dutiesotherfield" id="duty" class="form-control">');
    }

    else
    {

    	$("#duty").remove();
    }
       	
       });

    $(document).ready(function() {

    $("#example").DataTable();

} );
    // $(document).ready(function() {
    // $("#example").DataTable();
    // });
  

});
