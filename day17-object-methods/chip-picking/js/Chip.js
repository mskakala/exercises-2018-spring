function Chip() {
    this.game = null; // reference to the game that created me
    this.value = null;
    this.color = null;
    this.position = {
        x: null,
        y: null
    }
    this.element = null; // the actual div element

    this.render = function() {
        this.element = $('<div class="chip"></div>');
        this.element.html(this.value);
        this.element.css({
            backgroundColor: this.color,
            left: this.position.x,
            top: this.position.y
        })
        this.game.board.append(this.element);

        var self = this;
        this.element.on('click', function() {
            self.clicked();
        });
    }

    this.clicked = function() {
        // hide the element
        this.element.hide();

        // add the score
        this.game.addScore(this.value);
    }
}