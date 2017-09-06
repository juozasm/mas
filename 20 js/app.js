

var btn = document.querySelector('.navbar-toggle');
var fal = document.querySelector('i.fa-arrow-right');
var far = document.querySelector('i.fa-arrow-left');
var menu = document.querySelector('#menu');
btn.addEventListener('click', expand);

function expand(){

    menu.classList.toggle('collapse'); // add // remove gali buti oirgi
}
document.addEventListener('keydown', function(event){
    console.log(event.keyCode);
    if(event.keyCode == 27){
        menu.classList.add('collapse');
    }
})

var drink = document.querySelector('#drink');
var fotos =['img/sprite.jpg','img/bubba.jpg','img/cocacola.jpg']
var i = 0;
drink.src = fotos[i];
drink.addEventListener('click', function(){
    
    i++
   
    if(i==3 ){
        i=0;
     
    }
     drink.src = fotos[i];
})

far.addEventListener('click', function(){
        i++
   
    if(i==3 ){
        i=0;
     
    }
     drink.src = fotos[i];
})
fal.addEventListener('click', function(){
        i--
   
    if(i==-1){
        i=2;
     
    }
     drink.src = fotos[i];
})