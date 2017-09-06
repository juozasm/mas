
//PEREITI PER OBJEKTO VISUS parametrus
//for(i=0;i<zaidejai.length;i++){
//   for (var param in zaidejai[i]) {
//        console.log(param  + "=" + zaidejai[i][param]);
//} 
// ND
//  Sukurti konstruktoriu Zaidejas su parametrais
//  Zaidejo vardas, zaistu varzybu kiekis, pelnytu 
//  tasku kiekis, pramestu tasku kiekis
//  Metodai: atvaizduoti rezultatyvuma, vid tasku 
//  kiekis per varzybas.

// sukurti kelis zaidejus naudojant Zaidejas konstr.
// sudeti tuos zaidejus i masyva. 
// rasti taikliausia zaideja
// daugiausiai tasku pelnanti vidutiniskai zaideja
function Zaidejas (name,zaista,pelnyta,pramesta){
    
    this.name=name;
    this.zaista=zaista;
    this.pelnyta=pelnyta;
    this.pramesta=pramesta;
    
    this.accuracy = function(){
        return this.pelnyta/(this.pelnyta+this.pramesta)*100;
    }
    this.avgPoints =function(){
        return this.pelnyta/this.zaista;
    }
    
}
var p1 = new Zaidejas('Jonas',100,40,60);
var p2 = new Zaidejas('Antanas',300,10,90);
var p3 = new Zaidejas('Kazys',150,70,30);
var p4 = new Zaidejas('Maiklas',100,500,400);
var p5 = new Zaidejas('Minedas',10000,2,100);
var zaidejai = [p1,p2,p3,p4,p5];
var maxAcc=0;
var maxPoints=0;
var indexPlayerMaxPoints=0;
var indexPlayerMaxAcc=0;
var indexPlayerMinAcc=0;
var minAcc=9999;
zaidejai.forEach(function(obj, index){
    if(obj.accuracy()>maxAcc){
        maxAcc=obj.accuracy();
        indexPlayerMaxAcc=index;
    }
    if(obj.avgPoints()>maxPoints){
        maxPoints=obj.avgPoints();
        indexPlayerMaxPoints=index;
        
}
    if(obj.pelnyta<minAcc){
        minAcc=obj.pelnyta;
        indexPlayerMinAcc=index;
    }
    
    
})

console.log('Taiklausias zaidejas:',zaidejai[indexPlayerMaxAcc].name,' - ',zaidejai[indexPlayerMaxAcc].accuracy());
console.log('Daugiausiai vidutiniskai tasku pelne:',zaidejai[indexPlayerMaxPoints].name,' - ',zaidejai[indexPlayerMaxPoints].avgPoints());
console.log('Maziausiai vidutiniskai imete:',zaidejai[indexPlayerMinAcc].name,' - ',zaidejai[indexPlayerMinAcc].avgPoints());
            
            
            
            
            

