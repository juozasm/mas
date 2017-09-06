var h1=document.querySelector('h1');
var titles = ['ajajaaja','bbbbbbbbbbb','cccccc'];
//
//var i=0;
//setInterval(function(){
//   if(i>2){
//       i=0;
//   }
//   h1.textContent=titles[i];
//    
//   i++;
//
//
//},2000)


var name = 'abcdef'


var j=0;
inter=setInterval(function(){
   if(j==name.length){
       clearInterval(inter);
       return;
  }
  
   h1.textContent+=name[j];
   j++;


},100)

