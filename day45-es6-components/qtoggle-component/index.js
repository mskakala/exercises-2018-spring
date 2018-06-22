$(document).ready(() => {
  let qtoggle1 = new QToggle('check');
  let qtoggle2 = new QToggle('cross');
  let qtoggle3 = new QToggle('question');
  qtoggle1.mount(document.getElementById('app'));
  qtoggle2.mount(document.getElementById('app'));
  qtoggle3.mount(document.getElementById('app'));
});