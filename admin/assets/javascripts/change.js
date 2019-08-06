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
	zmembres.style.display= "block";
	zfichiers.style.display= "none";
	zappreciations.style.display= "none";
	znotifications.style.display= "none";
	mesaccueil.style.display= "none";
});


fichiers.addEventListener("click",function(){
	zmembres.style.display= "none";
	zfichiers.style.display= "block";
	zappreciations.style.display= "none";
	znotifications.style.display= "none";
	mesaccueil.style.display= "none";
});

appreciations.addEventListener("click",function(){
	zmembres.style.display= "none";
	zfichiers.style.display= "none";
	zappreciations.style.display= "block";
	znotifications.style.display= "none";
	mesaccueil.style.display= "none";
});

notifications.addEventListener("click",function(){
	zmembres.style.display= "none";
	zfichiers.style.display= "none";
	zappreciations.style.display= "none";
	znotifications.style.display= "block";
	mesaccueil.style.display= "none";
});