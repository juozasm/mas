console.log('race');

//kintmauju deklaravimas

var racerName = document.querySelector('.name');
var racerSpeed = document.querySelector('.speed');
var addRacer = document.querySelector('.add');
var race = document.querySelector('.race');
var track = document.querySelector('.track');
var racers = [];
var racersList = document.querySelector('ul');

function Racer() {
    this.name = racerName.value;
    this.speed = racerSpeed.value;
    this.createHTML = function (){
        var html = '<li>'+this.name+'</li>';
        racersList.insertAdjacentHTML('afterbegin', html);
    }
    this.createCar =function(){
        var html = '<div class="car" style="transition: '+1/this.speed*100+'s">'+this.name+'</div>';
        track.insertAdjacentHTML('beforeend', html)
    }
}
racerName.focus();
addRacer.addEventListener('click', createRacer)
document.addEventListener('keydown', function (e) {
    if (e.keyCode == 13) {
        createRacer();
    }
})

function createRacer() {
    if (racerName.value != '' && racerSpeed.value != '') {
        racers.push(new Racer());
        racerName.value = null;
        racerSpeed.value = null;
        racerName.focus();
        racers[racers.length-1].createHTML();
        racers[racers.length-1].createCar();
        console.log(racers);
    }
}
//begin end ir t.t. sunkus naujas i html
race.addEventListener('click',function(){
    var car = document.querySelectorAll('.car');
    car.forEach(function(el){
        el.style.marginLeft = '100%';
        el.style.transform ='translateX(-100%)';
       
    })
})