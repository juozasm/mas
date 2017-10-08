console.log('Restaurant budget calculator')

const App = (function () {
    var menuDOM = {
        list: document.querySelector('.items-list'),
        table: document.querySelectorAll('.modal-body'),
        allTables: document.querySelectorAll('.modal')
    }
    // Patiekalu sarasas
    var menuList = [
        {
            name: 'Kepsnys',
            price: 12
        },
        {
            name: 'Sriuba',
            price: 4
        },
        {
            name: 'Arbata',
            price: 1
        },
        {
            name: 'Kava',
            price: 2
        }
    ];
    // Uzsakymu sarasas
    //aktyvus stalas

    var orders = [[], [], []]
    var active = 0;
    menuDOM.allTables.forEach(function (el, i) {
        el.addEventListener('click', function () {
            menuDOM.allTables[active].style.boxShadow='none';
            console.log(i);
            active=i;
            el.style.boxShadow='0 0 10px black';
            el.style.borderRadius='20px';
        })
    })
    // Meniu elementu sugeneravimas
    function populateList() {
        menuList.forEach(function (el) {
            var html = `<a data-id=${_.uniqueId()} class="list-group-item">${el.name}<span class="badge">$${el.price}</span>
        </a>`;
            menuDOM.list.insertAdjacentHTML('beforeend', html);
        })
    }

    // Click event uzdejimas patiekalams meniu sarase
    function addMeniuClickEvents() {
        var listItems = document.querySelectorAll('.list-group-item')
        listItems.forEach(function (el, i) {
            if (i !== 0) {
                el.addEventListener('click', function () {
                    var itemNr = el.dataset.id
                    addOrder(menuList[itemNr - 1])
                })
            }
        })
    }

    // Patiekalo itraukimas i uzsakymu sarasa ir atvaizdavimas
    function addOrder(el) {
        var html = `<ul class="breadcrumb">
                            <li><a>${el.name}</a></li>
                            <li class="active">$${el.price}</li>
                            <li class="active f-right"><a class="btn btn-danger btn-xs">x</a></li>
                        </ul>`
        menuDOM.table[active].insertAdjacentHTML('beforeend', html)
        orders[active].push(el)
        console.log(orders)
        var delBtn=document.querySelectorAll('.btn-danger')
        //surenkam html visus elementus
        delBtn.forEach(function(el){
            //visiems event listneris
            el.addEventListener('click',function(e){
                el.parentNode.parentNode.parentNode.removeChild(el.parentNode.parentNode);
            })
        })
    }   

    // Grazinam objekta, kuris turi metoda init, o jis issaukia kitas fn.
    return {
        init: function () {
            populateList()
            addMeniuClickEvents()
        }

    }

})()
App.init()
