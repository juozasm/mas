// salygos
if (5 < 10) {
    console.log(' 5 maziau 10');
}

var skaic = 12;

if ((skaic > 10) && (skaic < 20)) {
    console.log(skaic, 'maziau 20 ir daugiau 10');
} else {
    console.log(skaic, ' NERA maziau 20 ir daugiau 10');
}

var isdalink = [10, 9, 15];
var dalmenys = [3, 2, 5];

for (i = 0; i < isdalink.length; i++) {
    for (j = 0; j < dalmenys.length; j++) {
        if (isdalink[i] % dalmenys[j] == 0) {
            console.log(isdalink[i], 'dalijasi is', dalmenys[j]);
        }
    }
}

if (5 == '5') {
    console.log("jeigu == tai lygu 5 ir '5'");
}
if (5 === '5') {
    console.log('negali buti');
} else {
    console.warn("'jeigu ===' tai nelygu 5  ir '5'");
}

// masyvai

var nrArr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];

console.log('paskutinis nr ARR', nrArr[nrArr.length - 1], 'pirmas', nrArr[nrArr.length - nrArr.length]);

nrArr.push(11);
nrArr.splice(2, 1);
console.log('nebera 3 nario', nrArr, 'irpridetas su push 11');
var nrAntras = ['a', 'b', 'c', 'd'];
var apjungtasmas = nrArr.concat(nrAntras);
console.log('apjungti mas', apjungtasmas);
if (apjungtasmas[0] > apjungtasmas[1]) {
    console.log('pirmas narys ', apjungtasmas[0], 'didesnis uz ', apjungtasmas[1]);
} else console.log('pirmas narys ', apjungtasmas[0], 'mazesnis uz ', apjungtasmas[1]);


for(i=0;i<4;i++){
    console.log('keturis kartus sukam rata');
}

for(i=1;i<11;i++){
   
    var rand=Math.round(Math.random()*100);
   
    if((rand>=10)&&(rand<=50))
    
    {console.log('atsiktinis skaicius intervale 10-50',rand);}
}

for(i=1;i<11;i++){
    console.log('visi is eiles i', i);
    if(i%2==0){
        console.log('kas antra i reiksme i', i);
    }
}
// ar is 5 ar is 3 ar is to ir to ir visi kintamieji siaip
for (i=0;i<100;i++){
    
    if(i%3==0){
        if(i%5==0){
            console.log(i,'XY');
        }else console.log(i,'X');
    }else if(i%5==0){
        console.log(i,'Y');
    }else  console.log(i);
}

var skaiciai=[1,2,3,4,5,6,7,8,9,10];
console.warn('visi skaiciai masyvo :');
for(i=0;i<skaiciai.length;i++){
    console.log(skaiciai[i]);
}
console.warn('visi kas antri skaiciai masyvo :');
for(i=0;i<skaiciai.length;i+=2){
       console.log(skaiciai[i]);
    
}
var randMas=[]; var suma=0;
for(i=0;i<10;i++){
    randMas[i]=Math.round(Math.random()*10);
    
   suma+=randMas[i]; 
}
console.log(randMas,'suma',suma);

