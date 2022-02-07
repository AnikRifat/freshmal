   <!-- header start -->
   <header id="sticky-header" class="header__area pt-40 header__style--3">
     <div class="container">
       <div class="row align-items-center">
         <div class="col-xl-2 col-lg-2 col-6">
           <div class="logo">
             <a href="index-2.html"><img src="<?php echo URLROOT; ?>/assets/img/logo/logo.png" alt=""></a>
           </div>
         </div>
         <div class="col-xl-6 col-lg-7 d-none d-lg-block">
           <div class="main-menu">
             <nav id="mobile-menu">
               <ul>

                 <!-- <li class="menu-item-has-children active"><a href="#home">Home</a>
                                            <ul class="sub-menu">
                                                <li><a href="index-2.html">Home 01</a></li>
                                                <li><a href="home-2.html">Home 02</a></li>
                                                <li class="active"><a href="home-3.html">Home 03</a></li>
                                            </ul>
                                        </li> -->
                 <li><a href="<?php echo URLROOT; ?>/pages/index">Home</a></li>
                 <li><a href="<?php echo URLROOT; ?>/pages/about">About</a></li>

                 <li><a href="#product">Product</a></li>
               </ul>
             </nav>
           </div>
         </div>
         <div class="col-xl-4 col-lg-3 col-6">
           <div class="header__right ul_li_right">
             <div class="header__icons d-none d-lg-block">
               <button class="icon icon--cart cart-trigger">
                 <span>($78.00)</span>
                 <i class="far fa-shopping-bag"></i>
                 <sup>8</sup>
               </button>
               <a class="icon search_icon" href="#!">
                 <i class="far fa-search"></i>
               </a>
             </div>
             <div class="header__btn">
               <a class="thm_btn radius_btn" href="#!">Discover now</a>
             </div>
             <div class="side-mobile-menu">
               <button class="side-info-close"><i class="fal fa-times"></i></button>
               <div class="mobile-menu"></div>
             </div>
             <div class="side-menu-icon d-lg-none">
               <button class="side-toggle"><i class="fal fa-bars"></i></button>
             </div>
           </div>
         </div>
       </div>
     </div>

     <!-- cart list start -->
     <aside class="cart-bar-wrapper">
       <div class="cart-bar__close">
         <a class="d-flex align-items-center justify-content-center" href="javascript:void(0);"><i class="fal fa-times"></i></a>
       </div>
       <div class="cart-bar">
         <h4 class="cart-bar__title">Cart Items - <span>4</span></h4>
         <div class="cart-bar__lists">
           <div class="cart-bar__item position-relative d-flex">
             <div class="thumb">
               <img src="<?php echo URLROOT; ?>/assets/img/product/img_01.png" alt="image_not_found">
             </div>
             <div class="content">
               <h4 class="title">
                 <a href="#0">Rorem ipsum dolor sit amet.</a>
               </h4>
               <span class="price">$19.00</span>
               <a href="#0" class="remove"><i class="fal fa-times"></i></a>
             </div>
           </div>
           <div class="cart-bar__item position-relative d-flex">
             <div class="thumb">
               <img src="<?php echo URLROOT; ?>/assets/img/product/img_02.png" alt="image_not_found">
             </div>
             <div class="content">
               <h4 class="title">
                 <a href="#0">Rorem ipsum dolor sit amet.</a>
               </h4>
               <span class="price">$36.00</span>
               <a href="#0" class="remove"><i class="fal fa-times"></i></a>
             </div>
           </div>
           <div class="cart-bar__item position-relative d-flex">
             <div class="thumb">
               <img src="<?php echo URLROOT; ?>/assets/img/product/img_03.png" alt="image_not_found">
             </div>
             <div class="content">
               <h4 class="title">
                 <a href="#0">Rorem ipsum dolor sit amet.</a>
               </h4>
               <span class="price">$20.00</span>
               <a href="#0" class="remove"><i class="fal fa-times"></i></a>
             </div>
           </div>
           <div class="cart-bar__item position-relative d-flex">
             <div class="thumb">
               <img src="<?php echo URLROOT; ?>/assets/img/product/img_04.png" alt="image_not_found">
             </div>
             <div class="content">
               <h4 class="title">
                 <a href="#0">Rorem ipsum dolor sit amet.</a>
               </h4>
               <span class="price">$20.00</span>
               <a href="#0" class="remove"><i class="fal fa-times"></i></a>
             </div>
           </div>
         </div>
         <div class="cart-bar__subtotal d-flex align-items-center justify-content-between">
           <span>Sub Total:</span>
           <span>$87.00</span>
         </div>
         <div class="btns d-flex align-items-center justify-content-center">
           <a href="cart.html" class="thm_btn radius_btn">View Cart</a>
           <a href="checkout.html" class="thm_btn thm_btn-2 radius_btn">Checkout</a>
         </div>
       </div>
     </aside>
     <div class="offcanvas-overlay"></div>
     <!-- cart list end -->

     <!-- header search start -->
     <div class="search-area">
       <div class="search-area-bg"></div>
       <a href="#!" class="search-close">
         <i class="far fa-times"></i>
       </a>
       <div class="search-form">
         <div class="container">
           <div class="row justify-content-center">
             <div class="col-xl-8">
               <form action="#" method="post">
                 <input type="text" placeholder="Search here...">
                 <button type="submit">
                   <i class="fa fa-search"></i>
                 </button>
               </form>
             </div>
           </div>
         </div>
       </div>
     </div>
     <!-- header search end -->
   </header>
   <!-- header end -->