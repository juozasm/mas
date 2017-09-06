//console.log('objektai..');
//
//var studentas ={
//    
//    name: 'Algirdas',
//    surname: 'van gog',
//    dateOfBirth:1999,
//    mathPoints:[7,9,9,6,10],
//    familyMembers:{
//        mother:'Justina',
//        father:'Tomas'
//    },
//    
//    getName: function(){
//        console.log(this.name);    
//    },
//    getFamilyMembers: function(){
//        console.log('Tevai: ',this.familyMembers.mother,this.familyMembers.father);
//    },
//    getPoints: function(){
//
//    for(x=0;x<this.mathPoints.length;x++){
//        console.log(this.mathPoints[x]);
//    }
//    
//    },
//    getAge: function(currentYear){
//        return currentYear-this.dateOfBirth
//    }
//    
//    
//}
//var currentTime = new Date();
//console.log(studentas.getAge(currentTime.getFullYear()));


//studentas.getName();
//studentas.getFamilyMembers();
//studentas.getPoints();
//foreach objektui prafiltuoti
//var mathPLen=studentas.mathPoints.length;
//console.log(studentas.mathPoints[mathPLen-1]);
//var suma=0;
//for(i=0;i<mathPLen;i++){
//    suma+=studentas.mathPoints[i];
//    
//    
//}
//console.log(suma/mathPLen);
//console.log(studentas.familyMembers.mother);


/*Kasos aparatas */

var prekes = [{

    name: 'Varske',
    price: 1.65,
    date: 2015


}, {
    name: 'Pienas',
    price: 1.45,
    date: 2007
}, {
    name: 'Suris',
    price: 1.89,
    date: 2009
}];
for (i = 0; i < prekes.length; i++)
    console.log(prekes[i].name);



// FOREACH
prekes.forEach(function(element){
    console.log(el.element);
})