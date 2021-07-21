
function setInput(value, cible, classe){
    document.getElementById(cible).value = value;
    buttons = document.getElementsByClassName(classe)
    for(i = 0; i<buttons.length; i++){
        buttons[i].style.borderRadius="10px 0px 10px 0px"
        buttons[i].style.color='black'
        buttons[i].style.backgroundColor='rgb(210, 226, 235)'
    }
    activate(value)
}

function checkPLZ() {
    // si la fonction est déclanchée, on :
    var plz = document.getElementById("PLZ").value; //on récupere la valeur du PLZ
    prefix = plz.substring(0,2) //on récupere le préfixe du PLZ
    if(prefix == "00"){ 
        //si le préfixe est 00 alors on affiche un méssage d'erreur
        alert("PLZ ist nicht korrekt. Die PLZ darf nicht mit \"00\" beginnen.");
    }
    else if(plz.length != 5 ){
        //si le PLZ contient moins de 5 chiffres, ou plus de 5chiffres, on affiche un méssage d'érreur
        alert("PLZ ist nicht korrekt. Die PLZ muss genau 5 Stellen haben.");
    }
    
}

function annimationFormBlocBTNOver(id){
    document.getElementById(id).style.color="whitesmoke"
    document.getElementById(id).style.backgroundColor="rgb(15, 134, 214)"
}
function annimationFormBlocBTNOut(id, input){
    if(document.getElementById(input)){
        if(document.getElementById(input).value != id ){
            document.getElementById(id).style.backgroundColor='rgb(210, 226, 235)'
            document.getElementById(id).style.color='black'
        }
    }
}


//propre au fomulaire 3

function popupBloc(blocId){
    document.getElementById(blocId).style.top="-10px"
    document.getElementById(blocId).style.opacity="1"

}
function popdownbloc(blocId){
    document.getElementById(blocId).style.top="-600px"
    document.getElementById(blocId).style.opacity="0"

}
function activate(blocId){
    document.getElementById(blocId).style.color="whitesmoke"
    document.getElementById(blocId).style.backgroundColor="rgb(15, 134, 214)"
    document.getElementById(blocId).style.borderRadius="20px 20px 20px 20px"
    if(document.getElementById(blocId+'_input')){
        if(document.getElementById(blocId+'_input').checked == true){
            document.getElementById(blocId).style.borderRadius="10px 0px 10px 0px"
            document.getElementById(blocId).style.color='black'
            document.getElementById(blocId).style.backgroundColor='rgb(210, 226, 235)'
        }
    }
}


// Propre au formulaire 4
stars = document.getElementsByClassName('star');
for(i = 0; i<stars.length; i++){
     stars[i].addEventListener("click", function (){
        idInput = this.id.substring(0,(this.id.length-2))
        value = this.id.substring((this.id.length-1),(this.id.length))
        plainStarRoute = "assets/icon/stars/star.svg"
        emptyStarRoute = "assets/icon/stars/star-empty.svg"
        if(value == 1){
            if(this.getAttribute("src") == emptyStarRoute){
                this.setAttribute("src", plainStarRoute)
            }
            else if(this.getAttribute("src") == plainStarRoute){
                if(document.getElementById(idInput+"_2").getAttribute("src")==plainStarRoute || document.getElementById(idInput+"_3").getAttribute("src")==plainStarRoute)                {
                    document.getElementById(idInput+"_2").setAttribute("src", emptyStarRoute)
                    document.getElementById(idInput+"_3").setAttribute("src", emptyStarRoute)
                }else{
                    this.setAttribute("src", emptyStarRoute)
                    value--;
                }
            }
        }
        else if(value == 2)
        {
            if(this.getAttribute("src") == emptyStarRoute){
                document.getElementById(idInput+"_1").setAttribute("src", plainStarRoute)
                this.setAttribute("src", plainStarRoute)
            }
            else if(this.getAttribute("src") == plainStarRoute){
                if( document.getElementById(idInput+"_3").getAttribute("src")==plainStarRoute)                {
                    document.getElementById(idInput+"_3").setAttribute("src", emptyStarRoute)
                }else{
                    this.setAttribute("src", emptyStarRoute)
                    value--;
                }
            }
        }
        else if (value == 3){
            if(this.getAttribute("src") == emptyStarRoute){
                document.getElementById(idInput+"_1").setAttribute("src", plainStarRoute)
                document.getElementById(idInput+"_2").setAttribute("src", plainStarRoute)
                this.setAttribute("src", plainStarRoute)
            }
            else if(this.getAttribute("src") == plainStarRoute){
                this.setAttribute("src", emptyStarRoute)
                value--;
            }
        }
        document.getElementById(idInput).value = value;

    })
}