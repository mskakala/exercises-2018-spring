$(document).ready(function() {
  $('li').click(function() {
    $(this).find('.icon').toggleClass('check');
    $(this).find('.text').toggleClass('strike-through');
  });
});