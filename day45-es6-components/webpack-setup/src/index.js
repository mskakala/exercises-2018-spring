const qtoggle = require('./qtoggle/qtoggle.js');
require('./style.css');

$(document).ready(() => {
  let qtoggle1 = new qtoggle.QToggle('check');
  let qtoggle2 = new qtoggle.QToggle('cross');
  let qtoggle3 = new qtoggle.QToggle('question');
  qtoggle1.mount(document.getElementById('app'));
  qtoggle2.mount(document.getElementById('app'));
  qtoggle3.mount(document.getElementById('app'));
});