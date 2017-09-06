var a, b, c, ckvad, perimeter, plotas, rand;

console.log('kintamieji', a, b, ckvad, c, perimeter, plotas, rand);

// trikampio krastines

a = 7;
b = 8;

ckvad = Math.pow(a, 2) + Math.pow(b, 2);
c = Math.round(Math.sqrt(ckvad)*10)/10;

plotas = 1 / 2 * a * b;
perimeter = a + b + c;

var apjungtas = 'izambine ' + c + ' plotas ' + plotas + ' perimetras ' + perimeter;
console.log(apjungtas);
// antro trikampio apskaiciavimas
var ax, bx, cx, cxkv, plotasdu, perimeterdu;

ax = Math.round(Math.random() * 10 + 1);
bx = Math.round(Math.random() * 10 + 1);

cxkv = Math.pow(ax, 2) + Math.pow(bx, 2);
cx = Math.round(Math.sqrt(cxkv));

plotasdu = 1 / 2 * ax * bx;
perimeterdu = ax + bx + cx;

var apjungtasDu = 'Krastines random trikampio: - c ' + cx + ' b ' + bx + ' a ' + ax + ' plotas antro tririkampio yra - ' + plotasdu + ' perimetras antro trikampio yra - ' + perimeterdu;
console.log(apjungtasDu);

if (plotas > plotasdu) {
    alert('pirmas trikampis didesnis');
} else if (plotas == plotasdu) {

    alert('trikampiai lygus');
} else {
    alert('antras trikampis didesnis');}    
