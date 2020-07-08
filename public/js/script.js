function calculvente()
{
// alert("Montant de l'achat" + document.getElementById("formulaire").elements["prixUnitaire"].value);
var prix= document.getElementById("formulaire").elements["prixUnitaire"].value;
var quantite= document.getElementById("formulaire").elements["quantiteVente"].value;
var montantrecu= document.getElementById("formulaire").elements["montantRecu"].value;

// if(prix<0)
//     alert("le prix doit etre un nombre positif");

// else 
// if(quantite<0){
//     alert("la quantité doit etre supérieure à 0");
// }
// else 
// if(montantRecu<0){
//     alert("le montant entré doit etre supérieure à 0");
// }
// else{
var vente= document.getElementById("formulaire").elements["prixUnitaire"].value * document.getElementById("formulaire").elements["quantiteVente"].value;
// alert(vente);
document.getElementById("formulaire").elements["montantAchat"].value=vente;
// }
}

function calculmonnaie()
{
var monnaie= document.getElementById("formulaire").elements["montantRecu"].value - document.getElementById("formulaire").elements["montantAchat"].value;
document.getElementById("formulaire").elements["monnaie"].value=monnaie;
}



var dropNav=document.getElementById('navbarDropdown');
var cible=document.getElementById('cible');
dropNav.onclick=function(){
    cible.className.toggle('show');
}
