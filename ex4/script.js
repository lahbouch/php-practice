var RD = document.getElementById("RB");
var RSS = document.getElementById("HYT");
RD.addEventListener("click",function(){
    var DM = new XMLHttpRequest();
DM.open('GET','users.json');
DM.onload = function(){
    var HM = JSON.parse(DM.responseText);
    //document.write(HM[0].SubjectName);
    //RSS.innerHTML = HM[0].SubjectName ;
    addHTML(HM);
};
DM.send();
});


function addHTML(data){
    var PAUSE = "";
    for(i = 0 ; i< data.length ; i++){
        PAUSE += "<tr>" + "<td>" + data[i].Name + "</td>"  +
                 "<td>"+data[i].lname + "</td>"  +
                 "<td>"+ data[i].Tele+"</td>"+"</tr>";
    }
    RSS.insertAdjacentHTML('beforeend',PAUSE);
}
