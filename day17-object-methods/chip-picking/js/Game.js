function Game() {
    this.score = 0;
    this.board = $('#board');
    this.chips = [];
    this.nr_of_chips = 10;
    this.colors = ['orangered', 'blue', 'green'];

    this.generateChips = function() {
        for(var i = 0; i < this.nr_of_chips; i++) { // runs 10 times

            var value = this.randomize(1, 5);
            var color = this.colors[this.randomize(0, 2)];
            var x = this.randomize(0, 336);
            var y = this.randomize(0, 336);

            var new_chip = new Chip();
            new_chip.game = this;
            new_chip.value = value;
            new_chip.color = color;
            new_chip.position.x = x;
            new_chip.position.y = y;

            console.log(new_chip);

            this.chips.push(new_chip);
            new_chip.render();
        }
    }

    this.randomize = function(min, max) {
        return min + Math.min(max - min, Math.floor(Math.random() * ((max - min)+1))); 
    }

    this.addScore = function(value) {
        this.score += value;
        this.board.find('.score span').html(this.score);
    }

    // actually call the method generateChips to generate the chips
    this.generateChips();
}