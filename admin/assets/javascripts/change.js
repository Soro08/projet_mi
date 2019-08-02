/*  MENU    */
/*-------------*/
var  membres= document.getElementById("Membres");
var  fichiers= document.getElementById("Fichiers");
var  appreciations= document.getElementById("Appreciations");
var  notifications= document.getElementById("Notifications");

/*  ZONES   */
/*-------------*/
var  zmembres= document.getElementById("zmembres");
var  zfichiers= document.getElementById("zfichiers");
var  zappreciations= document.getElementById("zappreciations");
var  znotifications= document.getElementById("znotifications");
var  mesaccueil= document.getElementById("mesaccueil");

/*  EVENTS   */
/*-------------*/
membres.addEventListener("click",function(){
	zmembres.style.visibility= "visible";
	zfichiers.style.visibility= "hidden";
	zappreciations.style.visibility= "hidden";
	znotifications.style.visibility= "hidden";
	mesaccueil.style.visibility= "hidden";
});


fichiers.addEventListener("click",function(){
	zmembres.style.visibility= "hidden";
	zfichiers.style.visibility= "visible";
	zappreciations.style.visibility= "hidden";
	znotifications.style.visibility= "hidden";
	mesaccueil.style.visibility= "hidden";
});

appreciations.addEventListener("click",function(){
	zmembres.style.visibility= "hidden";
	zfichiers.style.visibility= "hidden";
	zappreciations.style.visibility= "visible";
	znotifications.style.visibility= "hidden";
	mesaccueil.style.visibility= "hidden";
});

notifications.addEventListener("click",function(){
	zmembres.style.visibility= "hidden";
	zfichiers.style.visibility= "hidden";
	zappreciations.style.visibility= "hidden";
	znotifications.style.visibility= "visible";
	mesaccueil.style.visibility= "hidden";
});