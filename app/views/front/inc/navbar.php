   <!-- header start -->
   <header id="sticky-header" class="header__area pt-40 header__style--3">
     <div class="container">
       <div class="row align-items-center">
         <div class="col-xl-2 col-lg-2 col-6">
           <div class="logo">
             <a href="index-2.html"><img src="<?php echo URLROOT; ?>/assets/front/img/logo/logo.png" alt=""></a>
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
                 <li><a href="<?php echo URLROOT; ?>/pages/home">Home</a></li>
                 <li><a href="<?php echo URLROOT; ?>/pages/about">About</a></li>
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
               <a class="icon icon--wishlist" href="#!">
                 <i class="far fa-heart"></i>
                 <sup>4</sup>
               </a>
             </div>


             <div class="header__profile--wrap">
               <a class="header__profile ul_li" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                 <span>
                   <?php if (isset($_SESSION['user_id'])) {
                      echo $_SESSION['name'];
                    } else {
                      echo "Join!";
                    }
                    ?>
                 </span>
                 <div class="avatar__img">

                   <img src="<?php echo URLROOT; ?>/assets/front/img/avatar/header_avatar.jpg" alt="">
                 </div>
                 <i class="fal fa-angle-down"></i>
               </a>
               <?php if (isset($_SESSION['user_id'])) : ?>
                 <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                   <a href="login.html" class="dropdown-item notify-item">
                     <i class="fe-user"></i>
                     <span>Dashboard</span>
                   </a>

                   <div class="dropdown-divider"></div>
                   <a href="<?php echo URLROOT; ?>/users/logout" class="dropdown-item notify-item">
                     <i class="fe-log-out"></i>
                     <span>Logout</span>
                   </a>

                 </div>
               <?php else : ?>
                 <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                   <a href="<?php echo URLROOT; ?>/users/login" class="dropdown-item notify-item">
                     <i class="fe-user"></i>
                     <span>Login</span>
                   </a>

                   <div class="dropdown-divider"></div>
                   <a href="<?php echo URLROOT; ?>/users/register" class="dropdown-item notify-item">
                     <i class="fe-log-out"></i>
                     <span>Register</span>
                   </a>

                 </div>
               <?php endif; ?>
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
         <h4 class="cart-bar__title">Shopping Bag</span></h4>
         <div class="cart cart-bar__lists">


         </div>
         <div class="cart-bar__subtotal d-flex align-items-center justify-content-between">
           <span>Sub Total:</span>
           <span class="total"></span>
         </div>
         <div class="btns d-flex align-items-center justify-content-center">
           <a href="checkout.html" class="thm_btn btn-block thm_btn-2 radius_btn">Checkout</a>
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