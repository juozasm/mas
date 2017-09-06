// ND paskaiciuoti kiek truksta pinigu jei moketina suma per maza
// ND Futbolas. Zaidejas: vardas, imustu tasku suma per visa sezona, nepataikytu smugiu kiekis, kiek rungtyniu zaide per sezona, surinktu korteliu skaicius

// 1#
// F1 zaidejo taiklumas
// F2 imustu ivarciu kiekis per rungtynes
// F3 sugalvoti formule kuri ivertina zaidejo agresija pagal koreteliu sk.

// 2# bendra playerStats f. kuri issauks visas tris funkcijas
// o tos f. pabaigoje atvaizduos zaidejo statistikas 

// 3# Hard ///\\\

// Palyginti dvieju zaideju statistika issivedant is funkcijos masyva
// kuriame bus saugoma visa zaidejo informacija

function shop(item, price, vnt, cash) {

    var totalPrice = price * vnt;
    var totalPricePVM = totalPrice * 1.21;
    var change;
    if (cash < totalPricePVM) {
        change = Math.round((cash - totalPricePVM) * -100) / 100;
        console.warn('neuztenka euru seni tiek euru', change, ' kainuoja ', totalPricePVM, ' o tu davei', cash);
    } else {
        change = cash - totalPricePVM;
        console.log('Viso pirkta ', vnt, ' ', item, ' ');
        console.log('Bendra suma:', totalPricePVM, ' Graza: ', change);

    }


}
shop('sprotai', 2, 5, 10);


function futbolas(vardas, golSezon, golMiss, rungtSk, korteles) {

    var acc=taiklumas(golSezon, golMiss);

    var vid=vidutinisivartis(golSezon, rungtSk);

    var agres=agresija(rungtSk, korteles);
    
    var bendras=[vardas,acc,vid,agres];
    
    return bendras;

}

function taiklumas(golSezon, golMiss) {
    
    var acc=golSezon/(golMiss+golSezon)*100;

    
    return acc;

}

function vidutinisivartis(golSezon, rungtSk) {
    var avg=golSezon/rungtSk;
    console.log('vidutiniskai ivarciu per maca',avg);
    return avg;
}

function agresija(rungtSk, korteles) {
    var agres=korteles/rungtSk*100;

    return agres;
}

var fule=[futbolas('Jonas',20,49,8,4),futbolas('Arnoldas',4,5,12,7)]
console.log(fule);
var warn=['taiklumas didesnis nei ',' vid golu skaicius didesnis nei ',' agresija didesne nei']
    for(j=0;j<fule[0].length-1;j++){
         if(fule[0][j+1]>fule[1][j+1]){
             console.warn(fule[0][0],fule[0][j+1],warn[j],fule[1][0],fule[1][j+1]);
         }else console.warn(fule[1][0],fule[1][j+1],warn[j],fule[0][0],fule[0][j+1]);
    }


       


