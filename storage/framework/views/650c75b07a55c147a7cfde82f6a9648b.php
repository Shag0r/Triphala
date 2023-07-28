                    
                        <!--end product card-->




                       
                       
                        <!--end product card-->
                       
                        <!--end product card-->
                      
                        <!--end product card-->
                        <?php if(count($products)>0): ?> 
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($product->productStatus==1): ?>
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="#">
                                                    <img class="default-img" src="<?php echo e(asset('images/products/' . $product->productImage)); ?>" alt="" />
                                                        
                                                    </a>
                                                </div>
                                                
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html"><?php echo e($product->productCatagory); ?></a>
                                                </div>
                                                <h2><a href="shop-product-right.html"><?php echo e($product->productName); ?></a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">Trifola</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span><?php echo e($product->productPrice); ?></span>
                                                        
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>BUY</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>

                                
                            <?php endif; ?>
                                
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                        <?php endif; ?>
                       <?php /**PATH E:\Php--BASIS\php\htdocs\ustore\resources\views/Front/shopyout/product.blade.php ENDPATH**/ ?>