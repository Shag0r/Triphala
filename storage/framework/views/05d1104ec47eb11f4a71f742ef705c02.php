
<div class="loop-grid loop-list pr-30 mb-50">
                      
                          
                            <?php if(count($blogs)>0): ?> 
                             <?php $counter = 0; ?>
                                <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($counter < 2): ?>
                                        <article class="wow fadeIn animated hover-up mb-30 animated">
                                            <div class="post-thumb" style="background-image: url(<?php echo e(asset('images/blogimgs/'.$blog->blogImg)); ?>)"></div>
                                            <div class="entry-content-2 pl-50">
                                                <h3 class="post-title mb-20">
                                                    <a href="#"><?php echo e($blog->blogtitle); ?></a>
                                                </h3>
                                                <p class="post-exerpt mb-40"><?php echo e($blog->blogsum); ?></p>
                                                <div class="entry-meta meta-1 font-xs color-grey mt-10 pb-10">
                                                    <div>
                                                        <span class="post-on"><?php echo e($blog->blogcata); ?></span>
                                                        <span class="hit-count has-dot"><?php echo e($blog->created_at); ?></span>
                                                    </div>
                                                    <a href="#" class="text-brand font-heading font-weight-bold"><?php echo e($blog->blogauthor); ?><i class="fi-rs-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </article>
                                        <?php $counter++; ?>
                                    <?php endif; ?>
                                    <?php if($counter == 2): ?> <!-- Break the loop after displaying 2 blogs -->
                                            <?php break; ?>
                                    <?php endif; ?>
                                    
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                            <?php endif; ?>
                       
                           
                           
                          
                           
</div><?php /**PATH E:\Php--BASIS\php\htdocs\ustore\resources\views/Front/homeout/homarticle.blade.php ENDPATH**/ ?>