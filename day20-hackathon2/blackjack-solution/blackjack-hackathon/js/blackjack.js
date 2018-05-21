var $deck = $('#deck');
var $discard = $('#discard');
var $hand = $('#hand');
var $croupier = $('#croupier');

var game = {
    burntCard: false,
    initialized: false,
    canHint: false,
    aceValue: 10,
    result: null,
    deck: [],
    discard: [],
    hand: [],
    handPoints: 0,
    croupier: [],
    croupierPoints: 0
};

$('#game-start').click(function(){
    $('#game-overlay').remove();

    gameStart();
});


$('#hit').click(function(){
    gameHit();
});

$('#stand').click(function(){
    gameStand();
});


function gameStart(){
    game.deck = generateDeck();
    game.deck = shuffleDeck(game.deck);

    renderDeck();
    gameInit();
}

function gameInit(){
    console.log('game init');
    if(!game.burntCard){
        //burn first card
        game.burntCard = true;

        gameCardToDiscard();
        return;
    }

    if(game.hand.length == 2 && game.croupier.length == 2){
        game.croupier[0].flipped = false;
        renderCroupier();

        game.canHint = true;
        game.initialized = true;
    }else if(game.hand.length == game.croupier.length){
        gameCardToHand();
    }else if(game.hand.length > game.croupier.length){
        gameCardToCroupier();
    }
}

function gameStand(){
    if(!game.initialized) return;
    if(game.result != null) return;

    game.croupier.forEach(function(card){
        card.flipped = false;
    });
    renderCroupier();

    if(game.croupierPoints > 21){
        game.result = 'win';
        renderResult();
    }else if(game.croupierPoints < 17){
        gameCardToCroupier();
        gameStand();
    }else{
        if(game.croupierPoints > game.handPoints){
            game.result = 'loose';
            renderResult();
        }else if(game.croupierPoints == game.handPoints){
            game.result = 'draw';
            renderResult();
        }else if(game.croupierPoints < game.handPoints){
            game.result = 'win';
            renderResult();
        }
    }
}


function gameHit(){
    if(!game.canHint) return;
    if(game.result != null) return;

    gameCardToHand();

    if(game.handPoints > 21){
        game.result = 'loose';
        renderResult();
    }
}


function gameCardToCroupier(){
    var card = game.deck.pop();
    game.croupier.push(card);

    renderDeck();
    renderCroupier();

    if(!game.initialized){
        gameInit()
    }
}

function gameCardToHand(){
    var card = game.deck.pop();
    card.flipped = false;
    game.hand.push(card);

    renderDeck();
    renderHand();

    if(!game.initialized){
        gameInit()
    }
}

function gameCardToDiscard(){
    var card = game.deck.pop();
    game.discard.push(card);

    renderDeck();
    renderDiscard();

    if(!game.initialized){
        gameInit()
    }
}


function blackjackValue(value){
    if(value == 'J' || value == 'Q' || value == 'K'){
        value = 10;
    }else if(value == 'A'){
        value = game.aceValue;
    }else{
        value = parseInt(value);
    }

    return value;
}

// render methods


function renderDeck(){
    $deck.empty();
    game.deck.forEach(function(card){
        $deck.append(renderCard(card));
    });
}

function renderDiscard(){
    $discard.empty();
    game.discard.forEach(function(card){
        $discard.append(renderCard(card));
    });
}


function renderHand(){
    $hand.empty();
    var points = 0;

    game.hand.forEach(function(card){
        if(!card.flipped) points += blackjackValue(card.value);
        $hand.append(renderCard(card));
    });

    game.handPoints = points;

    $('#toolbar-text span').html(points);
}

function renderCroupier(){
    $croupier.empty();
    var points = 0;
    game.croupier.forEach(function(card){
        if(!card.flipped) points += blackjackValue(card.value);
        $croupier.append(renderCard(card));
    });

    game.croupierPoints = points;

    $('#croupier-text span').html(points);
}

function renderCard(card){
    var symbols = {
        'club' : '♣',
        'diamond' : '♦',
        'spade' : '♠',
        'heart' : '♥'
    };
    var symbol = symbols[card.suit];
    
    

    var cards = {
        '2' : '<div class="card ' + (card.flipped ? 'flipped ' : '') + 'card-two ' + card.suit + '"><div class="corner top"><span class="number">2</span><span>' + symbol + '</span></div><span class="suit top_center">' + symbol + '</span><span class="suit bottom_center">' + symbol + '</span><div class="corner bottom"><span class="number">2</span><span>' + symbol + '</span></div></div>',
        '3' : '<div class="card ' + (card.flipped ? 'flipped ' : '') + 'card-three ' + card.suit + '"><div class="corner top"><span class="number">3</span><span>' + symbol + '</span></div><span class="suit top_center">' + symbol + '</span><span class="suit middle_center">' + symbol + '</span><span class="suit bottom_center">' + symbol + '</span><div class="corner bottom"><span class="number">3</span><span>' + symbol + '</span></div></div>',
        '4' : '<div class="card ' + (card.flipped ? 'flipped ' : '') + 'card-four ' + card.suit + '"><div class="corner top"><span class="number">4</span><span>' + symbol + '</span></div><span class="suit top_left">' + symbol + '</span><span class="suit top_right">' + symbol + '</span><span class="suit bottom_left">' + symbol + '</span><span class="suit bottom_right">' + symbol + '</span><div class="corner bottom"><span class="number">4</span><span>' + symbol + '</span></div></div>',
        '5' : '<div class="card ' + (card.flipped ? 'flipped ' : '') + 'card-five ' + card.suit + '"><div class="corner top"><span class="number">5</span><span>' + symbol + '</span></div><span class="suit top_left">' + symbol + '</span><span class="suit top_right">' + symbol + '</span><span class="suit middle_center">' + symbol + '</span><span class="suit bottom_left">' + symbol + '</span><span class="suit bottom_right">' + symbol + '</span><div class="corner bottom"><span class="number">5</span><span>' + symbol + '</span></div></div>',
        '6' : '<div class="card ' + (card.flipped ? 'flipped ' : '') + 'card-six ' + card.suit + '"><div class="corner top"><span class="number">6</span><span>' + symbol + '</span></div><span class="suit top_left">' + symbol + '</span><span class="suit top_right">' + symbol + '</span><span class="suit middle_left">' + symbol + '</span><span class="suit middle_right">' + symbol + '</span><span class="suit bottom_left">' + symbol + '</span><span class="suit bottom_right">' + symbol + '</span><div class="corner bottom"><span class="number">6</span><span>' + symbol + '</span></div></div>',
        '7' : '<div class="card ' + (card.flipped ? 'flipped ' : '') + 'card-seven ' + card.suit + '"><div class="corner top"><span class="number">7</span><span>' + symbol + '</span></div><span class="suit top_left">' + symbol + '</span><span class="suit top_right">' + symbol + '</span><span class="suit middle_left">' + symbol + '</span><span class="suit middle_top">' + symbol + '</span><span class="suit middle_right">' + symbol + '</span><span class="suit bottom_left">' + symbol + '</span><span class="suit bottom_right">' + symbol + '</span><div class="corner bottom"><span class="number">7</span><span>' + symbol + '</span></div></div>',
        '8' : '<div class="card ' + (card.flipped ? 'flipped ' : '') + 'card-eight ' + card.suit + '"><div class="corner top"><span class="number">8</span><span>' + symbol + '</span></div><span class="suit top_left">' + symbol + '</span><span class="suit top_right">' + symbol + '</span><span class="suit middle_left">' + symbol + '</span><span class="suit middle_top">' + symbol + '</span><span class="suit middle_right">' + symbol + '</span><span class="suit middle_bottom">' + symbol + '</span><span class="suit bottom_left">' + symbol + '</span><span class="suit bottom_right">' + symbol + '</span><div class="corner bottom"><span class="number">8</span><span>' + symbol + '</span></div></div>',
        '9' : '<div class="card ' + (card.flipped ? 'flipped ' : '') + 'card-nine ' + card.suit + '"><div class="corner top"><span class="number">9</span><span>' + symbol + '</span></div><span class="suit top_left">' + symbol + '</span><span class="suit top_right">' + symbol + '</span><span class="suit middle_top_left">' + symbol + '</span><span class="suit middle_center">' + symbol + '</span><span class="suit middle_top_right">' + symbol + '</span><span class="suit bottom_left">' + symbol + '</span><span class="suit bottom_right">' + symbol + '</span><span class="suit middle_bottom_left">' + symbol + '</span><span class="suit middle_bottom_right">' + symbol + '</span><div class="corner bottom"><span class="number">9</span><span>' + symbol + '</span></div></div>',
        '10': '<div class="card ' + (card.flipped ? 'flipped ' : '') + 'card-ten ' + card.suit + '"><div class="corner top"><span class="number">10</span><span>' + symbol + '</span></div><span class="suit top_left">' + symbol + '</span><span class="suit top_right">' + symbol + '</span><span class="suit middle_top_left">' + symbol + '</span><span class="suit middle_top_center">' + symbol + '</span><span class="suit middle_top_right">' + symbol + '</span><span class="suit bottom_left">' + symbol + '</span><span class="suit bottom_right">' + symbol + '</span><span class="suit middle_bottom_center">' + symbol + '</span><span class="suit middle_bottom_left">' + symbol + '</span><span class="suit middle_bottom_right">' + symbol + '</span><div class="corner bottom"><span class="number">10</span><span>' + symbol + '</span></div></div>',
        'J' : '<div class="card ' + (card.flipped ? 'flipped ' : '') + 'card-jack ' + card.suit + '"><div class="corner top"><span class="number">J</span><span>' + symbol + '</span></div><span class="face middle_center"><img src="img/faces/face-jack-' + card.suit + '.png"/></span><div class="corner bottom"><span class="number">J</span><span>' + symbol + '</span></div></div>',
        'Q' : '<div class="card ' + (card.flipped ? 'flipped ' : '') + 'card-queen ' + card.suit + '"><div class="corner top"><span class="number">Q</span><span>' + symbol + '</span></div><span class="face middle_center"><img src="img/faces/face-queen-' + card.suit + '.png"/></span><div class="corner bottom"><span class="number">Q</span><span>' + symbol + '</span></div></div>',
        'K' : '<div class="card ' + (card.flipped ? 'flipped ' : '') + 'card-king ' + card.suit + '"><div class="corner top"><span class="number">K</span><span>' + symbol + '</span></div><span class="face middle_center"><img src="img/faces/face-king-' + card.suit + '.png"/></span><div class="corner bottom"><span class="number">K</span><span>' + symbol + '</span></div></div>',
        'A' : '<div class="card ' + (card.flipped ? 'flipped ' : '') + 'card-ace ' + card.suit + '"><div class="corner top"><span class="number">A</span><span>' + symbol + '</span></div><span class="suit middle_center">' + symbol + '</span><div class="corner bottom"><span class="number">A</span><span>' + symbol + '</span></div></div>'
    }

    return cards[card.value];
}


function renderResult(){
    if(game.result == 'win'){

        var $result = $('<div id="game-overlay"><div class="wrapper"><h1>You won :)</h1></div></div>');

    }else if(game.result == 'loose'){

        var $result = $('<div id="game-overlay"><div class="wrapper"><h1>You lost :\'(</h1></div></div>');

    }else if(game.result == 'draw'){

        var $result = $('<div id="game-overlay"><div class="wrapper"><h1>It\'s a draw ;)</h1></div></div>');

    }

    setTimeout(function(){ $('body').append($result) }, 1000);
}