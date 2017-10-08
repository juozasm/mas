console.log('Restaurant budget calculator')

const MenuController = (function () {
    var menuDOM = {
        name: document.querySelector('.menu-list input[type=text]'),
        price: document.querySelector('.menu-list input[type=number]'),
        add: document.getElementById('add-item'),
        list: document.querySelector('.items-list'),
        //menu isvalymas
        delList:document.querySelector('.del-all').
        table:document.querySelectorAll('.modal-body');
        
        
    }
    var list;

    function addItems() {
        var item = {
            name: menuDOM.name.value,
            price: parseFloat(menuDOM.price.value)

        }
        list.push(item);
        var html = `<a href="#" data-id=${_.uniqueId()} class="list-group-item">${item.name}<span class="badge">${item.price}$</span>
        </a>`;
        
        if (menuDOM.name.value != '' && menuDOM.price.value != '') {
            menuDOM.list.insertAdjacentHTML('beforeend', html);
            menuDOM.name.value = '';
            menuDOM.price.value = '';
            var listJSON = JSON.stringify(list);
            localStorage.setItem('menu',listJSON); // 5mb saugoma net kai cache isvalyta
            console.log(list);
        }
        var listItems= document.querySelectorAll('.list-group-item');
        listItems.forEach(function(el){
            el.addEventListener('click',function(){
                var itemNR=(el.dataset.id);
                console.log(list[itemNR-1])
                MainController.addOrder(list[itemNR-1]);
            })
        })
        
    }
    menuDOM.delList.addEventListener('click',function(){
            var item=document.querySelectorAll('.items-list a')
            for(x=1;x<item.length;x++){
                menuDOM.list.removeChild(item[x]);
            }
        localStorage.setItem('menu', null);
        list=[];
            
        })
    function populateList() {
        var tempList = localStorage.getItem('menu');
        list = JSON.parse(tempList) || [];
            list.forEach(function(el){
var html = `<a href="#" data-id=${_.uniqueId()} class="list-group-item">${el.name}<span class="badge">${el.price}$</span>
        </a>`;
        menuDOM.list.insertAdjacentHTML('beforeend', html);
        })
        var tempList=document.querySelectorAll('.list-group-item')
        var listItems= document.querySelectorAll('.list-group-item');
        listItems.forEach(function(el){
            el.addEventListener('click',function(){
                var itemNR=(el.dataset.id);
                console.log(list[itemNR-1])
            })
        })
        

    }

    menuDOM.add.addEventListener('click', addItems);
    return{
        populate:populateList(),
        list:list
    }
    function addOrder(){
        MenuDOM.table.insertAdjacentHTML('beforeend','<p>aaaaaaaaaa</p>')
}

})();

const MainController = (function () {
    
    var list = MenuController.list;
    var orders =[ [ ],[ ],[ ] ]
    
    function addOrder(el){
        orders[0].push(el)
        console.log(orders);
    }
    
    function test(){
        console.log('alo');
        console.log(list);
    }
    return {
        init:function(){
        test()
    }, addOrder:addOrder
           }
})();

MainController.init();