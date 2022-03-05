
// SELECT ELEMENTS
// const productsEl = document.querySelector(".products");
// const cartItemsEl = document.querySelector(".cart-items");
// const subtotalEl = document.querySelector(".subtotal");
// const totalItemsInCartEl = document.querySelector(".total-items-in-cart");

// RENDER PRODUCTS
// function renderProdcuts() {
//   products.forEach((product) => {
//     productsEl.innerHTML += `
//             <div class="item">
//                 <div class="item-container">
//                     <div class="item-img">
//                         <img src="${product.imgSrc}" alt="${product.name}">
//                     </div>
//                     <div class="desc">
//                         <h2>${product.name}</h2>
//                         <h2><small>$</small>${product.price}</h2>
//                         <p>
//                             ${product.description}
//                         </p>
//                     </div>
//                     <div class="add-to-wishlist">
//                         <img src="./icons/heart.png" alt="add to wish list">
//                     </div>
//                     <div class="add-to-cart" onclick="addToCart(${product.id})">
//                         <img src="./icons/bag-plus.png" alt="add to cart">
//                     </div>
//                 </div>
//             </div>
//         `;
//   });
// }
// renderProdcuts();

// cart array
let cart = JSON.parse(localStorage.getItem("CART")) || [];
updateCart();

// ADD TO CART
function addToCart(data) {
  // check if prodcut already exist in cart
  if (cart.some((item) => item.id === data.id)) {
    changeNumberOfUnits("plus", id);
  } else {
    const item = products.find((product) => product.id === id);

    cart.push({
      ...item,
      numberOfUnits: 1,
    });
  }

  updateCart();
}

// update cart
function updateCart() {
  renderCartItems();
  renderSubtotal();

  // save cart to local storage
  localStorage.setItem("CART", JSON.stringify(cart));
}

// calculate and render subtotal
function renderSubtotal() {
  let totalPrice = 0,
    totalItems = 0;

  cart.forEach((item) => {
    totalPrice += item.price * item.numberOfUnits;
    totalItems += item.numberOfUnits;
  });

  subtotalEl.innerHTML = `Subtotal (${totalItems} items): $${totalPrice.toFixed(2)}`;
  totalItemsInCartEl.innerHTML = totalItems;
}

// render cart items
function renderCartItems() {
  cartItemsEl.innerHTML = ""; // clear cart element
  cart.forEach((item) => {
    cartItemsEl.innerHTML += `
    <div class="cart-bar__item position-relative d-flex">
    <div class="thumb">
        <img src="${item.image}" alt="image_not_found">
    </div>
    <div class="content">
        <h4 class="title">
            <a href="#0">${item.name}</a>
        </h4>
        <span class="price">${item.price}</span>
        <a href="#0" onclick="${item.id}" class="remove"><i class="fal fa-times"></i></a>
    </div>
</div>
      `;
  });
}

// remove item from cart
function removeItemFromCart(id) {
  cart = cart.filter((item) => item.id !== id);

  updateCart();
}

// change number of units for an item
function changeNumberOfUnits(action, id) {
  cart = cart.map((item) => {
    let numberOfUnits = item.numberOfUnits;

    if (item.id === id) {
      if (action === "minus" && numberOfUnits > 1) {
        numberOfUnits--;
      } else if (action === "plus" && numberOfUnits < item.instock) {
        numberOfUnits++;
      }
    }

    return {
      ...item,
      numberOfUnits,
    };
  });

  updateCart();
}