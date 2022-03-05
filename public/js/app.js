
let cartStorage = []
const cartId = "__cart"
var store = JSON.parse(localStorage.getItem(cartId))
let targetEl = document.querySelector("#cart-view")
cartView()


function addToCart(cartData) {
let objItem = cartData;
let objId = cartData.id
  if (store == null || typeof store == 'undefined') {
    staticPush(objItem)
    location.reload()
  } else {
    if (findData(objId)) {
      let objIndex = findIndex(objId)
      updateData(objIndex, objItem)
    } else {
      staticUpdate(objItem)
    }
  }
 
}

function staticPush(itemData) {
  let data = {
    id: itemData.id,
    quantity: itemData.quantity,
    name: itemData.name,
    price: itemData.price,
    unit: itemData.unit,
    image: itemData.image
  }
  cartStorage.push(data);
  localStorage.setItem(cartId, JSON.stringify(cartStorage))
}

function staticUpdate(itemData) {
  let data = {
    id: itemData.id,
    quantity: itemData.quantity,
    name: itemData.name,
    price: itemData.price,
    unit: itemData.unit,
    image: itemData.image
  }
  store.push(data);
  localStorage.setItem(cartId, JSON.stringify(store))
}

function findData(itemId) {
  const result = store.filter(x => x.id == itemId);
  if (result.length == 1) {
    return true
  } else {
    return false
  }
}

function findIndex(itemId) {
  var Index = store.findIndex((obj => obj.id == itemId))
  return Index
}


function updateData(objIndex, objItem) {
  store[objIndex].quantity = store[objIndex].quantity + objItem.quantity
  localStorage.setItem(cartId, JSON.stringify(store))
}
function addData(itemId) {
  let objIndex = findIndex(itemId)
  store[objIndex].quantity = store[objIndex].quantity + cartData.quantity
  localStorage.setItem(cartId, JSON.stringify(store))
}
function dltData(itemId) {
  let objIndex = findIndex(itemId)
  store[objIndex].quantity = store[objIndex].quantity - cartData.quantity
  localStorage.setItem(cartId, JSON.stringify(store))
}
function removeData(itemId) {
  let objIndex = findIndex(itemId)
  store.splice(objIndex,1)
  localStorage.setItem(cartId, JSON.stringify(store))
}

function cartView(){
  targetEl.innerHTML = ""; 
  store.map((item) => {
    console.log(item)
    targetEl.innerHTML += `
    <div class="cart-bar__item position-relative d-flex">
    <div class="thumb">
        <img src="${item.image}" alt="image_not_found">
    </div>
    <div class="content">
        <h4 class="title">
            <a href="#0">${item.name}</a>
        </h4>
        <span class="price">$ ${item.price}</span>
        <a href="#0" onclick="${item.id}" class="remove"><i class="fal fa-times"></i></a>
    </div>
</div>
      `;
  });
  }
