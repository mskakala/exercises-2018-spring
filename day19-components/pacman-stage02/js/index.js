'use strict';

let pacman = {
  pos_x: 0,
  state: 'open',
  move_right: function() {
    this.pos_x += 1;
    if(this.state == 'open') {
      this.state = 'close';
    } else {
      this.state = 'open';
    }
  }
};

function pacman_update() {
  let $pacman = $('#pacman');
  if(pacman.state == 'open') {
    $pacman.removeClass();
    $pacman.addClass('pacman pac-light-ropen');
  } else {
    $pacman.removeClass();
    $pacman.addClass('pacman pac-light-rclose');
  }

  $pacman.css('left', pacman.pos_x * 64 + 'px');
}

$(document).ready(function() {
  $(document).keydown(function(e) {
    if(e.key == 'ArrowRight') {
      pacman.move_right();
      pacman_update();
    }
  });

  pacman_update();
})