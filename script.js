
var $ = function(id){
    return document.getElementById(id);
}

var addToMain = function(){

    var tittle, amount;

    tittle = $("tittle").value;
    amount = $("amount").value;
    $("displayTittle").innerHTML("tittle");

}

window.onload = function(){

    $("addToMain").onclick = addToMain;

}

