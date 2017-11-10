	function decline_request(id, staff_id){
			$.ajax({
			type: 'POST',
			url: '../../php/decline-request.php',
			data: {
				exeat_id : id,
				staffId: staff_id
			},
			success: function(response){
				if(response === "200"){
					alert("Exeat Declined");
				}
				else{
					alert(response);
					// alert("Could Not Decline Exeat");					
				}
			},
			error: function(){
				alert("Could not perform operation");
			}
		}).then(function(){
			window.location.reload();
		});
		
	}
