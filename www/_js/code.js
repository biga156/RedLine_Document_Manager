
     function afficher()	{
		    let o=document.getElementById("fil_src");
	    	let oinfo=document.getElementById("info");
		    oinfo.innerHTML +="nom : " + o.files[0].name + "<br>";
		    oinfo.innerHTML +="taille : " + o.files[0].size + "<br>";
		    oinfo.innerHTML +="type : " + o.files[0].type + "<br>";
		    oinfo.focus();
    }

    function afficherDestination()	{
		    let o=document.getElementById("destination");
	    	let oinfo=document.getElementById("destination");
		    oinfo.innerHTML +="nom : " + o.folder[0] + "<br>";
		   
		    oinfo.focus();
	}

/************************** */







/****************************************** */
/*
//search init
let resultat=document.getElementById("resultat");
let selectKeyword=document.getElementById("search");
selectKeyword.addEventListener("change",initKey);


function initKey() {	
	let xmlhttp = new XMLHttpRequest();
	let url = "http://localhost/PHP/Tuto/PHP_Obj/.php?id=" + selectKey.value;
	xmlhttp.open("GET",url,true);
	xmlhttp.onreadystatechange=mafonction;
	xmlhttp.send();

	function mafonction() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{			
			selectDoc.innerHTML=xmlhttp.responseText;
			//afficheDoc();
		}
	}
}
*/
/****************************************** */
/*
//search 
let keyword= document.getElementById("search");
keyword.addEventListener("input",searchDocs);

/**
 * 1. récuperer la chaine saisie
 * 2. si la longueur de la chaine est >=3 alors faire une requete ajax qui récupére la liste des villes correspondantes
 * 3. mettre à jour la liste déroulantte selectVille
 */
/*
function searchDocs() {
	let saisie=keyword.value;
	if (saisie.length>3) {
		let xmlhttp = new XMLHttpRequest();
		let url = "http://localhost/PHP/Tuto/Project perso/Gest_Doc/_module/search/ajax_listedocs.php?saisie=" + saisie;
		xmlhttp.open("GET",url,true);
		xmlhttp.onreadystatechange=mafonction;
		xmlhttp.send();

		function mafonction() {
			if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{			
				selectDoc.innerHTML=xmlhttp.responseText;
				//afficheKey();
			}
		}
	}

}
*/
/******************************************* */
/*
//search afficcher
let selectKeywords= document.getElementById("search");
selectKeywords.addEventListener("change",afficheDoc);

function afficheDoc() {
	let index=selectDoc.selectedIndex;
	let opt=selectDoc.options[index];	
	docs=opt.dataset;
}
*/

