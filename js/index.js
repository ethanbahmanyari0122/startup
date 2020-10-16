case 'ITEM_ADDED':
return Object.assign({}, state, {
  cart: (new Set(state.cart)).add(data.item),
});
