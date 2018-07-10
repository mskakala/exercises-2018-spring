window.$ = require('jquery');
require('./qtoggle.css');

export class QToggle {

  constructor(state) {
    this.state = state;
  }

  flip() {
    if(this.state === 'question') { 
      this.state = 'check';
    } else if(this.state === 'check') {
      this.state = 'cross';
    } else if(this.state === 'cross') {
      this.state = 'question';
    }

    this.render();
  }

  create_html() {
    return $('<div>')
      .addClass('qtoggle ' + this.state)
      .click(this.flip.bind(this));
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