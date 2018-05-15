function placeHero(x, y) {
    // get the hero element by it's id attribute
    var hero = document.getElementById('hero');


    x = Math.max(0, Math.min(350, x));
    y = Math.max(0, Math.min(350, y));

    // setting the element's 'left' CSS property
    hero.style.left = x + 'px'; // '150px'
    // setting the element's 'top' CSS property
    hero.style.top = y + 'px';
    // setting the value of global variable hero_x
    hero_x = x;
    // setting the value of global variable hero_y
    hero_y = y;
}
 
var hero_x; // current hero x coordinate
var hero_y; // current hero y coordinate
 
placeHero(150, 150);

var upKeyHeld = false,
    downKeyHeld = false,
    leftKeyHeld = false,
    rightKeyHeld = false;

// listen for keypresses on the document
document.addEventListener('keydown', function(event) {

    if(event.keyCode == 39) { // 39 == ArrowRight
        rightKeyHeld = true;
    } else if(event.keyCode == 37) { // 37 == ArrowLeft
        leftKeyHeld = true;
    } else if(event.keyCode == 38) { // 38 == ArrowUp
        upKeyHeld = true;
    } else if(event.keyCode == 40) { // 40 == ArrowDown
        downKeyHeld = true;
    }

});

// listen for keypresses on the document
document.addEventListener('keyup', function(event) {
    console.log(event);
    if(event.keyCode == 39) { // 39 == ArrowRight
        // move right
        placeHero(hero_x + 50, hero_y);
        rightKeyHeld = false;
    } else if(event.keyCode == 37) { // 37 == ArrowLeft
        // move left
        placeHero(hero_x - 50, hero_y);
        leftKeyHeld = false;
    } else if(event.keyCode == 38) { // 38 == ArrowUp
        // move up
        if(rightKeyHeld) {
            placeHero(hero_x + 50, hero_y - 50);
        } else {
            placeHero(hero_x, hero_y - 50);
        }
        upKeyHeld = false;
    } else if(event.keyCode == 40) { // 40 == ArrowDown
        // move down
        placeHero(hero_x, hero_y + 50);
        downKeyHeld = false;
    }

});