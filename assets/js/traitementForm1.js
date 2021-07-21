// fonction qui permet de tester le PLZ et agir en fonction de cette valeur,
//  elle se déclancge quand on clique sur le boutton "Check Your PLZ"
function checkPLZinit() {
    // si la fonction est déclanchée, on :
    var plz = document.getElementById("PLZ").value; //on récupere la valeur du PLZ
    prefix = plz.substring(0,2) //on récupere le préfixe du PLZ

        //dans tout autres cas, le PLZ est correct et on teste a nouveau le préfixe
        if((prefix == 55 || prefix == 67 || prefix == 64 || prefix == 69 || prefix == 76 )) {
            //si le préfixe correspond aux valeurs que tu as donné dans le PDF, alors on affiche le boutton de consultation personelle
            // ce bloc de code ne fait rien si le boutton de consultation personelle etait deja affiché  
            document.getElementById('consultPersonalBtn').style.display="inline-flex";
            document.getElementById('consltPersonal').style.display="block";
        } else{
            //si le préfixe ne  correspond pas aux valeurs que tu as donné dans le PDF, 
            // on cache le boutton de consltation personnelle 
            alert('Aufgrund Ihrer Adresse können wir Ihnen keine Hausberatung anbieten.')
            document.getElementById('consultPersonalBtn').style.display="none";
            document.getElementById('consltPersonal').style.display="none";
        }
}

//fonction qui permet de mutiplier les champs d'ajout de membres(abonnés ou j'sais pas trop)
// elle se déclanche quand on clique sur le boutton "Add a customer"
var toAddId  = 0 //variable qui compte le nombre d'ajouts on l'initialise à 0
function addUser(){
    // si la fonction est déclanchée, on :
    toAddId ++; // incrémente le compteur 
    var target = document.getElementById('adduser').innerHTML; //on récupere la cible: c'est l'emplacement où on va ajouter le bloc
    var toAdd = " <br><label for='nameAdd"+toAddId+"'> Name :</label>"; //on créé le bloc à ajouter, et on y met un label "Name :"
    toAdd+= "<input type='text' class='form-control' name='nameAdd[]' id='nameAdd"+toAddId+"' >"; //on ajoute le champ de type texte pour saisir le nom
    toAdd+="<br> <label for='etburtsdatumAdd"+toAddId+"'> Geburtsdatum :</label>"; //on ajoute le label Getburtsdatum pour la date de naiss
    toAdd+="<input type='date' class='form-control' name='getburtsdatumAdd[]' id='getburtsdatumAdd"+toAddId+"'> <br>";//on ajoute le champ de type date 
    //tu vois que j'ajoute le compteur à la valeur de l'attribut name; c'est pour creer un nom unnique pour le champ en question ce qui va faciliter la récupération de savaleur en PHP
    document.getElementById('adduser').innerHTML = target + "<hr>" + toAdd //on jumelle le contenu de la cible (target) à celui du bloc à ajouter (toAdd) pour creer un nouveau contenu et l'écrire dans la la cibles
}

