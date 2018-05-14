let groceries = [
  'Apples', 
  'Bananas',
  'Bread',
  'Milk', 
  'Butter',
  'Cheese'
];

refresh();

function refresh() {
  let $list = $('#list');
  $list.html('');
  groceries.forEach(function(item, index) {
    let $btn = $('<button>')
      .addClass('remove')
      .text('remove')
      .click(function() {
        groceries.splice(index, 1);
        refresh();
      });
    let $line = $('<div>')
      .addClass('item')
      .text(item)
      .append($btn); 
    $list.append($line);
  });
}

function addItem() {
  let $input = $('#input');
  let item = $input.val();
  groceries.push(item);
  $input.val('');
  refresh();
}