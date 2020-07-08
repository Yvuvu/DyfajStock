function calculvente()
{
// alert("Montant de l'achat" + document.getElementById("formulaire").elements["prixUnitaire"].value);

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

// var prix= document.getElementById("formulaire").elements["prixUnitaire"].value;
// var quantite= document.getElementById("formulaire").elements["quantiteVente"].value;
// var montantrecu= document.getElementById("formulaire").elements["montantRecu"].value;
