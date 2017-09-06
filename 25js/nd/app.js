// ND padaryti du inputus ir mygtuka. Spaudziant migtuka sukurti nauja objekta su inputo parametrais ir sudeti juos i masyva.

var vardas = document.querySelector('.name');
var pavarde = document.querySelector('.surname');
var yearBorn = document.querySelector('.year');
var btn = document.querySelector('.checkin');
var sveciaiDiv = document.querySelector('.sveciai');

function Svecias(){
    this.vardas = vardas.value  ;
    this.pavarde= pavarde.value;
    this.yearBorn = yearBorn.value;
}
vardas.focus();
var sveciai = [];
btn.addEventListener('click',chechIn);
document.addEventListener('keydown',function(event){
    if(event.keyCode==13){
        chechIn();
    }
});


function chechIn(){
    tempSvecias=new Svecias();
    sveciai.push(tempSvecias);
    var html='<li>'+tempSvecias.pavarde+' '+tempSvecias.vardas+' '+tempSvecias.yearBorn+'</li>';
    sveciaiDiv.insertAdjacentHTML('beforeend', html);
    vardas.value=null;
    pavarde.value=null;
    yearBorn.value=null;
    vardas.focus();
    
}
