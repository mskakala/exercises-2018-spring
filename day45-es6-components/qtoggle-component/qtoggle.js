function QToggle(state) {
  this.state = state;

  this.flip = function() {
    if(this.state === 'question') { 
      this.state = 'check';
    } else if(this.state === 'check') {
      this.state = 'cross';
    } else if(this.state === 'cross') {
      this.state = 'question';
    }

    this.render();
  }

  this.create_html = function() {
    return $('<div>')
      .addClass('qtoggle ' + this.state)
      .click(this.flip.bind(this));
  }

  this.render = function() {
    $new_element = this.create_html();
    this.$element.replaceWith($new_element);
    this.$element = $new_element;
  }

  this.mount = function(parent) {
    this.$element = this.create_html();
    $(parent).append(this.$element);
  }
}