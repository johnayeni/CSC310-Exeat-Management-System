	function approve_request(id, staff_id){
			$.ajax({
			type: 'POST',
			url: '../../php/approve-request.php',
			data: {
				exeat_id : id,
				staffId: staff_id
			},
			success: function(response){
				if(response === "200"){
					alert("Exeat Approved");
				}
				else{
					// alert("Could Not Approve Exeat");
					alert(response);					
				}
			},
			error: function(){
				alert("Could not perform operation");
			}
		
		}).then(function(){
			window.location.reload();
		});
		
	}
