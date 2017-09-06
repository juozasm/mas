console.log('hello');

var fabars=document.querySelector(".landing-page .container nav");

var nav=document.querySelector(".landing-page .container nav ul");

fabars.addEventListener("click",paspausta);



function paspausta(){
    
    if(nav.style.left=='-100%'){
        nav.style.left='0%';
        
        
    }else if(nav.style.left=='0%'){
        nav.style.left='-100%';
    
    }
    

}
document.addEventListener('mouseup', function(event){
	
	if (event.target != nav && event.target.parentNode != nav){
        nav.style.left='-100%';
    }
});

document.addEventListener('keydown', function(event){
  
    if(event.keyCode == 27){
        nav.style.left='-100%';
    }
})