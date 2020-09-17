/**
 * fonction arrow : function(x,y) {} devient (x,y)=>{}
 * si les {} ne contiennent qu'une seule instruction alors on peut éléminer les {}
 * si l'instruction est "return f(x)" alors on peut écrire juste "f(x)" : 
 *  (x) =>{return f(x)} devient x=>f(x)
 * si (x) cad un seul parametre alors on peut omettre les ()
 */

//div : afficher la liste des docs
let resultat=document.getElementById("resultat");

//select : liste des users
let selectUser=document.getElementById("user");
selectUser.addEventListener("change",initKeywords); //dep

//select : liste des départements de la région sélectionnée
let selectKeyword=document.getElementById("keyword");
selectKeyword.addEventListener("change",initDocs);

//select : liste des 'docs' de ' keyword' sélectionné
let selectDoc= document.getElementById("docs"); //search
selectDoc.addEventListener("change",afficheDocs);

//input : recherche de villes
let search= document.getElementById("search");
search.addEventListener("input",initDocs);

//génère la liste des users
initUser();

function initUser() { //reg
	fetch("http://localhost/tuto/arrow%20et%20promise/ajax_initregion.php")
	.then(response => response.text())
	.then(data => selectUser.innerHTML=data );
}

//génère la liste des keywords
function initKeywords() { //dep
	fetch("http://localhost/tuto/arrow%20et%20promise/ajax_initdepartement.php?region=" + selectRegion.value)
	.then(response => response.text())
	.then(data => {
			selectKeyword.innerHTML=data;		
			initDocs("keyword");
		});				
}


//appel ajax pour lister les villes qui commencent par la saisie
function initDocs(typederecherche) {	
	let url="";
	if (typederecherche=="keyword")
		url="http://localhost/tuto/arrow%20et%20promise/ajax_listevilles.php?dept=" + selectDept.value;
	else
		url="http://localhost/PHP/Tuto/Project perso/Gest_Doc/_module/search/ajax_listevilles.php?saisie=" + chercher.value;

	fetch(url)
	.then(response => response.json())
	.then(data => {
			jsondocs=data;
			selectDoc.innerHTML="";
			for(let i=0; i<jsondocs.length; i++) {
				let opt=document.createElement("option");
				opt.value=i;
				opt.innerHTML=jsondocs[i].name;
				selectVille.appendChild(opt);	
			}				
			//afficheDocs();
		});
}


