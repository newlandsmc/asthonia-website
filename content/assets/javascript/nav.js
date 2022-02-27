import '/assets/javascript/jquery-3.6.0.min.js';

$(window).bind('scroll', function() {
  if ($(window).scrollTop() < 100) {
    $('nav').removeClass('scroll');
  }
  else {
    $('nav').addClass('scroll');
  }
});
