<header class="header-area header-style-1 header-height-2">
        <div class="mobile-promotion">
            <span>Grand opening, <strong>up to 15%</strong> off all items. Only <strong>3 days</strong> left</span>
        </div>
        <div class="header-top header-top-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info">
                            <ul>
                                
                               
                            </ul>
                        </div>
                    </div>
                   
                  
                </div>
            </div>
        </div>
        <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="header-wrap">
                    <div class="logo logo-width-1">
                        <a href="index.html"><img src="<?php echo e(asset('Front')); ?>/assets/imgs/theme/trifola.png" alt="logo" /></a>
                    </div>
                    <div class="header-right">
                        <div class="search-style-2">
                            <form action="<?php echo e(Route('Front.shop')); ?>">
                                <select class="select-active">
                                    <option>All Categories</option>
                                    
                                </select>
                                <input type="text" placeholder="Search for items..." />
                            </form>
                        </div>
                        <div class="header-action-right">
                            <div class="header-action-2">
                                
                               
                                
                                <div class="header-action-icon-2">
                                    <a class="mini-cart-icon" href="shop-cart.html">
                                        <img alt="Nest" src="<?php echo e(asset('Front')); ?>/assets/imgs/theme/icons/icon-cart.svg" />
                                        <span class="pro-count blue">2</span>
                                    </a>
                                    <a href="shop-cart.html"><span class="lable">Cart</span></a>
                                    
                                </div>
                                <div class="header-action-icon-2">
                                    <a href="page-account.html">
                                        <img class="svgInject" alt="Nest" src="<?php echo e(asset('Front')); ?>/assets/imgs/theme/icons/icon-user.svg" />
                                    </a>
                                    <a href="page-account.html"><span class="lable ml-0">Account</span></a>
                                    <div class="cart-dropdown-wrap cart-dropdown-hm2 account-dropdown">
                                        <ul>
                                          
                                            <?php if(Route::has('login')): ?>
                                                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                                    <?php if(auth()->guard()->check()): ?>
                                                        <a href="<?php echo e(url('/dashboard')); ?>" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                                                    <?php else: ?>
                                                        <a href="<?php echo e(route('login')); ?>" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                                                        <?php if(Route::has('register')): ?>
                                                            <a href="<?php echo e(route('register')); ?>" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                </div>
                                            <?php endif; ?>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>








        <div class="header-bottom header-bottom-bg-color sticky-bar">
            <div class="container">
                <div class="header-wrap header-space-between position-relative">
                    <div class="logo logo-width-1 d-block d-lg-none">
                        <a href="#"><img src="<?php echo e(asset('Front')); ?>/assets/imgs/theme/trifola.png" alt="logo" /></a>
                    </div>
                    <div class="header-nav d-none d-lg-flex">
                        <div class="main-categori-wrap d-none d-lg-block">
                            <a class="categories-button-active" href="#">
                                <span class="fi-rs-apps"></span>   All Categories
                                <i class="fi-rs-angle-down"></i>
                            </a>
                           
                        </div>
                        <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block font-heading">
                            <nav>
                                <ul>
                                    
                                    <li>
                                        <a class="active" href="<?php echo e(Route('Front.homepage')); ?>">Home  </a>
                                        
                                    </li>
                                    <li>
                                        <a href="<?php echo e(Route('Front.video')); ?>">Tutorials</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(Route('Front.shop')); ?>">Shop <i class="fi-rs-angle-down"></i></a>
                                        
                                    </li>
                                    
                                    
                                    <li>
                                        <a href="<?php echo e(Route('Front.index')); ?>">Blog <i class="fi-rs-angle-down"></i></a>
                                        
                                    </li>
                                    
                                    <li>
                                        <a href="<?php echo e(Route('Front.weather')); ?>">Weather</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>


                    <div class="hotline d-none d-lg-flex">
                        <img src="<?php echo e(asset('Front')); ?>/assets/imgs/theme/icons/icon-headphone.svg" alt="hotline" />
                        <p>01772621944<span>24/7 Support Center</span></p>
                    </div>
                   
                    <div class="header-action-right d-block d-lg-none">
                        <div class="header-action-2">
                            <div class="header-action-icon-2">
                                <a href="shop-wishlist.html">
                                    <img alt="Nest" src="<?php echo e(asset('Front')); ?>/assets/imgs/theme/icons/icon-heart.svg" />
                                    <span class="pro-count white"></span>
                                </a>
                            </div>
                            <div class="header-action-icon-2">
                                <a class="mini-cart-icon" href="#">
                                    <img alt="Nest" src="<?php echo e(asset('Front')); ?>/assets/imgs/theme/icons/icon-cart.svg" />
                                    <span class="pro-count white">2</span>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header><?php /**PATH E:\Php--BASIS\php\htdocs\ustore\resources\views/Front/layouts/nav.blade.php ENDPATH**/ ?>