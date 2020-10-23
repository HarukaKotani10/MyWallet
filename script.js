
var $ = function(id){
    return document.getElementById(id);
}

var tittle = [];
var amount = [];
var count =0;

var addIncome = function(){
    
    tittle[count] = $("tittle").value;
    amount[count]=  $("amount").value;

    count++;

}

var addToMain = function(){

    for(var i=0; i < tittle.count; i++)
     window.alert(tittle[count] + " " + amount[count]);
}

window.onload = function(){

    $("addToMain").onclick = addIncome;
    $("goBackToMain").onclick = addToMain;

}
