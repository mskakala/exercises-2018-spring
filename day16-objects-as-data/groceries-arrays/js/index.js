let groceries = [
  'Apples', 
  'Bananas',
  'Bread',
  'Milk', 
  'Butter',
  'Cheese'
];

let amounts = [
  '2', 
  '0.5kg',
  '1',
  '2l', 
  '250g',
  '100g'
];

refresh();

function refresh() {
  let $list = $('#list');
  $list.html('');
  groceries.forEach(function(item, index) {
    let $btn = $('<button>')
      .addClass('remove')
      .text('X')
      .click(function() {
        groceries.splice(index, 1);
        amounts.splice(index, 1);
        refresh();
      });
    let $line = $('<div>')
      .addClass('item')
      .text(item + ', ' + amounts[index])
      .append($btn); 
    $list.append($line);
  });
}

function addItem() {
  let $item_input = $('#item-input');
  let $amount_input = $('#amount-input');
  
  groceries.push($item_input.val());
  amounts.push($amount_input.val());

  $item_input.val('');
  $amount_input.val('');
  
  refresh();
}