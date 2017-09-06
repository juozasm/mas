
function showDiv(elem){
   if(elem.value == 'temp'){
      document.getElementById('temp').style.display = "block";document.getElementById('cur').style.display = "none";
}
if (elem.value == 'cur') {
    document.getElementById('cur').style.display = "block";
    document.getElementById('temp').style.display = "none";
}
}
var btn = document.querySelector('button');
btn.addEventListener('click', convert);



function convert() {

    if (document.getElementById("val1").selectedIndex == document.getElementById("val2").selectedIndex) {
        document.getElementById("two").value = document.getElementById("one").value
    } else if (document.getElementById("val1").selectedIndex < document.getElementById("val2").selectedIndex) {
        document.getElementById("two").value = 1.192 * document.getElementById("one").value;
    } else if (document.getElementById("val1").selectedIndex > document.getElementById("val2").selectedIndex) {
        document.getElementById("two").value = 0.838 * document.getElementById("one").value;
    }
    if(document.getElementById("val3").selectedIndex == document.getElementById("val4").selectedIndex ){
        document.getElementById("four").value=document.getElementById("three").value;
  }else if(document.getElementById("val3").selectedIndex < document.getElementById("val4").selectedIndex ){
        document.getElementById("four").value=(document.getElementById("three").value-32) * 5 / 9;
  }else if(document.getElementById("val3").selectedIndex > document.getElementById("val4").selectedIndex ){
        document.getElementById("four").value=document.getElementById("three").value* 9 / 5 + 32;}
}