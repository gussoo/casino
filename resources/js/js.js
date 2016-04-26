
function check_pro() {
	if(document.newpro.nombre.value.length == 0)
	{
		swal("Please insert a Casino Name");
		return false;
	}
	
	if(document.newpro.location.value.length == 0)
	{
		swal("Please insert a Location");
		return false;
	}
	
	swal({
	  title: "Are you sure to create this Casino?",
	  text: "...",
	  type: "warning",
	  showCancelButton: true,
	  confirmButtonColor: "#DD6B55",
	  confirmButtonText: "Yes!",
	  cancelButtonText: "No!",
	  closeOnConfirm: false,
	  closeOnCancel: false
	},
	function(isConfirm){
	  if (isConfirm) {
		    	swal("Created!", "This casino was created successfully", "success");
		    	document.newpro.submit();
		   }else{
		   		swal("Cancel!", "bye!", "error");
		   		return false;
		   }
	});
	return false;
	
}
