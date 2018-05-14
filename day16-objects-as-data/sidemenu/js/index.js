$(document).ready(function() {
  $('aside').mouseenter(function() {
    $(this).toggleClass('closed');
  });

  $('aside').mouseleave(function() {
    $(this).toggleClass('closed');
  });
});