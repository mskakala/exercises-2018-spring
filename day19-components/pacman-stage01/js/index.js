'use strict';

let pos_x = 0;

function pacman_update() {
  $('#pacman').css('left', pos_x * 64 + 'px');
}

$(document).ready(function() {
  $(document).keydown(function(e) {
    if(e.key == 'ArrowRight') {
      if($('#pacman').hasClass('pac-light-ropen')) {
        $('#pacman').removeClass('pac-light-ropen');
        $('#pacman').addClass('pac-light-rclose');
      } else {
        $('#pacman').removeClass('pac-light-rclose');
        $('#pacman').addClass('pac-light-ropen');
      }

      pos_x += 1;
      pacman_update();
    }
  });

  pacman_update();
})