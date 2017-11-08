	function decline_request(id){
			$.ajax({
			type: 'POST',
			url: '../../php/decline-request.php',
			data: {
				exeat_id : id
			},
			success: function(response){
				if(response === "200"){
					alert("Exeat Declined");
				}
				else{
					alert("Could Not Decline Exeat");					
				}
			},
			error: function(){
				alert("Could not perform operation");
			}
		}).then(function(){
			window.location.reload();
		});
		
	}
