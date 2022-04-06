const chNom = document.querySelector("#nom");
const chPrenom = document.querySelector("#prenom");
const chMail = document.querySelector("#mail");
const chMdp = document.querySelector("#mdp");

// Fonction de preremplissage des champs du formulaire de modification
function remplirChamps(nom, prenom, mail, mdp){
    chNom.setAttribute("value", nom);
    chPrenom.setAttribute("value", prenom);
    chMail.setAttribute("value", mail);
    chMdp.setAttribute("value", mdp);
}

