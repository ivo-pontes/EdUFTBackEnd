
function select_estado(val)
{
	 $.ajax({
		 type: 'post',
		 url: 'fetch_data.php',
		 data: {
		  get_estadoion:val
		 },
		 success: function (response) {
		  document.getElementById("select_estado").innerHTML=response; 
		 }
		 });
}


$('#estado').on("change", function(){

  var id = $(this).val();

  $.ajax({
    type: "GET",
    url: "http://localhost:8000/estados/" + id,
    success: function( data ) {

  		var selectM = $('#municipio');                        
    	selectM.empty(); 

    	var x = 0; var i =0;
	   	for(d in data)
	   	{
	   		//console.log(data[d].length);
	   			for (i = 0; i < data[d].length; i++) 
	   			{
	   				selectM.append('<option value=' + data[d][i].id + '>' + data[d][i].descricao + '</option>');
	   			}
	    		
	   	} 
    }
  });

 
});


