// funkcijos

function info(x){
    console.log(x);
}

info('abc'); //funckijos isaukimas
info('funkcijos'); //funckijos isaukimas


function area(a,b){
    var sum =a *b;
    console.log(sum);
}

area(5,10);

function perimetras(a,b){
    p=2*(a+b);
    console.log(p);
    
}
perimetras(4,2);

function shop(item, price, vnt, cash){

    var totalPrice = price * vnt;
    var totalPricePVM=totalPrice*1.21;
    var change;
    if (cash<totalPricePVM){
        console.warn('neuztenka euru seni')
    }else {
        change=cash-totalPricePVM;
        console.log('Viso pirkta ',vnt,' ',item,' ');
        console.log('Bendra suma:',totalPricePVM,' Graza: ',change);
        
    }
    

}
shop('sprotai', 2, 4 , 10);


function getAllInfo(m, n){
    getArea(m, n);
    getPerimeter(m, n);
    getIstrizaine(m, n);
    
}

function getArea(a, b){
    
    console.log('plotas',a*b);
    return a*b;
    
}

function getPerimeter(a, b){
    console.log('perimetras ',2*a+2*b);
    return 2*a+2*b;
    
    
}

function getIstrizaine(a, b){
    console.log('istrizaine ',Math.sqrt(a*a+b*b));
    return Math.sqrt(a*a+b*b);
}

getAllInfo(4, 8);
getAllInfo(8, 12);


