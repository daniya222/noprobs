
AOS.init();
$('header .menu').hide();
$('.icon').click(function() {
  $('header .menu').slideToggle("fast");
})