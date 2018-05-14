let products = [
  {
    name: 'Apples',
    amount: '2'
  }, 
  {
    name: 'Bananas',
    amount: '0.5kg'
  },
  {
    name: 'Bread',
    amount: '1'
  },
  {
    name: 'Milk',
    amount: '2l'
  },
  {
    name: 'Butter',
    amount: '250g'
  },
  {
    name: 'Cheese',
    amount: '100g'
  }
];

refresh();

function refresh() {
  let $list = $('#list');
  $list.html('');
  products.forEach(function(product, index) {
    let $btn = $('<button>')
      .addClass('remove')
      .text('X')
      .click(function() {
        products.splice(index, 1);
        refresh();
      });
    let $line = $('<div>')
      .addClass('item')
      .text(product.name + ', ' + product.amount)
      .append($btn); 
    $list.append($line);
  });
}

function addItem() {
  let $item_input = $('#item-input');
  let $amount_input = $('#amount-input');
  
  let product = {
    name: $item_input.val(),
    amount: $amount_input.val()
  };
  products.push(product);
  
  $item_input.val('');
  $amount_input.val('');
  
  refresh();
}