//intervalai and Time out;

setTimeout(fn, 2000);
var foto = document.querySelector('.foto');
function fn(){
    console.log('2s buvo paleista');
}

var startCount=setInterval(getNr, 1000);
   var i=0;     
function getNr(){
    if(i==10){
        clearInterval(startCount);
    }
   // console.log(i++);
    
}
var i=0 ;
setInterval(function(){
    i++;
    if(i==4){
        i=1;
    }
    foto.style.backgroundImage=`url('${i}.jpg')`;
   // foto.style.backgroundImage="url('"+i+".jpg')";
    
},2000)
