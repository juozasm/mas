//  ND
//  # Is kasos aparato surasti visu prekiu bendra suma
//  # Surasti kokio amziaus yra preke
//  # Sukurti trikampio objekta
//      Properties:krastine a, krastine b, spala
//      Metodai: gauti izambine, plota, perimetra, spalva
//  HARD: sukurti kelis trikampius(objektus), sudeti juos
//  i masyva ir palyginti properties, HARDCORE: palyginti 
//  ju izambines, plotus ir perimetrus.


var kasosAparatas = [{
    name: 'alus',
    kaina: 1.5,
    pagaminimoMetai: 2006
}, {
    name: 'pienas',
    kaina: 0.99,
    pagaminimoMetai: 2010
}, {
    name: 'suris',
    kaina: 6.5,
    pagaminimoMetai: 2001
}, {
    name: 'mesa',
    kaina: 3.5,
    pagaminimoMetai: 2017
    }]
var currentDate = new Date();
var suma = 0;
kasosAparatas.forEach(function (element) {
    console.log(element.name, currentDate.getFullYear() - element.pagaminimoMetai);
    suma += element.kaina;
})
console.warn('Bendra suma:', suma);

var trikampis = {
    name: 'statusTrikampis',
    krastineA: 3,
    krastineB: 4,
    izambine: function () {
        var c = Math.sqrt(this.krastineA * this.krastineA + this.krastineB * this.krastineB);
        
        return c;
        
    },
    plotas: function(){
        var s=(this.krastineA*this.krastineB)/2;
        return s;
    },
    perimetras: function(){
        var p=this.krastineA+this.krastineB+this.krastineC;
        return p;
        
    }

}
trikampis.krastineC = trikampis.izambine();
console.log('perimetras',trikampis.perimetras(),'plotas',trikampis.plotas(),'izambine',trikampis.izambine());

var trikampisMas = [{
    name: 'Pirmas Trikampis',
    krastineA: 5,
    krastineB: 6,
    izambine: function () {
        var c = Math.sqrt(this.krastineA * this.krastineA + this.krastineB * this.krastineB);
        
        return c;
        
    },
    plotas: function(){
        var s=(this.krastineA*this.krastineB)/2;
        return s;
    },
    perimetras: function(){
        var p=this.krastineA+this.krastineB+this.izambine();
        return p;
        
    }

},{
  name: 'Antras Trikampis',
    krastineA: 7,
    krastineB: 4,
    izambine: function () {
        var c = Math.sqrt(this.krastineA * this.krastineA + this.krastineB * this.krastineB);
        
        return c;
        
    },
    plotas: function(){
        var s=(this.krastineA*this.krastineB)/2;
        return s;
    },
    perimetras: function(){
        var p=this.krastineA+this.krastineB+this.izambine();
        return p;  
}
},{
    name: 'Trecias Trikampis',
    krastineA: 10,
    krastineB: 2,
    izambine: function () {
        var c = Math.sqrt(this.krastineA * this.krastineA + this.krastineB * this.krastineB);
        
        return c;
        
    },
    plotas: function(){
        var s=(this.krastineA*this.krastineB)/2;
        return s;
    },
    perimetras: function(){
        var p=this.krastineA+this.krastineB+this.izambine();
        return p;
}}]

var     MaxA=0;
var indexA=0;
var     MaxB=0;
var indexB=0;
var     MaxC=0;
var indexC=0;
var     MaxPLotas=0;
var indexPlotas=0;
var     MaxPerimetras=0;
var indexPerimetras=0;
for(i=0;i<trikampisMas.length;i++){
    
    console.log(trikampisMas[i].name,' \n Krastine A',trikampisMas[i].krastineA,' Krastine B ',trikampisMas[i].krastineB,' izambine C',trikampisMas[i].izambine(),' plotas ',trikampisMas[i].plotas(),' perimetras ',trikampisMas[i].perimetras())
    
        if(trikampisMas[i].krastineA>MaxA){
            MaxA=trikampisMas[i].krastineA;
            indexA=i;
            
        }
        if(trikampisMas[i].krastineB>MaxB){
            MaxB=trikampisMas[i].krastineB;
            indexB=i;
            
        }
        if(trikampisMas[i].izambine()>MaxC){
            MaxC=trikampisMas[i].izambine();
            indexC=i;
            
        }
        if(trikampisMas[i].perimetras()>MaxPerimetras){
            MaxPerimetras=trikampisMas[i].perimetras();
            indexPerimetras=i;
        }
        if(trikampisMas[i].plotas()>MaxPLotas){
            MaxPLotas=trikampisMas[i].plotas()
            indexPlotas=i;
            
            
        }
    
}

console.log('Didziausias plotas: \n',trikampisMas[indexPlotas].name,trikampisMas[indexPlotas].plotas());
console.log('Didziausias perimetras:\n',trikampisMas[indexPerimetras].name,trikampisMas[indexPerimetras].perimetras());
console.log('Didziausia izambine :\n',trikampisMas[indexC].name,trikampisMas[indexC].izambine());
console.log('Didziausia B krastine:\n',trikampisMas[indexB].name,trikampisMas[indexB].krastineB);
console.log('Didziausia A krastine:\n',trikampisMas[indexA].name,trikampisMas[indexA].krastineA);
// pagilinti prototipus













