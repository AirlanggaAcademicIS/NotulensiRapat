// JavaScript Document
$.ajax({
	    url: "http://localhost/new_notulensirapat_backup/hal_kaprodi.php",
	    dataType: 'json',
	    type: 'POST'	        
	}).done(function(data){
		 console.log(data);
		$.each( data, function( index, value ){
			console.log(value.no_rapat);
			$("#no_rapat").append("<option>"+rapat+"</option>")
			
		});
	
	});
	
	 $("#no_rapat").on("change",function(){
      // $("#NamaBarang").attr("data-source","");
      var no_rapat = $('select[name="no_rapat"]').attr('selected','selected').val();
      // console.log(source);
      $.ajax({
        url: "http://localhost/new_notulensirapat_backup/hal_kaprodi.php?konf=0086",
	    dataType: 'json',
	    type: 'POST',
        data:{"no_rapat":no_rapat}
      }).done(function(data){
        var source = [];
        $.each( data, function( index, value ){
          console.log(value.hal);
		  $("#tempat").val(value.tempat);
		  $("#hal").val(value.hal);
        });      
      });
    });
