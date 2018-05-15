var item = {
    name: 'Apples',
    amount: '2kg',
    'price to pay': '12CZK'
};

// item.name
// item['name']
// item['price to pay']


var shopping_cart = {
    total: {
        amount: 91.6,
        currency: 'CZK'
    },
    items: [
        {
            name: 'Apples',
            amount: '2kg',
            price: 62.6
        },
        {
            name: 'Cinnamon',
            amount: 1,
            price: 29
        }
    ]
}

shopping_cart.items.push({
        name: 'Carrots',
        amount: 1,
        price: 25
});

console.log(shopping_cart);