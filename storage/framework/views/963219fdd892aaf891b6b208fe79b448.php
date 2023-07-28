<?php if(count($videos) > 0): ?>
    <?php $counter = 0; ?>
    <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($video->vstatus == 1 && $counter < 2): ?>
            <article class="wow fadeIn animated hover-up mb-30 animated">
                <div class="embed-responsive embed-responsive-16by9" style="height: 300px; width: 300px;">
                    <video class="embed-responsive-item" controls>
                        <source src="<?php echo e(Storage::url($video->video)); ?>" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="entry-content-2 pl-50">
                    <h3 class="post-title mb-20" style="font-family: 'YourCustomFont', sans-serif; font-size: 24px; font-weight: bold;">
                        <a href="blog-post-right.html"><?php echo e($video->vtitle); ?></a>
                    </h3>
                </div>
            </article>
            <?php $counter++; ?> 
        <?php endif; ?>
        <?php if($counter == 5): ?>
            <?php break; ?>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<?php /**PATH E:\Php--BASIS\php\htdocs\ustore\resources\views/Front/homeout/homevideo.blade.php ENDPATH**/ ?>