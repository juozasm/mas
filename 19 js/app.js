// BOM browser object module langai pats browseris
// console
//window
// DOM document object manipulation htm dokumentas

// 1 elemento pasiekimas pagal jo id
var box = document.getElementById('deze');
box.style.backgroundColor = 'black';

//2 elemento pasiekima pagal

var list= document.querySelector('.box h2');
list.textContent = 'Naujas sarasas';
//3 elemento pasiekimas
var text=document.querySelectorAll('p');

for(i=0;i<text.length;i++){
    text[i].style.fontSize = (20*(i+1)+'px');
    text[i].style.color = 'red';
}
//event handlers 

box.addEventListener('click', changeBC);

function changeBC(){
    
    console.log('it works or not?')
    if(list.textContent=='Naujas sarasas'){
        list.textContent='';
    }else{
        list.textContent='Naujas sarasas';
    }
}

