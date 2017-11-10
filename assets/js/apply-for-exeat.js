    $(document).ready(function(){
            $('#exeat-form').submit(function(){
                event.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                type: 'POST',
                url: '../../php/apply-for-exeat.php',
                data: formData,
                success: function(response){
                    if(response === "200"){
                        alert("Successfully applied for Exeat");
                    }
                    else{
                        alert(response);                   
                    }
                },
                error: function(){
                    alert("Could not perform operation");
                },
                cache: false,
                contentType: false,
                processData: false
            
                }).then(function(){
                    window.location.reload();
                });
            });
    });
