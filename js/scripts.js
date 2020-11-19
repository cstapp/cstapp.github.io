$('.pop').popover();

$('.pop').click(function () {
    $('.pop').toggleClass('pop-active');
    $('.pop').not(this).removeClass('pop-active');
    $('.pop').not(this).popover('hide');
});
