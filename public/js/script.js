
function addDateTypeFirefox()
{
	//Adicionando tipo "DATE" para o firefox(não nativo)
	webshims.setOptions('forms-ext', {types: 'date'});
	webshims.polyfill('forms forms-ext');
	$.webshims.formcfg = {
	  en: {
	      dFormat: '-',
	      dateSigns: '-',
	      patterns: {
	          d: "yy-mm-dd"
	      }
	  }
	};
}

function esmaecer()
{
	var flash = document.getElementById('flash-message');
	flash.style.display = 'none';
}

function load()
{
	setTimeout(esmaecer,3000);

	var buttonRemover = document.getElementById('buttonRemover');
	
	buttonRemover.addEventListener('click',function(event){
		var msgModal = document.getElementById('mensagemModal');
		msgModal.innerHTML = "Você realmente deseja excluir:<br><strong>" + buttonRemover.value +"</strong>?";
	},false);

	var buttonExcluir = document.getElementById('excluir');

	buttonExcluir.addEventListener('click',function(){
		document.getElementById('formExcluir').submit();
	});


	addDateTypeFirefox();
}

document.addEventListener("DOMContentLoaded", load, false);
