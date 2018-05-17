'use strict';

let pacman = {
  pos_x: 0,
  state: 'open',
  facing: 'r',
  move_right: function() {
    this.pos_x++;
    this.facing = 'r';
    this.flip_state();
  },
  move_left: function() {
    this.pos_x--;
    this.facing = 'l';
    this.flip_state();
  },
  flip_state: function() {
    if(this.state == 'open') {
      this.state = 'close';
    } else {
      this.state = 'open';
    }
  }
};

function pacman_update() {
  let $pacman = $('#pacman');
  let className = 'pac-light-' + pacman.facing + pacman.state;

  $pacman.removeClass();
  $pacman.addClass('pacman ' + className);
  $pacman.css('left', pacman.pos_x * 64 + 'px');
}

$(document).ready(function() {
  $(document).keydown(function(e) {
    if(e.key == 'ArrowRight') {
      pacman.move_right();
    } else if(e.key == 'ArrowLeft') {
      pacman.move_left();
    }

    pacman_update();
  });

  pacman_update();
})