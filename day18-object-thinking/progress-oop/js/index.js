'use strict';

function ProgressBar(value) {
  this.value = value;

  this.increment = function() {
    if(this.value < 10) {
      this.value += 1;
    }
  }

  this.decrement = function() {
    if(this.value > 0) {
      this.value -= 1;
    }
  }
}

let progressBar = new ProgressBar(5);

function update_html(bar) {
  $('#counter').html(bar.value);
  $('#knob').css('width', bar.value * 10 + '%');
}

$(document).ready(function() {
  update_html(progressBar);

  $('#plus').click(function() {
    progressBar.increment();
    update_html(progressBar);
  });

  $('#minus').click(function() {
    progressBar.decrement();
    update_html(progressBar);
  });
});