console.log('Race..')

// kintamuju deklaravimas
var racerName = document.querySelector('.name')
var racerSpeed = document.querySelector('.speed')
var addRacer = document.querySelector('.add')
var race = document.querySelector('.race')
var racers = [];
var racersList = document.querySelector('ul');
var track = document.querySelector('.track'); // Trasa!
var winnerBox = document.querySelector('.winner');
var winnerName = document.querySelector('.winner h3');

racerName.focus();
// Konstruktoriaus aprasymas

function Racer() {
    this.name = racerName.value;
    // parseInt() pavercia stringa i skaiciu
    this.speed = parseInt(racerSpeed.value);
    this.createList = function () {
        var html = `<li>${this.name}</li>`; //crea html
        racersList.insertAdjacentHTML('afterbegin', html); //ins html
    }
    this.createCar = function () {
        var randCar = Math.floor(Math.random() * 2);

        var html = `<img src="car${randCar}.png" class="car" style="transition:${1/this.speed*100}s">`;

        track.insertAdjacentHTML('beforeend', html);
    }
}


addRacer.addEventListener('click', createRacer)
document.addEventListener('keydown', function (e) {
    if (e.keyCode == 13) {
        createRacer();
    }
})

function createRacer() {
    if (racerName.value != '' && racerSpeed.value != '') {
        racers.push(new Racer());
        racerName.value = '';
        racerSpeed.value = null;
        racerName.focus();
        racers[racers.length - 1].createList();
        racers[racers.length - 1].createCar();
        console.log(racers);
    }
}

race.addEventListener('click', function () {
    var car = document.querySelectorAll('.car');
    car.forEach(function (el) {
        el.style.marginLeft = '80%';
    })
    var maxSpeed = 0;
    var bestDriver = 0
    racers.forEach(function (racer, i) {
        if (racer.speed > maxSpeed) {
            maxSpeed = racer.speed;
            bestDriver = i;
        }
    })
    console.error(maxSpeed);
    console.error(racers[bestDriver].name);
    
    setTimeout(function () {
        winnerBox.style.display = 'block';
        winnerName.textContent = racers[bestDriver].name
    }, 2000)
})
