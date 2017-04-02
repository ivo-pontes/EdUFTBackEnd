
function preencherEstadosCidades()
{
	$('#estado').on("change", function(){
	  var id = $(this).val();
	  ajaxCall(id);
	});
}

function preencherTocantins()
{
	ajaxCall(27)
}

function ajaxCall(id)
{
  $.ajax({
    type: "GET",
    url: "http://localhost:8000/estados/" + id,
    success: function( data ) 
    {
  		var selectM = $('#municipio');                        
    	selectM.empty(); 

	   	for(d in data)
   			for (i = 0; i < data[d].length; i++) 
   				selectM.append('<option value=' + data[d][i].id + '>' + data[d][i].descricao + '</option>');
    }
  });
}

$( document ).ready(function() {
 	preencherTocantins();   
	preencherEstadosCidades();
});

