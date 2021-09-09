
var $ = function(id){
    return document.getElementById(id);
}

var tittle = [];
var amount = [];
var count =0;

var addIncome = function(){
    
    tittle[count] = $("tittle").value;
    amount[count]=  $("amount").value;
    window.alert("dfdif" + tittle[0]);
    count++;

}

var addToMain = function(){

    //window.alert("jfdkfd" + tittle[0]);
    for(var i=0; i < tittle.count; i++)
     $("displayTittle").innerHTML = (tittle[count] + " " + amount[count]);
}

window.onload = function(){

    $("addToMain").onclick = addIncome;
    $("goBackToMain").onclick = addToMain;


}


