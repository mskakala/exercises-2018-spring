'use strict';

function ProgressBar(value, max) {
  this.value = value;
  this.max = max;

  this.increment = function() {
    if(this.value < this.max) {
      this.value += 1;
    }
  }

  this.decrement = function() {
    if(this.value > 0) {
      this.value -= 1;
    }
  }
}

let progressBar = new ProgressBar(63, 100);

function update_html(bar) {
  $('#counter').html(bar.value);
  $('#maximum').html(bar.max);
  $('#knob').css('width', (bar.value / bar.max)*100 + '%');
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