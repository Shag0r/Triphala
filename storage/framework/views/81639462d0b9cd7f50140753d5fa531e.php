

<?php $__env->startSection('main-content'); ?>
<div class="loop-grid loop-list pr-30 mb-50">



<!-- <?php if(count($videos)>0): ?>
    <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <article class="wow fadeIn animated hover-up mb-30 animated">
                    <div class="embed-responsive embed-responsive-16by9">
                        <video class="embed-responsive-item" controls>
                            <source src="<?php echo e(Storage::url($video->video)); ?>" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="entry-content-2 pl-50">
                        <h3 class="post-title mb-20">
                            <a href="blog-post-right.html"><?php echo e($video->vtitle); ?></a>
                        </h3>
                        <p class="post-excerpt mb-40">  <?php echo e($video->vsumm); ?></p>
                        <div class="entry-meta meta-1 font-xs color-grey mt-10 pb-10">
                            <div>
                                <span class="post-on"> <?php echo e($video->vcata); ?></span>
                                <span class="hit-count has-dot"> <?php echo e($video->updated_at); ?></span>
                            </div>
                            <a href="#" class="text-brand font-heading font-weight-bold"> <?php echo e($video->vsource); ?> <i class="fi-rs-arrow-right"></i></a>
                        </div>
                    </div>
                </article>


        
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    
<?php endif; ?> -->
<?php if(count($videos) > 0): ?>
    <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($video->vstatus == 1): ?>
            <article class="wow fadeIn animated hover-up mb-30 animated">
                <div class="embed-responsive embed-responsive-16by9" style="height: 300px; width: 300px;">
                    <video class="embed-responsive-item" controls>
                        <source src="<?php echo e(Storage::url($video->video)); ?>" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="entry-content-2 pl-50">
                    <h3 class="post-title mb-20">
                        <a href="blog-post-right.html"><?php echo e($video->vtitle); ?></a>
                    </h3>
                    <p class="post-excerpt mb-40"><?php echo e($video->vsumm); ?></p>
                    <div class="entry-meta meta-1 font-xs color-grey mt-10 pb-10">
                        <div>
                            <span class="post-on"><?php echo e($video->vcata); ?></span>
                            <span class="hit-count has-dot"><?php echo e($video->updated_at); ?></span>
                        </div>
                        <a href="#" class="text-brand font-heading font-weight-bold"><?php echo e($video->vsource); ?> <i
                                class="fi-rs-arrow-right"></i></a>
                    </div>
                </div>
            </article>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>





<?php $__env->stopSection(); ?>
<?php echo $__env->make('Front.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Php--BASIS\php\htdocs\ustore\resources\views/Front/video.blade.php ENDPATH**/ ?>