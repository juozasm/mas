console.log('guess a number')
//atsiktinis sk iki 100 
var rand;
function random(){
rand = Math.floor(Math.random() * 100);
input.value = '';
input.focus();

}

var kartuspeta =0;
//html elem priskyrimas
var box = document.querySelector('.wrapper');
var winNr = document.querySelector('h2');
var input = document.querySelector('input');
var btn = document.querySelector('button');

var answer = document.querySelector('.answer');
var speta = document.querySelector('.speta');
answer.textContent = ('Spekite skaiciu nuo 0 iki 100');
// mygtukas event listeneris
btn.addEventListener('click', guessNr); // callbackas vleiau po evento o jei su (), iskart vykdys
box.addEventListener('click', boxback);
//foucs
input.focus();
random();

function boxback(){
    r=Math.floor(Math.random() * ((255 - 0 + 1)) + 0);
    g=Math.floor(Math.random() * ((255 - 0 + 1)) + 0);
    b=Math.floor(Math.random() * ((255 - 0 + 1)) + 0);
    box.style.backgroundColor = 'rgb('+r+','+g+','+b+')';
}

function guessNr() {
    btn.textContent='Speti'
    kartuspeta++;
    
    console.log(input.value);
    if(kartuspeta == -1){
        
        answer.textContent = ('Spekite nauja skaiciu nuo 0 iki 100');
        winNr.textContent = ('X');
        
    }else if (input.value > rand) {
        answer.textContent = ('iveskite mazesni sk');
        answer.style.color = 'blue';
        speta.textContent = ('Spejote: '+kartuspeta+' karta');
    } else if (input.value < rand) {
        answer.textContent = ('iveskite didesni sk');
        answer.style.color = 'red';
        speta.textContent = ('Spejote: '+kartuspeta+' karta');
    } else if (input.value == rand) {
        answer.textContent = ('atspejote laimejote');
        answer.style.fontSize = '25px';
        answer.style.color = '#f9c06b';
        winNr.textContent = rand;
        speta.textContent = ('Atspejote is '+kartuspeta+' karto'+', kad pradeti nauja zaidima spauskite Naujas');
        kartuspeta=-2;
        
        btn.textContent='Naujas'
        random();
        
        
    }
    
    input.value = '';
    input.focus();


}

// kintamuju terpe

//var x = 0;
//
//function changeIT() {
//    x = 1;
//    var y = 1; //lokalus kintamasis
//
//}
//
//console.log(x);
//console.log(y);
// ND 



















// #1 Atspejus skaiciu atvaizduoti ji kaip <h2> texta
// #2 Paspadus ant dezutes, pakeisti fono spalva
// #3 Jeigu sk. mazes, text(ivesk did sk) splva bus raudona, o jei didesne bus melyna
// #4 Suskaiciuoti kiek kartu buvo meginta speti
// #5 Atspejus skaiciu paleisti nauja zaidima
