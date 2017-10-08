console.log('Google API')
var latitude = document.querySelector('#lat')
var longitude = document.querySelector('#lng')
var coords = document.querySelector('#coords')

var address = document.querySelector('#address')
var text = document.querySelector('input[type=text]')

function initMap(lat=0, lng=0) {
  
    var uluru = {
        lat: lat,
        lng: lng
    };
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 6,
        center: uluru
    });
    var marker = new google.maps.Marker({
        position: uluru,
        map: map
    });
}

coords.addEventListener('click', function(){
    var lat = parseFloat(latitude.value);
    var lng = parseFloat(longitude.value);
    console.log(lat,lng)
    initMap(lat, lng)
})

address.addEventListener('click',function(){
    var vietove = text.value;
    console.log(vietove)
    var ulr= 'https://maps.googleapis.com/maps/api/geocode/json?address='+vietove+'&key=AIzaSyANnjJ3bi7t1CnmCyf1LdjS-9ogHwuUCl4';
    console.log(ulr);
    $.getJSON(ulr, function(data){
        console.log(data.results[0].geometry.location)
        var lat = data.results[0].geometry.location.lat
        var lng = data.results[0].geometry.location.lng
        initMap(lat, lng)
    })
})

























