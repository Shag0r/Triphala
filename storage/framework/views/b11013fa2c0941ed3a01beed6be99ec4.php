<h5 class="section-title style-1 mb-30">New products</h5>
                        

                        <?php
                            $p=1;
                        ?>
                        <?php if(count($products)>0): ?>
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($product->productStatus==1): ?>
                                    <div class="single-post clearfix">
                                        <div class="image">
                                            <img src="<?php echo e(asset('images/products/' . $product->productImage)); ?>" alt="#" />
                                        </div>
                                        <div class="content pt-10">
                                            <h5><a href="<?php echo e(Route('Front.shop')); ?>"><?php echo e($product->productName); ?></a></h5>
                                            <p class="price mb-0 mt-5"><?php echo e($product->productPrice); ?></p>
                                            <div class="product-rate">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                        </div>
                                </div>

                                
                            <?php endif; ?>   
                            <?php
                                if ($p == 3) {
                                    break;
                                }
                                $p++;
                            ?>                         
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                        <?php endif; ?><?php /**PATH E:\Php--BASIS\php\htdocs\ustore\resources\views/Front/shopyout/new.blade.php ENDPATH**/ ?>