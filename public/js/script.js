
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
	addDateTypeFirefox();
}

document.addEventListener("DOMContentLoaded", load, false);
