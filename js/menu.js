store.on('ITEM_ADDED', ({ cart }) => {
  const cartArray = [...cart];
  const articles = cartArray.map(id => `article[data-key='${id}']`);
  const buttons = cartArray.map(id => `article[data-key='${id}'] button.add-to-cart`);

  $(articles.join(', ')).addClass('in-cart');
  $(buttons.join(', ')).attr('disabled', 'disabled');
});
