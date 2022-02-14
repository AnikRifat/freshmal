
// function genClass(data) {
//   console.log(data.id)
// }
function renderCart(items) {
  const $cart = document.querySelector(".cart")
  const $total = document.querySelector(".total")


 

  $cart.innerHTML = items.map((item) => `<div class="cart-bar__item position-relative d-flex">
  <div class="thumb">
    <img src="${item.image}" alt="image_not_found">
  </div>
  <div class="content d-inline-block">
    <h4 class="title d-inline-block">
      <a href="#0">${item.name}</a>
    </h4>
    <div class="d-flex justify-content-between">
    <span class="price">${item.price}</span>
    <span class="quant">${item.quantity}</span>
    <a href="#0" class="remove" onClick="cartLS.remove(${item.id})"><i class="fal fa-times"></i></a>
    </div>
  </div>
</div> `).join()

  $total.innerHTML = "$" + cartLS.total()

}

renderCart(cartLS.list())
cartLS.onChange(renderCart)

// cartLS.onChange(genClass)
// genClass(cartLS.add($data))


// function renderview(items) {
//   $btnview.innerHTML = items.map((item) =>`<td>${item.quantity}</td>
//     <td style="width: 60px;">
//       <button type="button" class="btn btn-block btn-sm btn-outline-primary"
//         onClick="cartLS.quantity(${item.id},1)">+</button>
//     </td>
//     <td style="width: 60px;">
//       <button type="button" class="btn btn-block btn-sm btn-outline-primary"
//         onClick="cartLS.quantity(${item.id},-1)">-</button>
//     </td).join()

// }
// renderview(cartLS.list())

// cartLS.onChange(renderview)