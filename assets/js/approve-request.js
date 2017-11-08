	function approve_request(id){
			$.ajax({
			type: 'POST',
			url: '../../php/approve-request.php',
			data: {
				exeat_id : id
			},
			success: function(response){
				if(response === "200"){
					alert("Exeat Approved");
				}
				else{
					alert("Could Not Approve Exeat");					
				}
			},
			error: function(){
				alert("Could not perform operation");
			}
		
		}).then(function(){
			window.location.reload();
		});
		
	}
