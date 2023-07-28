<div class="sidebar-widget product-sidebar mb-50 p-30 bg-grey border-radius-10">
                                <h5 class="section-title style-1 mb-30">Trending Now</h5>
                                

<?php if(count($products)>0): ?> 
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     
        <div class="single-post clearfix">
                                        <div class="image">
                                        <img src="<?php echo e(asset('images/products/' . $product->productImage)); ?>" alt="#" />
                                        </div>
                                        <div class="content pt-10">
                                            <h5><a href="shop-product-detail.html"><?php echo e($product->productName); ?></a></h5>
                                            <p class="price mb-0 mt-5"><?php echo e($product->productPrice); ?></p>
                                            <div class="product-rate">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                        </div>
                                    </div>

        
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
<?php endif; ?>
                                
                                



<?php /**PATH E:\Php--BASIS\php\htdocs\ustore\resources\views/Front/layouts/trending.blade.php ENDPATH**/ ?>