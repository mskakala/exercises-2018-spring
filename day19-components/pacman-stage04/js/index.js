'use strict';

function Pacman(name, x, y, color) {
  this.name = name;
  this.pos_x = x;
  this.pos_y = y;
  this.state = 'open';
  this.facing = 'r';
  this.color = color;

  this.move_right = function() {
    this.pos_x++;
    this.facing = 'r';
    this.flip_state();
  };

  this.move_left = function() {
    this.pos_x--;
    this.facing = 'l';
    this.flip_state();
  };

  this.move_up = function() {
    this.pos_y--;
    this.facing = 't';
    this.flip_state();
  };

  this.move_down = function() {
    this.pos_y++;
    this.facing = 'b';
    this.flip_state();
  };

  this.flip_state = function() {
    if(this.state == 'open') {
      this.state = 'close';
    } else {
      this.state = 'open';
    }
  };
}

let army = [
  new Pacman('Barbie', 0, 0, 'dark'),
  new Pacman('Klaus', 2, 3, 'light'),
  new Pacman('Arnold', 4, 1, 'medium')
];

function army_create() {
  army.forEach(function(pacman) {
    $('#army').append(pacman_create(pacman));
  });
}

function army_update() {
  army.forEach(function(pacman) {
    pacman_update(pacman);
  });
}

function pacman_create(pacman) {
  return $('<div>')
    .attr('id', pacman.name)
    .addClass('pacman ' + pacman_class(pacman))
    .css('left', pacman.pos_x * 64 + 'px')
    .css('top', pacman.pos_y * 64 + 'px');
}

function pacman_class(pacman) {
  return 'pac-' + pacman.color + '-' + 
    pacman.facing + pacman.state;
}

function pacman_update(pacman) {
  let $pacman = $('#' + pacman.name);

  $pacman.removeClass();
  $pacman.addClass('pacman ' + pacman_class(pacman));
  $pacman.css('left', pacman.pos_x * 64 + 'px');
  $pacman.css('top', pacman.pos_y * 64 + 'px');
}

$(document).ready(function() {
  $(document).keydown(function(e) {
    if(e.key == 'ArrowRight') {
      army[0].move_right();
    } else if(e.key == 'ArrowLeft') {
      army[0].move_left();
    } else if(e.key == 'ArrowUp') {
      army[0].move_up();
    } else if(e.key == 'ArrowDown') {
      army[0].move_down();
    }

    pacman_update(army[0]);
  });

  army_create();
})