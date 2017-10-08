console.log('Restaurant budget calculator')

const Menu = (function () {
    var menuDOM = {
        name: document.querySelector('.menu-list input[type=text]'),
        price: document.querySelector('.menu-list input[type=number]'),
        add: document.querySelector('#add-item'),
        list: document.querySelector('.items-list'),
        // meniu ivalymo mygtuko pridejimas
        delList:document.querySelector('.del-all')
    }
    var list;

    function addItems() {
        var item = {
            name: menuDOM.name.value,
            price: parseFloat(menuDOM.price.value),
            category:1
        }
        list.push(item);
        var html = `<a href="#" data-id=1 class="list-group-item">${item.name}<span class="badge">$${item.price}</span>
        </a>`;
        menuDOM.list.insertAdjacentHTML('beforeend', html);
        menuDOM.name.value = '';
        menuDOM.price.value = '';
        var listJSON = JSON.stringify(list)
        localStorage.setItem('menu', listJSON)
        console.log(list)
    }
    menuDOM.delList.addEventListener('click', function(){
        var item = document.querySelectorAll('.items-list a')
        // pasalinti vaikinius elementus is tevinio
//        menuDOM.list.removeChild(item)
        for(x=1; x<item.length; x++){
            menuDOM.list.removeChild(item[x])
        }
        localStorage.setItem('menu', null)
        list=[]
        console.log(item)
    })

    function populateList() {
        var tempList = localStorage.getItem('menu');
        list = JSON.parse(tempList) || [];
        console.log(list)

        list.forEach(function (el) {
            var html = `<a href="#" data-id=1 class="list-group-item">${el.name}<span class="badge">$${el.price}</span>
        </a>`;
            menuDOM.list.insertAdjacentHTML('beforeend', html);
        })


    }

    menuDOM.add.addEventListener('click', addItems)

    return {
        populate: populateList()
    }

})()
