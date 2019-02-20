function myfunction(){
    var x = document.getElementById("value").value;
    var y;
    if ( x == 3){
    var y = "Bingo! You are right! Click the picture for more information.";}
     else {
       var y = "Sorry! Give it one more shot!";}
document.querySelector("h4").innerHTML = y;
document.getElementById("value").value = "";
    }
