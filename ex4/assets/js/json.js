// Converty fiichier text a fic



var veilleArray  = [];





//  validation
function AddRow(){
   event.preventDefault();

var Title= document.getElementById('title').value;
var Date= document.getElementById('date').value;  
var Eve= document.getElementById('eve').value;
var vlObj={title:Title,date:Date,eve:Eve};
veilleArray.push(vlObj);

console.log(veilleArray);




if( Title ==="" || Title.length > 20 ){
document.getElementById("pr1").style.display="block";   
document.getElementById("pr2").style.display="none";   
}
else{
document.getElementById("pr1").style.display="none";   
document.getElementById("pr2").style.display="block";   
}



if(Date.length > 20 || Date==="" ){
document.getElementById("pr3").style.display="block";
document.getElementById("pr4").style.display="none";    
}
else{  
document.getElementById("pr4").style.display="block";   
document.getElementById("pr3").style.display="none"; 
}


if(Eve ==="")
{
document.getElementById("pr5").style.display="block";
document.getElementById("pr6").style.display="none";   
 
}
else  {
document.getElementById("pr5").style.display="none";
document.getElementById("pr6").style.display="block";   


   
   vider();
}

}	

// vider
function vider() {
var inputs = document.querySelectorAll("input");
for (let i = 0; i < inputs.length; i++) {
 inputs[i].value = "";
}
}
// create row



