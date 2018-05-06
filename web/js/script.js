$(window).scroll(function(){
    var top = parseInt($('header').css('height'));
    if($(this).scrollTop() >= top)
    {
        $('.main_menu').css('top', 0);
        $('.main_menu').css('position', 'fixed');
    }
    else
    {
        $('.main_menu').css('top', top);
        $('.main_menu').css('position', 'absolute');
    }
});