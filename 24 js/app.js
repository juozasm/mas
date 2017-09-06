console.log('kontruktoraii');

//sukuriam brezini trikampiui
// brezinys function contrutor
function Triangle(a, b, spalva) {
    this.krastineA = a;
    this.krastineB = b;
    this.color = spalva;
    this.getArea = function () {
        return this.krastineA * this.krastineB / 2
    }
    this.getIzambine = function () {
        return Math.sqrt(this.krastineA * this.krastineA + this.krastineB * this.krastineB);
    }
    this.getPerimetras = function () {
        return this.getIzambine() + this.krastineA + this.krastineB;
    }
    this.getInfo = function () {
        console.log('info', 'plotas', this.getArea(), 'izambine', this.getIzambine(), 'perimetras', this.getPerimetras());
    }
    this.compare = function (other) {
        if (this.krastineA > other.krastineA) {
            console.log(this.color, ' trikampio a krastine > ', other.color, ' a krastine ');
        } else {
            console.log(this.color, ' trikampio a krastine < ', other.color, ' a krastine ');
        }
        if (this.krastineB > other.krastineB) {
            console.log(this.color, ' trikampio b krastine > ', other.color, ' b krastine ');
        } else {
            console.log(this.color, ' trikampio b krastine < ', other.color, ' b krastine ');
        }
        if (this.getArea > other.getArea) {
            console.log(this.color, ' trikampio plotas > ', other.color, ' plotas ');
        } else {
            console.log(this.color, ' trikampio plotas < ', other.color, ' plotas  ');
        }
        if (this.getPerimetras > other.getPerimetras) {
            console.log(this.color, ' trikampio perimetras  > ', other.color, ' perimetras  ');
        } else {
            console.log(this.color, ' trikampio perimetras  < ', other.color, ' perimetras  ');
        }
    }


}
// objekto sukurimas pagal brezini
var tr1 = new Triangle(5, 9, 'raudonas');

var tr2 = new Triangle(4, 11, 'melynas');
//tr1.getInfo() ;
//tr2.getInfo() ;
//
tr1.compare(tr2);

function Preke(pavadinimas, kaina, galiojimas) {
    this.pavadinimas = pavadinimas;
    this.kaina = kaina;
    this.galiojimas = galiojimas;
    this.timeInSupply = function (currentYear) {
        return currentYear - this.date;
    }
}


var prekes = [];
prekes[0] = new Preke('Pienas', 6.5, 2015);
prekes[1] = new Preke('Apelsinai', 2.2, 2013);
prekes[2] = new Preke('Bananai', 1.5, 2016);
prekes[3] = new Preke('Ananasai', 10.5, 2000);
prekes[4] = new Preke('Suris', 1.5, 1999);
max = 0;
index = 0;
prekes.forEach(function (el, i) {
    if (el.kaina > max) {
        max = el.kaina;
        index = i;
    }
})
console.log('Max kaina', prekes[index].pavadinimas, prekes[index].kaina)






