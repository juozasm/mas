console.log('alo')

//salygos if(){}

var a = 6;
if (a > 10) {
    console.log(a + ' daugiau uz 10')
} else if (a == 10) {
    console.log(a + ' lygu 10')
} else {
    console.log(a + ' maziau uz 10')
}

var b = 30;


if (b > 5 || b < 20) {
    console.log(true);
} else {
    console.log(false);
}

if ((true && false) || (true && false)) {

    console.log('true');
}
console.log('false');

//Masyvai array

var price = [2, 5, 1, 9];
var prekes = ['bananai', 'apelsinai', 'mangai', 'ananasai'];

//console.log(prekes[3]);

var suma = price[0] + price[1] + price[2] + price[3];
console.log('prekiu suma yra lygi:', suma);

console.log('masyvo ilgis:', prekes.length);

//push metodas (nariu idejimas)
prekes.push('Kempines');
//pop metodas(paskuitnio nario istirnimas)

price.pop();

//splice metodas pasirinkto nario istrinimas ,trecias opptional pakeicia.
prekes.splice(2, 1, 'pakeistas');


// indexOf kelintas narys nuo nulio skaiciuojant

// cancat() sujungti masyvus


var bendras = price.concat(prekes);
console.log('bendras ' + bendras);

//ciklas

// while vykdomas salyga kol  do while pries pasileidziant
var x = 0;
//while(x<10){
//   console.log('geras studentas');
////    //x+=1; //x=x+2 tas pats
////    x++;
////    console.log(x)
//    
//}

// for ciklas 

for (var i = 0; i < 10; i++) {
    //kodo vykdymas
    //console.log(i);
    var rand = Math.round(Math.random() * 100);
    if (rand > 70) {
        //console.log(rand, 'daugiau uz 70');
    } else {
        //console.warn(rand, 'maziau uz 70');
    }

}

var skaiciai = [5, 7, 10, 13, 22, 1, 5, 7];
for (i = 0; i < skaiciai.length; i++) {
    //console.log(skaiciai[i]);
    // surasti skaicius kurie dalijasi is dvieju be liekanos
    if (skaiciai[i]%2!=0) {
        
        console.log(skaiciai[i]);
        
        
        

    }


}
