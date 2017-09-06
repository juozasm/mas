console.log('test');
// paskutinis anrys
var arr=[12,45,28,7,91,23,24,9];
console.log(arr[arr.length-1]);

//masyvo nariu suma
var suma=0;
for(x=0;x<arr.length;x++){
    suma += arr[x];
}

console.log(suma);

//masyvo didziausias elementas

var max=0;

for(x=0;x<arr.length;x++){
    if(max<arr[x]){
        max=arr[x];
    }
}
console.warn(max);
// vidurkis
console.warn(suma/arr.length);
// dvigubas masybas
var bigArr=[[3,4,7],[2,1,0],[11,3,7]];

console.log(bigArr[1][0],bigArr[1][1]);

for(x=1;x<=10;x++){
    document.write('<h4>');    
    console.warn(x);
    for(y=1;y<=10;y++){
       console.log(y);
        document.write('<span> '+(x*y)+' </span>');  
    }
    document.write('</h4>'); 
}

var bigsum=0;
// dvigubas masyvas suma
for(x=0;x<bigArr.length;x++){
    for(y=0; y<bigArr[x].length; y++){
        bigsum+=bigArr[x][y];
    }
}
console.warn(bigsum);
//skaiciu isrusiavimas

var sk = [4,8,2,5,23,18,15,7,16];
var sorted=[]; //tuscias masyvas
 // didziausia verte
var iteration=sk.length;
for(y=0;y<iteration;y++){
var max =0;
        for (i=0;i<sk.length;i++){
        if(sk[i]>max){
            max=sk[i]; //didziausia veerte
         
            
        }
        var maxIndex=sk.indexOf(max);
        //var maxindex=sk.indexOf(max);
        
    }
sk.splice(maxIndex,1);
sorted.push(max);
}
console.log('isrusiuotas masyvas '+sorted);

console.log(max);