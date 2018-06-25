window.$ = require('jquery');
require('./clock.css');

export class Clock {
  constructor(hours, minutes) {
    this.hours = hours;
    this.minutes = minutes;
  }
  
  increment_hours() {
    this.hours = (this.hours + 1) % 25;
    this.render();
  }

  increment_minutes() {
    this.minutes = (this.minutes + 1) % 60;
    this.render();
  }

  create_html() {
    let $hours = $('<span>')
      .addClass('hours')
      .text(this.hours)
      .click(this.increment_hours.bind(this));
    let $minutes = $('<span>')
      .addClass('minutes')
      .text(this.minutes)
      .click(this.increment_minutes.bind(this));

    return $('<div>')
      .append($hours)
      .append(':')
      .append($minutes);
  }
  
  render() {
    let $new_element = this.create_html();
    this.$element.replaceWith($new_element);
    this.$element = $new_element;
  }

  mount(parent) {
    this.$element = this.create_html();
    $(parent).append(this.$element);
  }
}