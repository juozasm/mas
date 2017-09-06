// document - tai visas jusu dokumentas
document.addEventListener('scroll', slinkti);
var logo = document.querySelector('.logo');
var fotos = document.querySelectorAll('.animate-height');


// funkcija perduoda eventa kaip argumenta
// target -----

function slinkti() {
    if (window.scrollY > 1000) {
        logo.style.backgroundColor = 'red';
    } else {
        logo.style.backgroundColor = '';
    }


    for (x = 0; x < fotos.length; x++) {
        if (window.scrollY > fotos[x].offsetTop - window.innerHeight / 1.1) {
            fotos[x].style.transform = "scaleY(1)";
        }
    }
}

//  ND:
//  #1 Padaryti event listeneri su scroll. Scroll metu per konsole
//     atvaizduojama dabartine puslapio window koordinate
//  #2 Sukurkite dideli kvadrata su reklama, jo pozicija turetu buti 
//     position:fixed; left: ; top: ; (nematomas)
//  #3 Atscolinus iki jusu pasirinktos vietos jis jis pataps matomas
//  #4 Esc arba paspaudus ant X migtuko jis bus isjungiamas ir daugiau
//     niekad neberodomas






