let side = 2;

function startup() {
  $('#dice').click(function() {
    $(this).get(0).className = 'side' + side;
    side++;

    if(side === 7) {
      side = 1;
    }
  });
}