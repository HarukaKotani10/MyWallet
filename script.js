
var $ = function(id){
    return document.getElementById(id);
}

var addToMain = function(){

    var tittle, amount;

    tittle = $("tittle").value;
    amount = $("amount").value;
    $("displayTittle").text(tittle);

}

window.onload = function(){
    $("add").onclick = addToMain;

}

