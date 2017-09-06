var arr = [[2, 6, 8, 900, 4, 5], [3, 4, 8, 600, 9, 1, 1, 2], [8, 8, 3, 7, 6, 5, 5], [111, 20, 4, 5], [99, 87, 2, 6, 10]];
var suma = 0;
total = 0;
max = 0;
var blokusuma = [];


for (i = 0; i < arr.length; i++) {
    for (j = 0; j < arr[i].length; j++) {
        suma += arr[i][j];


    }

    blokusuma.push(suma);
    total += suma;
    if (max < suma) {
        max = suma;


    }


    suma = 0;



}

console.log('total suma:', total, 'bloku suma', blokusuma, 'didziausias blokas kurio indeksas:', '[', blokusuma.indexOf(max), ']');
var iteration = blokusuma.length;
var sorted = [];
for (y = 0; y < iteration; y++) {
    var min = max;
    for (i = 0; i < blokusuma.length; i++) {
        if (blokusuma[i] < min) {
            min = blokusuma[i]; //didziausia veerte


        }
        var maxIndex = blokusuma.indexOf(min);
        //var maxindex=sk.indexOf(max);

    }
    blokusuma.splice(maxIndex, 1);
    sorted.push(min);
}
console.log('isrusiuotas masyvas atvirksciai ' + sorted);

//var arr = [[3, 4, 7, 9, 2], [9, 7, 3, 5, 2, 9], [9, 5, 4, 2, 7]];
//
//var blokas0 = 0;
//var blokas1 = 0;
//
//var blokuSuma = [0, 0, 0]
//
////blokas0=arr[0][0]+arr[0][1]+arr[0][2]; blogai
//
//
//for (n = 0; n < arr.length; n++) {
//    for (x = 0; x < arr[n].length; x++) {
//        blokuSuma[n] += arr[n][x];
//    }
//}
//
//console.log(blokuSuma);