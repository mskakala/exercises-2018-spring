const clock = require('./clock/clock.js');
require('./style.css');

$(document).ready(function() {
  let my_clock1 = new clock.Clock(11, 5);
  let my_clock2 = new clock.Clock(21, 35);
  my_clock1.mount(document.getElementById('app'));
  my_clock2.mount(document.getElementById('app'));
});
