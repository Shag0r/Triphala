

<?php $__env->startSection('main-content'); ?>
    <?php echo $__env->make('Front.layouts.pageheader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                       <?php echo $__env->make('Front.layouts.blog', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php echo $__env->make('Front.layouts.paginationarea', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <div class="col-lg-3 primary-sidebar sticky-sidebar">
                        <div class="widget-area">
                            
                            <?php echo $__env->make('Front.layouts.catagory', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <!-- Product sidebar Widget -->
                           <?php echo $__env->make('Front.layouts.trending', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                         
                            <!--Tags-->
                     
                            <?php echo $__env->make('Front.layouts.offerbanner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Front.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Php--BASIS\php\htdocs\ustore\resources\views/Front/index.blade.php ENDPATH**/ ?>