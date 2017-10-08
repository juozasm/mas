$(document).ready(function(){
    console.log('jq runin');
    $('h1').css('color', 'red');
    $('.box').on('click',function(){
        var color = 'blue';
        $(this).css('background-color',color)
    })
    $('.box').on('mouseenter',function(){
        $(this).fadeOut();
    })
    $('.min-menu').on('click',function(){
        $('ul').slideToggle()
    })
    $('.small').on('click',function(){
        var src=$(this).attr('src');
        $('.big').attr('src',src );
    })
    
})

