// Komentaras vienos eilutes
/*

komentaru blokas

*/
// duomenu perdavimas i console 
console.log('app is up runing...');

//kintamieji
var x=10;
var y=2;
var sum = x+y;
console.log(x, y);
console.log(sum);
var minus; var daug; var dal; var saknis;
minus = x-y;
daug= x*y;
dal=x/2;

console.log('minus x-y',minus,'daugyba x*y',daug,'dalyba x/y',dal,'saknis is 9',Math.sqrt(9));
//kintmieji tipai

/*
numbers, string, boolean, null, undefined.
*/

var word='hey';

console.log(word);

var tiesa= true;
var netiesa=false;
console.log(tiesa, netiesa);
 //null

var nieko = null;

console.log(nieko);

//undefined
var nerastas;
console.log(nerastas);

// mutacija


var myName='Juozas'; // camelcase
var myAge=27;
var information = 'mano vardas yra '+myName+' man yra '+myAge;

console.log(information);

//task: sukurti kintamaji kuris apskaiciuos jusu  gimimo data ir sia data atvaizduos konsolej;

var dabaryra=2017;
var gimimometai=dabaryra-myAge;
console.log('gimimo metai:',gimimometai);
/* Math */
//sakneis traukimas
var sk=20;
var sq = Math.sqrt(sk);
console.log(sq);
console.log(Math.sqrt(9));
// apvalinimas

console.log(Math.round(sq)); // 2 skaiciai po kablelio namu darbams
//atsitiktinis skaicius
var rand= Math.floor(Math.random()*10+1);
console.log(rand);
// Sakygos
var patikrinimas = 5;
var pasSkaicius = 10;
if(patikrinimas<pasSkaicius){
    console.log(patikrinimas, 'maziau uz', pasSkaicius);    
} else{
    console.log(patikrinimas, 'daugiau uz', pasSkaicius);
}


if(true){
   // alert('tiesa');
}

/* salygos

    < maziau
    >  daugiau
    >=
    <=
    != nelygu
    == lygu (palyginimas);
    === lygu palyginimas 
    

*/
var myNumber=5;
//
//if(myNumber==='5'){
//    alert('tiesa ===');
//    
//}else {
//    alert('netiesa ===')
//}

if(rand==5){
    
    alert('atspejau')
    
}else{console.log('neatspejom')}
