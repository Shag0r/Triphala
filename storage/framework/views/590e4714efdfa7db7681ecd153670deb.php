


<?php $__env->startSection('main-content'); ?>
<?php echo $__env->make('Front.homeout.frontbanner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="page-content mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="shop-product-fillter mb-50 pr-30">
                            <div class="totall-product">
                                <h3>
                                    <img class="w-36px mr-10" src="<?php echo e(asset('Front')); ?>/assets/imgs/theme/icons/category-1.svg" alt="" />
                                     Articles
                                </h3>
                            </div>
                            
                        </div>
                       <?php echo $__env->make('Front.homeout.homarticle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php echo $__env->make('Front.layouts.paginationarea', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <div class="row flex-row-reverse">
                            <div class="col-lg-4-5">
                                <h3>
                                    <img class="w-36px mr-10" src="<?php echo e(asset('Front')); ?>/assets/imgs/theme/icons/category-1.svg" alt="" />
                                     Products
                                </h3>

                   
                    <div class="row product-grid">
                      <?php echo $__env->make('Front.homeout.homeproduct', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <!--end product card-->
                        
                        <!--end product card-->
                    </div>
                    <!--product grid-->
                                <h3>
                                    <img class="w-36px mr-10" src="<?php echo e(asset('Front')); ?>/assets/imgs/theme/icons/category-1.svg" alt="" />
                                     Traning
                                </h3>
                    <?php echo $__env->make('Front.homeout.homevideo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <br>
                   
                    
                    <!--End Deals-->

                    
                </div>
               
            </div>
                       
                    </div>
                   
                </div>
            </div>
        </div>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Front.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Php--BASIS\php\htdocs\ustore\resources\views/Front/homepage.blade.php ENDPATH**/ ?>