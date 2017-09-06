console.log('dice game');
var sound = new Audio('pop.mp3');
var dice = document.querySelector('.game img');
var round = document.querySelector('.round');
var addPoints = document.querySelector('.game p');
var player1 = document.querySelector('.player1 h1');
var player2 = document.querySelector('.player2 h1');
var roundscore = 0;
var pScore = [0, 0];
var curPlayer = 0;
var active = [document.querySelector('.player1 h3'), document.querySelector('.player2 h3')];

active[curPlayer].style.color = 'red';
// roll dice 
dice.addEventListener('click', rollDice);

function rollDice() {
    sound.play();
    var rand = Math.floor(Math.random() * 6) + 1;
    console.log(rand);
    dice.src = 'img/' + rand + '.png';
    if (rand == 1) {
        roundscore = 0;
        active[curPlayer].style.color = 'white';
        active[curPlayer+1].style.color = 'white';
        curPlayer++;
        
        if(curPlayer>1){
        curPlayer=0;
        active[curPlayer].style.color = 'red';
        active[curPlayer+1].style.color = 'white';
            
}
        
    } else {
        roundscore += rand;

    }


    round.textContent = roundscore;


}

// Pasiimti taskus event listener
addPoints.addEventListener('click', takePoints);

function takePoints() {
    if (curPlayer > 1) {
        curPlayer = 0;


        

    }
    if (curPlayer == 0) {
        pScore[curPlayer] += roundscore;
        player1.textContent = pScore[curPlayer];
        active[curPlayer].style.color = 'red';
        active[curPlayer+1].style.color = 'white';
        if (pScore[curPlayer] >= 100) {
            alert('pergale laimejo pirmas playeris');
            player1.textContent = '0';
            player2.textContent = '0';

        }
        curPlayer++;

    } else if (curPlayer == 1) {
        active[curPlayer].style.color = 'red';
        active[curPlayer-1].style.color = 'white';
        pScore[curPlayer] += roundscore;
        player2.textContent = pScore[curPlayer];

        if (pScore[curPlayer] >= 100) {
            alert('pergale laimejo antras playeris');
            player1.textContent = '0';
            player2.textContent = '0';
        }
    

    curPlayer--;
    }

    roundscore = 0;
    round.textContent = roundscore;

}
